<?php
namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Evenements;
use App\Form\CommentaireType;
use App\Form\EvenementsType;
use App\Repository\CommentaireRepository;
use App\Repository\EvenementsRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @Route("/evenements")
 */
class EvenementsController extends AbstractController
{

    /**
     * @Route("/front", name="evenements_front", methods={"GET"})
     */
    public function indexFront(EvenementsRepository $evenementsRepository): Response
    {
        return $this->render('evenements/indexFront.html.twig', [
            'evenements' => $evenementsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/", name="evenements_index", methods={"GET"})
     */
    public function index(EvenementsRepository $evenementsRepository,Request $request, PaginatorInterface $paginator): Response
    {
        $evements = $evenementsRepository->findAll();
        $evements = $paginator->paginate(
            $evements,//on passe les données
            $request->query->getInt('page',1),//numéro de la page en cours 1 par défaut
            1
        );
        return $this->render('evenements/index.html.twig', [
            'evenements' => $evements,

        ]);
    }


    /**
     * @Route("/details/{id}", name="evenements_details")
     */
    public function indexDetails(EvenementsRepository $evenementsRepository,CommentaireRepository $commentaireRepository,UserRepository $userRepository,$id,Request $request, EntityManagerInterface $entityManager): Response
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
         $commentaires=$commentaireRepository->findBy(array('id_evenement'=>$evenementsRepository->find($id)));
        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setDateC(new \DateTime());
            $commentaire->setComment($this->filterwords($commentaire->getComment()));
            $commentaire->setIdEvenement($evenementsRepository->find($id));
            $commentaire->setIdUser($userRepository->find(1));
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('evenements_details', ['id'=>$id], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenements/details.html.twig', [
            'evenements' => $evenementsRepository->find($id),
            'form' => $form->createView(),
            'commentaires'=>$commentaires

        ]);
    }

    function filterwords($text){
        $filterWords = array('fuck', 'nike', 'pute','bitch');
        $filterCount = sizeof($filterWords);
        for ($i = 0; $i < $filterCount; $i++) {
            $text = preg_replace_callback('/\b' . $filterWords[$i] . '\b/i', function($matches){return str_repeat('*', strlen($matches[0]));}, $text);
        }
        return $text;
    }


    /**
     * @Route("/new", name="evenements_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenements();
        $form = $this->createForm(EvenementsType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $evenement->getUploadFile();
            $evenement->setNbParticipant(0);
            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('evenements_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenements/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/edit", name="evenements_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Evenements $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementsType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if($evenement->getFile() != null){
                $evenement->getUploadFile();
            }
            $entityManager->flush();

            return $this->redirectToRoute('evenements_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenements/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="evenements_delete")
     */
    public function delete($id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $evenement= $em->getRepository(Evenements::class)->find($id);
        $em->remove($evenement);
        $em->flush();
        return $this->redirectToRoute('evenements_index');
    }

    /**
     * @Route("/pdf/{id}", name="pdf_event")
     */
    public function pdfevent($id,EvenementsRepository $evenementsRepository)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('evenements/mypdf.html.twig', [
            'event' => $evenementsRepository->find($id)
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }
}

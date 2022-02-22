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
    /**
     * @Route("/", name="evenements_index", methods={"GET"})
     */
    public function index(EvenementsRepository $evenementsRepository): Response
    {
        return $this->render('evenements/index.html.twig', [
            'evenements' => $evenementsRepository->findAll(),
        ]);
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
     * @Route("/{id}", name="evenements_show", methods={"GET"})
     */
    public function show(Evenements $evenement): Response
    {
        return $this->render('evenements/show.html.twig', [
            'evenement' => $evenement,
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
        $examen = $em->getRepository(Evenements::class)->find($id);
        $em->remove($examen);
        $em->flush();
        return $this->redirectToRoute('evenements_index');
    }
}

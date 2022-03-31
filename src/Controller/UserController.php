<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\OffreTravailRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use function PHPUnit\Framework\countOf;
use Dompdf\Dompdf ;
use Dompdf\Options;


/**
 * @Route("/admin")
 */
class UserController extends AbstractController
{

    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('Back/user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }
    /**
     * @Route("/download", name="user_download")
     */
    public function download()
    {
        //definit les option pdf
        $pdfOptions = new Options();
        //police
        $pdfOptions->set('defaultFont', 'Arial');
        // resoudre les prob lié au ssl
        $pdfOptions->setIsRemoteEnabled(true);
        // On instancie Dompdf
        $dompdf = new Dompdf($pdfOptions);
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $dompdf->setHttpContext($context);
        // On génère le html
        $html = $this->renderView('Back/user/download.html.twig');

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // On génère un nom de fichier
        $fichier = 'user-data-'. $this->getUser()->getId() .'.pdf';

        // On envoie le PDF au navigateur
        $dompdf->stream($fichier, [
            'Attachment' => true    //méthode de stream qui va permettre de telechaarger
        ]);

        return new Response();
    }
    /**
     * @Route("/stat", name="user_stat")
     */
    public function statistic(UserRepository $userRepository)
    {
        /*$users = $userRepository->findAll();

        $userName = [];
        $userCount = [];
        $users1 = $userRepository->countByDate();
        foreach ( $users as $user){
            $userName = $user->getSexe();
        }

        foreach ($users1 as $user){
            $userCount = $user['count'];
        }*/

        $userSexe = ["Homme","Femme"];
        $HommeCount=count($userRepository->findByHomme());
        $FemmeCount=count($userRepository->findByFemme());
        $userCount = [$HommeCount,$FemmeCount];

        dump($HommeCount);
        dump($FemmeCount);
        dump($userCount);


        return $this->render('Back/user/stat.html.twig', [
            'userSexe'=>json_encode($userSexe),
                'userCount'=>json_encode($userCount),
            ]
        );
    }

    /**
     * @Route("/new", name="user_new", methods={"GET", "POST"})
     */
    public function new(Request $request,UserPasswordEncoderInterface $userPasswordEncoder ,EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file=$form->get('image')->getData();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            try{
                $file->move(
                    $this->getParameter('photo_directory'),
                    $fileName
                );
            }catch (FileException $exception){}
           // dump($user);
            $user->setPassword(
                $userPasswordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $user->setImage($fileName);
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Back/user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('Back/user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $user,UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $entityManager->flush();

            return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Back/user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/{id}", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
    }



}

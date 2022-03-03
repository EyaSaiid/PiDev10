<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use App\Security\UserAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{

    public function __construct()
    {
    }

    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request,\Swift_Mailer $mailer,UserPasswordEncoderInterface $userPasswordEncoder, GuardAuthenticatorHandler $guardHandler, UserAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            dump($user);
            dump( $form->get('password')->getData());
            $file=$form->get('image')->getData();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            try{
                $file->move(
                    $this->getParameter('photo_directory'),
                    $fileName
                );
            }catch (FileException $exception){}
            $user->setImage($fileName);

            // encode the plain password
            $user->setPassword(
            $userPasswordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $user->setActivationToken(md5(uniqid()));

            $entityManager->persist($user);
            $entityManager->flush();

            // i'm gonna do anything else i need here, like send an email

            $message =( new \Swift_Message('Please Confirm your registration'))
                ->setFrom('eyatest240@gmail.com')
                ->setTo($user->getEmail())
                ->setBody($this->renderView('registration/confirmation_email.html.twig',
                    ['token'=>$user->getActivationToken()]),'text/html') ;
            $mailer->send($message);
            $this->addFlash('message','Demande dinscription envoyé!');

            /*return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );*/
            return $this->redirectToRoute('home');

        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }


    /**
     * @Route("/verify/email/{token}", name="verify_email")
     */
    public function verifyUserEmail($token,UserRepository $userRepository)
    {
        $user=$userRepository->findOneBy(['activationToken'=>$token]);

        if(!$user){
            return $this->redirectToRoute('app_login');

        }

        $user->setActivationToken(null);
        $entityManager=$this->getDoctrine()->getManager()->flush();

        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_login');
    }

}

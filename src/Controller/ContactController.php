<?php


namespace App\Controller;


use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;

class ContactController extends AbstractController
{
    /**
     * @Route("/contactr", name="contact")
     */
    public function index_contact(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $contact= $form->getData();

            $message = (new \Swift_Message('nouveau contact'))

                ->setFrom('ton@gmail.com')
                ->setTo($contact['email'])
                ->setBody(
                    $this->renderView('emails/contact.html.twig',compact('contact')
                    ),
                    'text/html');
            $mailer->send($message);
            $this->addFlash('message','le message a bien été envoyé');
            return $this->redirectToRoute('contact');
        }
        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView()
        ]);
    }

}

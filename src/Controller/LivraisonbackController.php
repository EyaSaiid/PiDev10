<?php

namespace App\Controller;

use App\Repository\LivraisonRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\EditLivraisonType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Commande;
use App\Entity\Livraison;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LivraisonbackController extends AbstractController
{
    /**
     * @Route("/livraisonback", name="livraisonback")
     */
    public function index(): Response
    {
        return $this->render('livraisonback/index.html.twig', [
            'controller_name' => 'LivraisonbackController',
        ]);
    }
    /**
     * @Route("/Affichel", name="Affichel")
     */
    public function AfficheAF(LivraisonRepository $repo) {
        $livraison=$repo->findAll();
        return $this->render('livraisonback/showback.html.twig',
            ['livraison'=>$livraison]);
    }


    /**
     * @Route("/UpdateA/{id}", name="Update")
     */


    function Update(LivraisonRepository $repo, $id,Request $request){
        $livraison=$repo->find($id);
        $form=$this->createForm(EditLivraisonType::class,$livraison);
        $form->add('Update', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('Affichel');
        }
        return $this->render('livraisonback/Update.html.twig',[
            'f'=>$form->createView()
        ]);
    }

    /**
     * @Route("/sup/{id}",name="delete")
     */
    function delete($id, LivraisonRepository $repo){
        $livraison=$repo->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($livraison);
        $em->flush();
        return $this->redirectToRoute('Affichel');

    }
}

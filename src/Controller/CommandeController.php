<?php

namespace App\Controller;

use App\Entity\Commande;

use App\Entity\Livraison;
use App\Repository\ProduitRepository;
use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;


class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function index(): Response
    {
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }

    /**
         * @Route("/{id}", name="Commande_show", methods={"GET"})
     *//**
    public function show(CommandeRepository $repo): Response
    {
        $commande=$repo->findAll();
        return $this->render('commande/AfficherCommande.html.twig', [
            'commandes' => $commande,
        ]);
    }*/
     
    /**
     * @Route("/Ajoutercommande", name="Ajoutercommande")
     */
    public function AjouterCommande(Request $request, sessionInterface $session){
        $panierWithData = $session->get('$panierWithData',[]);

        foreach ($panierWithData as $panier){
            $commande= new Commande();
            $commande->setQuantity($panier['quantity']);
            $commande->setTotal($panier['total']);

            $em = $this->getDoctrine()->getManager();
            $em->merge($commande);
            $em->flush();
            dd($panierWithData);
        }
        $session->set('panierWithData',[]);
        $session->set('panier',[]);
        dd($panierWithData);
}
    /**
     * @Route("/ListByPoroduit/{id}", name="ListByProduit", methods={"GET"})
     */
    function ListProduitByCommande(CommandeRepository $repoA, ProduitRepository $repoH, $id){
        $commande=$repoA->find($id);
        $produit=$repoH->ListProduitByCommand($commande->getId());
        return $this->render("commande/Show1.html.twig", [
            'c'=>$commande, 'produit'=>$produit
        ]);

    }
}

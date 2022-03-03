<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/Front", name="Front")
     */
    public function index(): Response
    {
        return $this->render('Front/restaurent.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function btn_home(): Response
    {
        return $this->render('Front/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function btn_contact(): Response
    {
        return $this->render('Front/contact.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/about", name="about")
     */
    public function btn_about(): Response
    {
        return $this->render('Front/about.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/feature", name="feature")
     */
    public function btn_feature(): Response
    {
        return $this->render('Front/feature.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/team", name="team")
     */
    public function btn_team(): Response
    {
        return $this->render('Front/team.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/details_menu", name="details_menu")
     */
    public function btn_details_menu(): Response
    {
        return $this->render('Front/details_menu.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/list_restaurant", name="list_restaurant")
     */
    public function btn_list_restaurant(): Response
    {
        return $this->render('Front/listRestaurent.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }




    /**********************************************/
    /**
     * @Route("/back", name="back")
     */
    public function index2(): Response
    {
        return $this->render('Back/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/GestionUser", name="GestionUser")
     */
    public function btn_GestionUser(): Response
    {
        return $this->render('Back/GestionUtilisateur.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/GestionOffreTravail", name="GestionOffreTravail")
     */
    public function btn_GestionOffreTravail(): Response
    {
        return $this->render('Back/GestionOffreTravail.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/GestionProduit", name="GestionProduit")
     */
    public function btn_GestionProduit(): Response
    {
        return $this->render('Back/GestionProduit.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/GestionEvenement", name="GestionEvenement")
     */
    public function btn_GestionEvenement(): Response
    {
        return $this->render('Back/GestionEvenement.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/GestionMenu", name="GestionMenu")
     */
    public function btn_GestionMenu(): Response
    {
        return $this->render('Back/GestionMenu.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/GestionCommande", name="GestionCommande")
     */
    public function btn_GestionCommande(): Response
    {
        return $this->render('Back/GestionCommande.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/GestionArtiste", name="GestionArtiste")
     */
    public function btn_GestionArtiste(): Response
    {
        return $this->render('Back/GestionArtiste.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

}

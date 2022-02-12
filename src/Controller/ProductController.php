<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index(): Response
    {
        return $this->render('product/restaurent.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/home", name="home")
     */
    public function btn_home(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function btn_contact(): Response
    {
        return $this->render('product/contact.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/about", name="about")
     */
    public function btn_about(): Response
    {
        return $this->render('product/about.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/feature", name="feature")
     */
    public function btn_feature(): Response
    {
        return $this->render('product/feature.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/team", name="team")
     */
    public function btn_team(): Response
    {
        return $this->render('product/team.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/details_menu", name="details_menu")
     */
    public function btn_details_menu(): Response
    {
        return $this->render('product/details_menu.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/list_restaurant", name="list_restaurant")
     */
    public function btn_list_restaurant(): Response
    {
        return $this->render('product/listRestaurent.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/restaurant", name="restaurant")
     */
    public function btn_restaurant(): Response
    {
        return $this->render('product/restaurent.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    /**
     * @Route("/booking", name="booking")
     */
    public function btn_booking(): Response
    {
        return $this->render('product/booking.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\User;
use App\Entity\ProduitPlat;
use App\Entity\Restaurant;
use App\Form\RestaurantType;
use App\Repository\RestaurantRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\DocBlock\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/restaurant")
 */
class RestaurantController extends AbstractController
{

    /**
     * @Route("/listjson", name="produit_json")
     */
    public function ListRestaurantJson(RestaurantRepository $restaurep, SerializerInterface $serializerinterface): Response
    {
        $restaurant=$restaurep->findAll();

        $json=$serializerinterface->normalize($restaurant,'json',['groups'=>'restaurant']);
        //dump($restaurant);
        //die;
       //$formatted= $serializer->normalize($json);
        return new Response(json_encode($json));
    }


    /**
     * @Route("/findAll", name="restaurant_index", methods={"GET"})
     */
    public function index(RestaurantRepository $restaurantRepository): Response
    {
        return $this->render('Back/restaurant/index.html.twig', [
            'restaurants' => $restaurantRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="restaurant_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
        $restaurant = new Restaurant();

        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            foreach ($form['produitplats']->getData()->getValues() as $v) {
                $produitplats = $em->getRepository(ProduitPlat::class)->find($v->getIdProduitPlat());
                if ($produitplats) {
                    $produitplats->addRestaurant($restaurant);
                }
            }
            $UserId=35; // hethy twali b session
            $User=$userRepository->find($UserId);
           // $restaurant->setIdClient($UserId);
            $restaurant->setUser($User);
            $entityManager->persist($restaurant);
            $entityManager->flush();
            return $this->redirectToRoute('restaurant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Back/restaurant/new.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/liste", name="restaurant_liste", methods={"GET"})
     */
    public function index2(Request $request, PaginatorInterface $paginator): Response
    {

        $donnees = $this->getDoctrine()->getRepository(Restaurant::class)->findAll();

        $restaurants = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6 // Nombre de résultats par page
        );

        return $this->render('/Front/listRestaurent.html.twig', [

            'restaurants' => $restaurants,
        ]);

    }
    /**
     * @Route("/detail/{id_restaurant}", name="restaurant3", methods={"GET"})
     */
    public function show3(Restaurant $restaurant): Response
    {
        $Prop=$restaurant->getUser();
        $proprio=$this->getDoctrine()->getRepository(User::class)->find($Prop);
        $nomProp=$proprio->getNom();
        return $this->render('Front/restaurent.html.twig', [
            'restaurant' => $restaurant,
            'nomProp'=>$nomProp

        ]);
    }

    /**
     * @Route("/{id_restaurant}", name="restaurant_show", methods={"GET"})
     */
    public function show(Restaurant $restaurant): Response
    {
        return $this->render('Back/restaurant/show.html.twig', [
            'restaurant' => $restaurant,

        ]);
    }






    /**
     * @Route("/{id_restaurant}/aff", name="details_menu", methods={"GET"})
     */
    public function show2(Restaurant $restaurant, PaginatorInterface $paginator, Request $request): Response
    {
        $resid=$restaurant->getIdRestaurant();
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->findCategorie($resid);
        return $this->render('/Front/menu.html.twig', [
            'restaurant'=>$restaurant,
            'categorie'=>$categorie,
        ]);
    }




    /**
     * @Route("/{id_restaurant}/edit", name="restaurant_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Restaurant $restaurant,EntityManagerInterface $entityManager): Response
    {
        //$restaurant->getProduitPlats();
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('restaurant_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('Back/restaurant/edit.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_restaurant}", name="restaurant_delete", methods={"POST"})
     */
    public function delete(Request $request, Restaurant $restaurant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$restaurant->getIdRestaurant(), $request->request->get('_token'))) {
            $entityManager->remove($restaurant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('restaurant_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/back/GestionRestaurant", name="GestionRestaurant")
     */
    public function btn_GestionRestaurant(): Response
    {
        return $this->render('/Back/Gestion Restaurant/GestionRestaurant.html.twig', [
            'controller_name' => 'RestaurantController',
        ]);
    }




}

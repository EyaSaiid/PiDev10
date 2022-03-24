<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\ProduitPlat;
use App\Entity\Restaurant;
use App\Form\ProduitPlatType;
use App\Repository\ProduitPlatRepository;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/produit/plat")
 */
class ProduitPlatController extends AbstractController
{
    /**
     * @Route("/finAll", name="produit_plat_index", methods={"GET"})
     */
    public function index(ProduitPlatRepository $produitPlatRepository): Response
    {
        return $this->render('Back/produit_plat/index.html.twig', [
            'produit_plats' => $produitPlatRepository->findAll(),
        ]);
    }

    /**
     * @Route("/aff/{id_restaurant}/{id_categorie}", name="JsonProduitPlatCategorie")
     */
    public function JsonPDT(Categorie $categorie,NormalizerInterface $normalizer,Restaurant $res, Request $request):Response
    {   $resid=$res->getIdRestaurant();
        $categorie2 = $this->getDoctrine()->getRepository(Categorie::class)->findCategorie($resid);
        $id=$categorie->getIdCategorie();
        $donnees= $this->getDoctrine()->getRepository(ProduitPlat::class)->findProduitPlatByCategorieandRestaurant($resid,$id);
        $res->getProduitPlats();
        $js=$normalizer->normalize($donnees,'json',['groups'=>'post:read']);
        return new Response(json_encode($js));

    }


    /**
     * @Route("/new", name="produit_plat_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produitPlat = new ProduitPlat();
        $form = $this->createForm(ProduitPlatType::class, $produitPlat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($produitPlat);
            $entityManager->flush();

            return $this->redirectToRoute('produit_plat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Back/produit_plat/new.html.twig', [
            'produit_plat' => $produitPlat,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/stat", name="stat", methods={"GET"})
     */
    public function stat(CategorieRepository $categorieRepo): Response
    {    $categories = $categorieRepo->findAll();

        $categNom = [];
        $categCount = [];

        // On "démonte" les données pour les séparer tel qu'attendu par ChartJS
        foreach($categories as $categorie){
            $categNom[] = $categorie->getNomCategorie();
            $categCount[] = count($categorie->getProduitPlats());
        }
        return $this->render('Back/produit_plat/Graph.html.twig', [
            'categNom' => json_encode($categNom),
            'categCount' => json_encode($categCount),
        ]);
    }


    /**
     * @Route("/{id_produitplat}", name="produit_plat_show", methods={"GET"})
     */
    public function show(ProduitPlat $produitPlat): Response
    {
        return $this->render('Back/produit_plat/show.html.twig', [
            'produit_plat' => $produitPlat,
        ]);
    }

    /**
     * @Route("/showpdtCAT/{id_restaurant}/{id_categorie}", name="showProduitPlatCategorie", methods={"GET"})
     */
    public function showPDT(Categorie $categorie,PaginatorInterface $paginator,Restaurant $res, Request $request):Response
    {   $resid=$res->getIdRestaurant();
        $categorie2 = $this->getDoctrine()->getRepository(Categorie::class)->findCategorie($resid);
        $id=$categorie->getIdCategorie();
        $donnees= $this->getDoctrine()->getRepository(ProduitPlat::class)->findProduitPlatByCategorieandRestaurant($resid,$id);
        $listPdt = $paginator->paginate(
            $donnees,
            $request->query->getInt('page', 1),
            5
        );
        $res->getProduitPlats();
        return $this->render('Front/MenuCategorie.html.twig', [
            "restaurant"=>$res,
            "categorie"=>$categorie2,
            "listPdt"=>$listPdt]);
    }



    /**
     * @Route("/{id_produitplat}/edit", name="produit_plat_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ProduitPlat $produitPlat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitPlatType::class, $produitPlat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('produit_plat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Back/produit_plat/edit.html.twig', [
            'produit_plat' => $produitPlat,
            'form' => $form->createView(),
        ]);
    }





    /**
     * @Route("/{id_produitplat}", name="produit_plat_delete", methods={"POST"})
     */
    public function delete(Request $request, ProduitPlat $produitPlat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produitPlat->getIdProduitPlat(), $request->request->get('_token'))) {
            $entityManager->remove($produitPlat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('produit_plat_index', [], Response::HTTP_SEE_OTHER);
    }



}

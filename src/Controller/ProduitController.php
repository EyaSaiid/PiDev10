<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
/**
 * @Route("/produit")
 */
class ProduitController extends AbstractController
{
    /**
     * @Route("/", name="produit_index", methods={"GET"})
     */
    public function index(Request $request,ProduitRepository $produitRepository,PaginatorInterface $paginator): Response
    { $donnees =$produitRepository->findAll();

        $produit = $paginator->paginate(
        $donnees, // Requête contenant les données à paginer (ici nos articles)
        $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
        3 // Nombre de résultats par page
    );
        return $this->render('produit/index.html.twig', [
            'produits' => $produit,
        ]);

    }
    /**
     * @Route("/produitsFront", name="produit_front", methods={"GET"})
     */
    public function index_front(Request $request,ProduitRepository $produitRepository,PaginatorInterface $paginator): Response
    { $donnees =$produitRepository->findAll();

        $produit = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
        return $this->render('Front/produitDma9.html.twig', [
            'produits' => $produit,
        ]);

    }

    /**
     * @Route("/new", name="produit_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                $file=$produit->getPhoto();
                $fileName=md5(uniqid()).'.'.$file->guessExtension();
                try{
                    $file->move(
                        $this->getParameter('photo_directory'),
                        $fileName
                    );
                } catch(FileException $e) {}

                $produit->setPhoto($fileName);
                $entityManager->persist($produit);
                $entityManager->flush();

            return $this->redirectToRoute('produit_index', [], Response::HTTP_SEE_OTHER);
            }

        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/showProduit/{id}", name="showProduit")
     */
    public function showProduit($id)
    {
        $produit = $this->getDoctrine()->getRepository(Produit::class)->find($id);
        return $this->render('produit/showFront.html.twig', [
            "produit" => $produit]);
    }


/**
    * @Route("/produits/{id}", name="showProduitByCategory")
     */
    public function showProduitByCategory(ProduitRepository $repProd, CategorieRepository $repCat, Categorie $categorie)
    {
        $cat=$repCat->find($categorie->getId());
        $produit=$repProd->findByCategory1($cat->getId());
        return $this->render("Front/jointureCatPro.html.twig",[
            "p"=>$produit,'categories'=>$cat]);
    }



    /**
     * @Route("/{id}", name="produit_show", methods={"GET"})
     */
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="produit_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file=$produit->getPhoto();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            try{
                $file->move(
                    $this->getParameter('photo_directory'),
                    $fileName
                );
            } catch(FileException $e) {}

            $produit->setPhoto($fileName);
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="produit_delete", methods={"POST"})
     */
    public function delete(int $id): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Produit::class)->find($id);
        $entityManager->remove($product);
        $entityManager->flush();

        return $this->redirectToRoute("produit_index");
    }

}

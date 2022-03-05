<?php

namespace App\Controller;
use App\Entity\Category;
use App\Entity\Produit;
use App\Entity\Images;
use App\Form\CategoryType;
use App\Form\SearchProduitType;
use App\Repository\CategoryRepository;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * @Route("/category", name="category")
 */

class CategoryController extends AbstractController
{
    /**
 * @Route("/{id}", name="category_show", methods={"GET"})
 */
    public function show(Category $categorie): Response
    {
        return $this->render('categorie/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }


    /**
     * @Route("/", name="category_index", methods={"GET"})
     */
    public function index(CategoryRepository $categorieRepository): Response
    {
        return $this->render('categorie/index.html.twig', [
            'categories' => $categorieRepository->findAll(),
        ]);
    }

    /**
     * @Route("/catFront", name="category_front", methods={"GET"})
     */
    public function indexFront(CategoryRepository $categorieRepository): Response
    {
        return $this->render('Front/categorie_produit_dma9.html.twig', [
            'categories' => $categorieRepository->findAll(),
        ]);
    }

    /**
     * @Route("/nouveau", name="category_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorie = new Category();
        $form = $this->createForm(CategoryType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categorie);
            $entityManager->flush();

            return $this->redirectToRoute('category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categorie/new.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/modifier", name="category_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Category $categorie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategoryType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categorie/edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="delete", methods={"POST"})
     */
    public function delete(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $categorie = $entityManager->getRepository(Category::class)->find($id);
        $entityManager->remove($categorie);
        $entityManager->flush();

        return $this->redirectToRoute("category_index");
    }
}

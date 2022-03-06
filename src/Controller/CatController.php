<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\Category1Type;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cat")
 */
class CatController extends AbstractController
{
    /**
     * @Route("/", name="cat_index", methods={"GET"})
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('cat/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
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
     * @Route("/new", name="cat_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $category = new Category();
        $form = $this->createForm(Category1Type::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($category);
            $entityManager->flush();

            return $this->redirectToRoute('cat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cat/new.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="cat_show", methods={"GET"})
     */
    public function show(Category $category): Response
    {
        return $this->render('cat/show.html.twig', [
            'category' => $category,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="cat_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Category1Type::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('cat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cat/edit.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="cat_delete", methods={"POST"})
     */
    public function delete(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            $entityManager->remove($category);
            $entityManager->flush();
        }

        return $this->redirectToRoute('cat_index', [], Response::HTTP_SEE_OTHER);
    }
}

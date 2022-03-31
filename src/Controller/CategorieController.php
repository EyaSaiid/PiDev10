<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use App\Repository\RestaurantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/categorie")
 */
class CategorieController extends AbstractController
{
    /**
     * @Route("/listjson", name="categorie_json")
     */
    public function ListCategorieJson(CategorieRepository $cat, NormalizerInterface $normalizer): Response
    {
        $categorie=$cat->findAll();
        $js=$normalizer->normalize($categorie,'json',['groups'=>'post:read']);
        // $json=$serializerinterface->normalize($restaurant,'json',['groups'=>'restaurant']);
        // dump($restaurant);
        //die;
        //$formatted= $serializer->normalize($json);
        return new Response(json_encode($js));
    }

    /**
     * @Route("/addCategorieJSON",name="addCategorieJSON")
     */
    public function addCategorieJSON(Request $request, SerializerInterface $serializer)
    {
        $em = $this -> getDoctrine()->getManager();
        $cat = new Categorie();
        $cat->setNomCategorie($request->get('nom_categorie'));
        $em->persist($cat);
        $em->flush();
        $jsonContent = $serializer->serialize($cat, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }  ],
        );

        // On instancie la réponse
        $response = new Response($jsonContent);

        // On ajoute l'entête HTTP
        $response->headers->set('Content-Type', 'application/json');

        // On envoie la réponse
        return $response;


    }
    /**
     * @Route("/deleteCategorieJSON/{id}",name="deleteCategorieJSON")
     */

    public function deleteCategorieJSON(Request $request,SerializerInterface  $serializer, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $cat=$em->getRepository(Categorie::class)->find($id);
        $em->remove($cat);
        $em->flush();
        $jsonContent = $serializer->serialize($cat, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }  ],
        );

        // On instancie la réponse
        $response = new Response($jsonContent);

        // On ajoute l'entête HTTP
        $response->headers->set('Content-Type', 'application/json');

        // On envoie la réponse
        return $response;


    }
    /**
     * @Route("/updateCategorieJSON/{id}",name="updateCategorieJSON")
     */
    public function updateCategorieJSON(Request $request, SerializerInterface $serializer, $id)
    {
        $em = $this -> getDoctrine()->getManager();
        $cat = $em->getRepository(Categorie::class)->find($id);
        $cat->setNomCategorie($request->get('nom_categorie'));

        $em->flush();
        $jsonContent = $serializer->serialize($cat, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }  ],
        );

        // On instancie la réponse
        $response = new Response($jsonContent);

        // On ajoute l'entête HTTP
        $response->headers->set('Content-Type', 'application/json');

        // On envoie la réponse
        return $response;

    }




    /**
     * @Route("/findAll", name="categorie_index", methods={"GET"})
     */
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('/Back/categorie/index.html.twig', [
            'categories' => $categorieRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="categorie_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categorie);
            $entityManager->flush();

            return $this->redirectToRoute('categorie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Back/categorie/new.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_categorie}", name="categorie_show", methods={"GET"})
     */
    public function show(Categorie $categorie): Response
    {
        return $this->render('Back/categorie/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }

    /**
     * @Route("/{id_categorie}/edit", name="categorie_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('categorie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Back/categorie/edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_categorie}", name="categorie_delete", methods={"POST"})
     */
    public function delete(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorie->getIdCategorie(), $request->request->get('_token'))) {
            $entityManager->remove($categorie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('categorie_index', [], Response::HTTP_SEE_OTHER);
    }




}

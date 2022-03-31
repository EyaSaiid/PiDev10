<?php

namespace App\Controller;

use App\Entity\OffreTravail;
use App\Form\OffreTravailType;
use App\Repository\OffreTravailRepository;
use App\Repository\RestaurantRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use http\Client\Curl\User;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


/**
 * @Route("/offre/travail")
 */
class OffreTravailController extends AbstractController
{

    /**
     * @Route("/listjson", name="offreTravail_json")
     */
    public function ListRestaurantJson(OffreTravailRepository $offreTravailRepository, NormalizerInterface $normalizer): Response
    {
        $offre=$offreTravailRepository->findAll();
        $js=$normalizer->normalize($offre,'json',['groups'=>'post:read']);
        // $json=$serializerinterface->normalize($offre,'json',['groups'=>'offre']);
        //dump($offre);
        //die;
        //$formatted= $serializer->normalize($json);
        return new Response(json_encode($js));
    }

    /**
     * @Route("/", name="offre_travail_index", methods={"GET"})
     */
    public function index(OffreTravailRepository $offreTravailRepository): Response
    {
         $currentUserId = $this->getUser()->getId() ;// ki ngid auth nakhou id user mil session
        //dump($offreTravailRepository->findAll());
        return $this->render('Back/offre_travail/index.html.twig', [
            'offre_travails' => $offreTravailRepository->findAllByUser($currentUserId),
        ]);
    }

    /**
     * @Route("/showAll", name="offre_travail_showAll", methods={"GET"})
     */
    public function ShowAll(OffreTravailRepository $offreTravailRepository): Response
    {

        //dump($offreTravailRepository->findAll());
        return $this->render('Front/offreTravail.html.twig', [
            'offre_travails' => $offreTravailRepository->findAll(),
        ]);
    }



    /**
     * @Route("/new", name="offre_travail_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,UserRepository $userRepository): Response
    {
        $offreTravail = new OffreTravail();
        $form = $this->createForm(OffreTravailType::class, $offreTravail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $currentUserId =$this->getUser()->getId() ;// ki ngid auth nakhou id user mil session
            $currentUser =$userRepository->find($currentUserId);
            $offreTravail->setUser($currentUser);
            $entityManager->persist($offreTravail);
            $entityManager->flush();

            return $this->redirectToRoute('offre_travail_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Back/offre_travail/new.html.twig', [
            'offre_travail' => $offreTravail,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="offre_travail_show", methods={"GET"})
     */
    public function show(OffreTravail $offreTravail): Response
    {
        return $this->render('Back/offre_travail/show.html.twig', [
            'offre_travail' => $offreTravail,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="offre_travail_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, OffreTravail $offreTravail, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OffreTravailType::class, $offreTravail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('offre_travail_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Back/offre_travail/edit.html.twig', [
            'offre_travail' => $offreTravail,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="offre_travail_delete", methods={"POST"})
     */
    public function delete(Request $request, OffreTravail $offreTravail, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offreTravail->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offreTravail);
            $entityManager->flush();
        }

        return $this->redirectToRoute('offre_travail_index', [], Response::HTTP_SEE_OTHER);
    }
}

<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Restaurant;
use App\Repository\RestaurantRepository;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\RestaurantController;

/**
 * @Route("/reservation")
 */
class ReservationController extends AbstractController
{



    /**
     * @Route("/findAll", name="reservation_index", methods={"GET"})
     */
    public function index(ReservationRepository $reservationRepository): Response
    {
        return $this->render('Back/reservation/index.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }





    /**
     * @Route("/new", name="reservation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $IDrestaurant = $form["restaurants"]->getData();
           // $IDrestaurant=$reservation->getIdRestaurant();
            //$DateRes=$reservation->getDateReservation();
            $DateRes = $form["date_reservation"]->getData();
            $restaurant=$this->getDoctrine()->getRepository(Restaurant::class)->find($IDrestaurant);
            $somme=$this->getDoctrine()->getRepository(Reservation::class)->check($IDrestaurant,$DateRes)
                +$form["nombre"]->getData();
            $UserId=34; // hethy twali b session
            $User=$userRepository->find($UserId);
            $reservation->setIdClient($UserId);
            $reservation->setUser($User);
            $capacite=$restaurant->getCapacite();
            if($somme>$capacite)
            {
             return $this->render('Front/ErreurBooking.html.twig', [
                 'somme' => $somme,
                 'date'=>$DateRes,
             ]);}
            else{

                //MAIL
                $entityManager->persist($reservation);
                $entityManager->flush();
            }

           // return $this->redirectToRoute('reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Back/reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_reservation}", name="reservation_show", methods={"GET"})
     */
    public function show(Reservation $reservation): Response
    {
        return $this->render('Back/reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }




    /**
     * @Route("/{id_reservation}/edit", name="reservation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Back/reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_reservation}", name="reservation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getIdReservation(), $request->request->get('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservation_index', [], Response::HTTP_SEE_OTHER);
    }














}

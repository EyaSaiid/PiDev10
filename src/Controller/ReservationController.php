<?php

namespace App\Controller;

use App\Entity\Categorie;
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
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/reservation")
 */
class ReservationController extends AbstractController
{

    /**
     * @Route("/addReservationJSON",name="addReservationJSON")
     */
    public function addReservationJSON(Request $request, SerializerInterface $serializer)
    {
        $em = $this -> getDoctrine()->getManager();
        $reservation= new Reservation();
        $reservation->setNombre($request->get('nombre'));
        $reservation->setDateReservation(\DateTime::createFromFormat('Y-m-d', $request->get('date_reservation')));
        $restaurant=$this->getDoctrine()->getRepository(Restaurant::class)->find(18);
        $reservation->setIdRestaurant($request->get('id_restaurant'));
        $reservation->setIdClient($request->get("id_client"));
        $em->persist($reservation);
        $em->flush();
        $jsonContent = $serializer->serialize($reservation, 'json', [
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
     * @Route("/findAll", name="reservation_index", methods={"GET"})
     */
    public function index(ReservationRepository $reservationRepository): Response
    {
        return $this->render('Back/reservation/index.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }


    /**
     * @Route("/statReservation", name="statReservation", methods={"GET"})
     */
    public function stat(ReservationRepository $reservationRepo): Response
    {    $reservations = $reservationRepo->CountBydate();

        $dates = [];
        $reservationsCount = [];
        // On "démonte" les données pour les séparer tel qu'attendu par ChartJS
        foreach($reservations as $res){
            $dates[] = $res['dateReservation'];
            $reservationsCount[] = $res['count'];
        }
        return $this->render('Back/reservation/Stat.html.twig', [
            'dates' => json_encode($dates),
            'reservationsCount' => json_encode($reservationsCount),
        ]);
    }
    /**
     * @Route("/calendar", name="calendar")
     */
    public function calendrier(ReservationRepository $reservation)
    {
        $events = $reservation->findAll();

        $rdvs = [];

        foreach($events as $event){
            $idRestaurant=$event->getIdRestaurant();
            $restaurant=$this->getDoctrine()->getRepository(Restaurant::class)->find($idRestaurant);
            $rdvs[] = [

                'id' => $event->getIdReservation(),
                'date' => $event->getDateReservation()->format('Y-m-d'),
                'idRestaurant' => $event->getIdRestaurant(),
                'title'=>[$restaurant->getNomRestaurant(),
                 $event->getNombre()],
                'backgroundColor' => "White",
                'borderColor' => "black",
                'textColor' =>$event->getTextColor(),
            ];
        }

        $data = json_encode($rdvs);

        return $this->render('Back/reservation/Calendar.html.twig', compact('data'));
    }



    /**
     * @Route("/new", name="reservation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository, \Swift_Mailer $mailer): Response
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

         //   dump($this->getUser()->getId()  );
            $UserId=$this->getUser()->getId() ; // hethy twali b session
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
                $entityManager->persist($reservation);
                $entityManager->flush();
                //Mail
                $message = (new \Swift_Message('Nouvelle reservation'))
                    // On attribue l'expéditeur
                    ->setFrom('DMA9@gmail.com')
                    // On attribue le destinataire
                    ->setTo($User->getEmail())
                    // On crée le texte avec la vue
                    ->setBody(
                        $this->renderView(
                            'Front/MailReservation.html.twig', compact('reservation')
                        ),
                        'text/html'
                    )
                ;
                $mailer->send($message);
                $this->addFlash('message', 'Votre reservation a ete bien ajoutée.');

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
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager, UserRepository $userRepository, \Swift_Mailer $mailer): Response
    {   $reservationOld=$this->getDoctrine()->getRepository(Reservation::class)->find(37);
        $form = $this->createForm(ReservationType::class, $reservation);
        $oldValues = clone($reservationOld);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $IDrestaurant = $form["restaurants"]->getData();
            // $IDrestaurant=$reservation->getIdRestaurant();
            //$DateRes=$reservation->getDateReservation();
            $DateRes = $form["date_reservation"]->getData();
            $restaurant=$this->getDoctrine()->getRepository(Restaurant::class)->find($IDrestaurant);
            $somme=$this->getDoctrine()->getRepository(Reservation::class)->check($IDrestaurant,$DateRes)
                +$form["nombre"]->getData()-$oldValues->getNombre();
            $UserId=34; // hethy twali b session
            $User=$userRepository->find($UserId);
            $reservation->setIdClient($UserId);
            $reservation->setUser($User);
            $capacite=$restaurant->getCapacite();
            if($somme>$capacite)
            {
                return $this->render('Back/reservation/ErreurBookingBack.html.twig', [
                    'somme' => $oldValues->getNombre(),
                    'date'=>$DateRes,
                ]);}

            else{
                $entityManager->flush();

                //Mail
                $message = (new \Swift_Message('Modification de la reservation'))
                    // On attribue l'expéditeur
                    ->setFrom('DMA9@gmail.com')
                    // On attribue le destinataire
                    ->setTo($User->getEmail())
                    // On crée le texte avec la vue
                    ->setBody(
                        $this->renderView(
                            'Back/reservation/MailReservationEdit.html.twig', compact('reservation')
                        ),
                        'text/html'
                    )
                ;
                $mailer->send($message);
                $this->addFlash('message', 'Votre reservation a ete bien modifiée.');
            }

           // return $this->redirectToRoute('reservation_index', [], Response::HTTP_SEE_OTHER);
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


    /**
     * @Route("/ajouterResJson/new", name="reservation_add")
     */
    public function AjouterJson(Request $request, NormalizerInterface $Normalizer): Response
    {   $em=$this->getDoctrine()->getManager();
        $reservation= new Reservation();
        $reservation->setUser($request->get("id_client"));
        $reservation->setNombre($request->get('nombre'));
        $reservation->setDateReservation(\DateTime::createFromFormat('Y-m-d', $request->get('date_reservation')));
        $restaurant=$this->getDoctrine()->getRepository(Restaurant::class)->find(18);
        $reservation->setIdRestaurant($request->get('id_restaurant'));
        $reservation->setIdClient($request->get("id_client"));
        $em->persist($reservation);
        $em->flush();
        $jsoncontent = $Normalizer->normalize($reservation,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsoncontent));
    }













}

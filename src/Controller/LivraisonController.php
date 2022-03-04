<?php

namespace App\Controller;

use App\Entity\Commande_produit;
use App\Entity\Livraison;
use App\Entity\User;
use App\Form\LivraisonType;
use App\Form\EditLivraisonType;
use App\Repository\LivraisonProduitRepository;
use App\Repository\LivraisonRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/livraison")
 */
class LivraisonController extends AbstractController
{
    /**
     * @Route("/", name="livraison_index", methods={"GET"})
     */
    public function index(LivraisonRepository $livraisonRepository): Response
    {
        return $this->render('panier/showcmd.html.twig', [
            'livraisons' => $livraisonRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="livraison_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager , ProduitRepository $produitRepository): Response
    {

        $session=  $this->get('session');

        if (!$session->has('panier')) {$session->set('panier',array());}
        $panier = $session->get('panier');
        $livraison = new Livraison();
        $form = $this->createForm(LivraisonType::class, $livraison );
        $form->handleRequest($request);
        $usr= new User();
        $usr->setId(1);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($livraison);
            $livraison->setUser($usr);
            $livraison->setTotal(0);
            $livraison->setEtat('non livré');
            $entityManager->persist($livraison);
            $entityManager->flush();
            foreach ($panier as $id => $qte) {
                $cp = new Commande_produit();
                $article = $produitRepository->findOneBy(['id' => $id]);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($cp);
                $cp->setProduit($article);
                $cp->setLivraison($livraison);
                $cp->setQte($qte);
                $entityManager->persist($cp);

                $entityManager->flush();
            }
            //AAAAAAAAAAAAAAAAAAAAA
       /*
        $livraison = new Livraison();
        $form = $this->createForm(LivraisonType::class, $livraison);
        $form->handleRequest($request);
*/




            return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('livraison/new.html.twig', [
            'livraison' => $livraison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="livraison_show", methods={"GET"})
     */
    public function show(Livraison $livraison,  LivraisonProduitRepository $livraisonProduitRepository): Response
    {
$lp= $livraisonProduitRepository->findBy(array('livraison' =>$livraison->getId()));
        return $this->render('livraison/show.html.twig', [
            'livraison' => $livraison,
            'lp' => $lp
        ]);
    }


    /**
     * @Route("/{id}/edit", name="livraison_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Livraison $livraison, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EditLivraisonType::class, $livraison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('livraison_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('livraison/edit.html.twig', [
            'livraison' => $livraison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="livraison_delete", methods={"POST"})
     */
    public function delete(Request $request, Livraison $livraison, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$livraison->getId(), $request->request->get('_token'))) {
            $entityManager->remove($livraison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('livraison_index', [], Response::HTTP_SEE_OTHER);
    }
}

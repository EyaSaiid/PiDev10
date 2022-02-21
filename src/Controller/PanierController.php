<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(SessionInterface $session, ProduitRepository $produitRepository)
    {
        $panier = $session->get('panier',[]);

        $panierWithData = [];

        foreach ($panier as $id => $quantity) {
            $panierWithData[] =[
                'product' => $produitRepository->find($id),
                'quantity'=>$quantity
            ];

        }//dd($panierWithData);
        $total =0;
         foreach ($panierWithData as $item){
             $totalItem = $item['product']->getPrixProduit()* $item['quantity'];
             $total += $totalItem;
         }

        return $this->render('panier/index.html.twig', [
                   'items'=> $panierWithData,
                    'total'=>$total
        ]);

    }
    /**
     * @Route("/panier/add/{id}", name="cart_add")
     */
    public function add($id, SessionInterface $session)
    {

        $panier = $session->get('panier', []);
        if (!empty($panier[$id])){
            $panier[$id]++;
        }else{
            $panier[$id]=1;
        }
        $session->set('panier',$panier);
        return $this->redirectToRoute('panier');
    }

    /**
     * @Route("/panier/remove/{id}", name="cart_remove")
     */
    public function remove($id, SessionInterface $session){
        $panier= $session->get('panier', []);

        if(!empty($panier[$id])){
            unset($panier[$id]);
        }
        $session->set('panier',$panier);
        return $this->redirectToRoute('panier');

    }
    /**
     * @Route("/panier/remove}", name="remove_all")
     */
    public function deleteAll(SessionInterface $session)
    {
        $session->remove("panier");
        return $this->redirectToRoute('panier');
    }
}

<?php

namespace App\Controller;

use App\Entity\Commande_produit;
use App\Entity\Livraison;
use App\Entity\User;
use App\Form\LivraisonType;
use App\Repository\LivraisonRepository;
use App\Repository\ProduitRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier", methods={"GET","POST"})
     */


    public function getPanier(ProduitRepository $produitRepository , Request  $request)
    {
        $articles=[];
        $qts=[];
      $session=  $this->get('session');

        if (!$session->has('panier')) {$session->set('panier',array());}
        $panier = $session->get('panier');
        $total=0;
        foreach ($panier as $id => $qte){
            $article= $produitRepository->findOneBy(['id' =>$id]);
            array_push($articles,$article);
            array_push($qts,$qte);

            $total+=$qte*$article->getPrixProduit();
        }
        $livraison = new Livraison();
        $form = $this->createForm(LivraisonType::class, $livraison );
        $form->handleRequest($request);
        $usr= 1;
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($livraison);
            $livraison->setUser($usr);
            $livraison->setTotal(0);
            $entityManager->flush();
            foreach ($panier as $id => $qte) {
                $cp = new Commande_produit();

                $article = $produitRepository->findOneBy(['id' => $id]);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($cp);
                $cp->setProduit($article);
                $cp->setLivraison($livraison);
                $cp->setQte($qte);
                $entityManager->flush();
            }
            $entityManager->persist($livraison);
            $livraison->setTotal($total);
            $entityManager->flush();
            $this->getDoctrine()->getManager()->flush();
            $this->viderPanier();
            return $this->redirectToRoute('Front');
        }


                return $this->render('panier/index.html.twig', [
            'articles' => $articles,
            'total' => $total,
            'nbr'=>$this->panierCount(),
            'qts' => $qts,
                    'total' =>$total,


        ]);
    }


        public function  panierCount(){
        $session = $this->get('session');
        $nbr=0;
        if ($session->has('panier')) {$nbr=count($session->get('panier'));}
        return($nbr);
    }
    /*
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
                       'total'=>$total,
                       'quantity'=> $quantity
           ]);

       }
    */
/*
    /**
     * @Route("/panier/add/{id}", name="cart_add")
     */
    /*
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
*/

    /**
     * @Route("/panier/ajout", name="panier_ajout")
     */
    public  function ajoutauPanier(Request $request,ProduitRepository $produitRepository){
        $id= $request->query->get('id');;
        $session = $this->get('session');
        if (!$session->has('panier')) {$session->set('panier',array());}
        $panier = $session->get('panier');
        $article= $produitRepository->findOneBy(['id' =>$id]);
        if(array_key_exists($id,$panier)) { $panier[$id]+=1; }
        else{
            $panier[$id]=1;

        }
        $session->set('panier',$panier);
        return( $this->redirectToRoute('panier'));
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

    /**
     * @Route("/panier/plus", name="panier_plus")
     */
    public  function plusPanier(\Symfony\Component\HttpFoundation\Request $request){

        $id= $request->query->get('id');
        $session = $this->get('session');
        if (!$session->has('panier')) {$session->set('panier',array());}
        $panier = $session->get('panier');
        if(array_key_exists($id,$panier)) { $panier[$id]+=1; }
        else{  $panier[$id]=1; }
        $session->set('panier',$panier);
        return( $this->redirectToRoute('panier'));

    }

    /**
     * @Route("/panier/minus", name="panier_minus")
     */
    public  function minusPanier(Request $request){

        $id= $request->query->get('id');
        $session = $this->get('session');
        if (!$session->has('panier')) {$session->set('panier',array());}
        $panier = $session->get('panier');
        if(array_key_exists($id,$panier)) { $panier[$id]-=1; }
        if($panier[$id]==0){unset($panier[$id]);}
        $session->set('panier',$panier);
        return( $this->redirectToRoute('panier'));

    }
    public  function viderPanier(){
        $session = $this->get('session');
        $session->set('panier',array());
    }
    /**
     * @Route("/commandedetatil", name="cmd_client", methods={"GET","POST"})
     */
    public  function  cmdclient(Request $request , LivraisonRepository $livraisonRepository ): Response{
        $usr= new User();
        $usr->setId(2);
        $livraisons= $livraisonRepository->findBy(array('user'=>$usr));
        return $this->render('panier/showcmd.html.twig', [
            'commandess' => $livraisons,

        ]);
    }
}

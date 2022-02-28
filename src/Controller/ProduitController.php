<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Form\SearchProduitType;
use App\Repository\CategorieRepository;
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
 * @Route("/produit")
 */
class ProduitController extends AbstractController
{
    /**
     * @Route("/", name="produit_index", methods={"GET"})
     */
    public function index(CategorieRepository $catRepo,CacheInterface $cache,Request $request,ProduitRepository $produitRepository,PaginatorInterface $paginator): Response
    {
        $donnees = $produitRepository->findAll();

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
     * @Route("/produitsFront", name="produit_front")
     */
    public function index_front(CategorieRepository $catRepo,CacheInterface $cache,Request $request,ProduitRepository $produitRepository,PaginatorInterface $paginator): Response
    {

      /** $donnees =$produitRepository->findAll();

       $produit = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
           $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
          3 // Nombre de résultats par page
        );*/
        $produit =$produitRepository->findAll();
       $form = $this->createForm(SearchProduitType::class);
        $search = $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid())
      {
            $produit = $produitRepository->search(
                $search->get('mots')->getData());
        }
        return $this->render('Front/produitDma9.html.twig', [
            'produits' => $produit,
            'form'=>$form->createView()

        ]);

    }

        //  $limit = 1;
        // $page = (int)$request->query->get("page", 1);
        // $filters = $request->get("categories");
        // $total = $produitRepository->getTotalProduits($filters);
        //if ($request->get('ajax')) {
        //  return new JsonResponse([
        //    'content' => $this->renderView('Front/testAjax.html.twig', compact('produits','limit','page'))
        //]);}

        //$categorie = $cache->get('categories_list', function(ItemInterface $item) use($catRepo){
        //  $item->expiresAfter(3600);

        //return $catRepo->findAll();
        //  });

        // return $this->render('Front/produitDma9.html.twig', compact('produits', 'total','limit','page','categorie'));

   // }



    /**
     * @Route("/nouveau", name="produit_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                $file=$produit->getPhoto();
               // foreach ($file as $fil) {
                    $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                    try {
                        $file->move(
                            $this->getParameter('photo_directory'),
                            $fileName
                        );
                    } catch (FileException $e) {
                    }
               // }

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
     * @Route("/listjson", name="produit_json")
     */
    public function test_json(ProduitRepository $prorep, SerializerInterface $serializerinterface): Response
    {
        $produit=$prorep->findAll();
        $json=$serializerinterface->serialize($produit,'json',['groups'=>'produits']);
        dump($produit);
        die;
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
    public function showProduitByCategory(PaginatorInterface $paginator,Request $request,ProduitRepository $repProd, CategorieRepository $repCat, Categorie $categorie)
    {$donnees =$repProd->findByCategory1($categorie->getId());
        $produit = $paginator->paginate(
        $donnees, // Requête contenant les données à paginer (ici nos articles)
        $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
        3 // Nombre de résultats par page
    );
        $cat=$repCat->find($categorie->getId());
        $produit=$repProd->findByCategory1($cat->getId());
        return $this->render("Front/jointureCatPro.html.twig",[
            "p"=>$produit,'categories'=>$cat]);

    }

    /**
     * @Route("/statistiques", name="statistiques")
     */
    public function statistiques(ProduitRepository $repProd, CategorieRepository $repCat)
    { $categories = $repCat->findAll();

        $categNom = [];
      //  $categColor = [];
        $categCount = [];

        // On "démonte" les données pour les séparer tel qu'attendu par ChartJS
        foreach($categories as $categorie){
            $categNom[] = $categorie->getLibelle();
            //$categColor[] = $categorie->getColor();
            $categCount[] = count($categorie->getProduits());
        }

        // On va chercher le nombre d'annonces publiées par date
        $produit = $repProd->countByCategorie();

        $produitCount = [];

        // On "démonte" les données pour les séparer tel qu'attendu par ChartJS
        foreach($produit as $produit){
           // $dates[] = $produit['t.id'];
            //$produitCount[] = $produit['count'];
        }

        return $this->render('produit/stats.html.twig', [
            'categNom' => json_encode($categNom),

            'categCount' => json_encode($categCount),

            'produitCount' => json_encode($produitCount),
        ]);
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
     * @Route("/favoris/ajout/{id}", name="ajout_favoris")
     */
    public function ajoutFavoris(Produit $produit)
    {
        if(!$produit){
            throw new NotFoundHttpException('Pas de produit trouvé');
        }
        $produit->addFavori($this->getUser());

        $em = $this->getDoctrine()->getManager();
        $em->persist($produit);
        $em->flush();
        return $this->redirectToRoute('produit_front');
    }

    /**
     * @Route("/favoris/retrait/{id}", name="retrait_favoris")
     */
    public function retraitFavoris(Produit $produit)
    {
        if(!$produit){
            throw new NotFoundHttpException('Pas de produit trouvé');
        }
        $produit->removeFavori($this->getUser());

        $em = $this->getDoctrine()->getManager();
        $em->persist($produit);
        $em->flush();
        return $this->redirectToRoute('produit_front');
    }
    /**
     * @Route("/{id}/modifier", name="produit_edit", methods={"GET", "POST"})
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

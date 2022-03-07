<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use App\Repository\EvenementsRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/commentaire")
 */
class CommentaireController extends AbstractController
{

    /**
     * @Route("/{id}/edit/{ide}", name="commentaire_edit")
     */
    public function edit(EvenementsRepository $evenementsRepository,CommentaireRepository $commentaireRepository,UserRepository $userRepository,Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager,$ide): Response
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
        $commentaires=$commentaireRepository->findBy(array('id_evenement'=>$evenementsRepository->find($ide)));


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('evenements_details', ['id'=>$ide], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenements/details.html.twig', [
            'evenements' => $evenementsRepository->find($ide),
            'form' => $form->createView(),
            'commentaires'=>$commentaires
        ]);
    }

    /**
     * @Route("/delete/{ide}/{idc}", name="commentaire_delete")
     */
    public function delete($idc,$ide): Response
    {
        $em = $this->getDoctrine()->getManager();
        $c = $em->getRepository( Commentaire::class)->find($idc);
        $em->remove($c);
        $em->flush();
        return $this->redirectToRoute('evenements_details', ['id'=>$ide]);
    }
}

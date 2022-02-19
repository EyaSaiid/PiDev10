<?php

namespace App\Repository;

use App\Entity\Produit;
use App\Form\ProduitType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }


    public function findByCategory($id)
    {
       $entityManager=$this->getEntityManager();
       $query=$entityManager
           ->createQuery("SELECT p FROM APP\Entity\Produit p 
           JOIN p.Categorie c WHERE c.id=:id")
           ->setParameter('id',$id);
       return $query->getResult();
    }

    public function findByCategory1($id)
    {
       return $this->createQueryBuilder('p')
           ->join('p.Categorie','cat')
           ->addSelect('cat')
           ->where('cat.id=:id')
           ->setParameter('id',$id)
           ->getQuery()->getResult();
    }
}

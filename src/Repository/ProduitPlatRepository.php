<?php

namespace App\Repository;

use App\Entity\ProduitPlat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProduitPlat|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProduitPlat|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProduitPlat[]    findAll()
 * @method ProduitPlat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitPlatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProduitPlat::class);
    }

    public function findProduitPlatByCategorie($cat){

        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQuery("SELECT p FROM APP\Entity\ProduitPlat p JOIN p.categories c WHERE c.id_categorie=:cat")
            ->setParameter('cat',$cat);
        return $query->getResult();
    }


    public function findProduitPlatByCategorieandRestaurant($res,$cat){

        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQuery("SELECT p 
            FROM APP\Entity\ProduitPlat p 
            JOIN p.restaurants r INNER JOIN p.categories c
            WHERE c.id_categorie=:cat
            and r.id_restaurant=:res")
            ->setParameter('res',$res)
            ->setParameter('cat',$cat);

        return $query->getResult();
    }




    // /**
    //  * @return ProduitPlat[] Returns an array of ProduitPlat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProduitPlat
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */






}

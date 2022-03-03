<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    // /**
    //  * @return Reservation[] Returns an array of Reservation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reservation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */



    public function check($idres,$Date)
    {
        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQuery("SELECT SUM(r.nombre) as somme FROM APP\Entity\Reservation r JOIN r.restaurants res WHERE res.id_restaurant=:idres and r.date_reservation=:Date")
            ->setParameter('idres',$idres)
            ->setParameter('Date',$Date);
        return $query->getSingleScalarResult();
    }
    public function CountBydate()
    { $query = $this->createQueryBuilder('r')
            ->select('SUBSTRING(r.date_reservation, 1, 10) as dateReservation, COUNT(r) as count')
           ->groupBy('dateReservation')
         ;
         return $query->getQuery()->getResult();
       // $entityManager=$this->getEntityManager();
        //$query=$entityManager
          //  ->createQuery("SELECT SUBSTRING(date_reservation) as dateReservation, COUNT(r) as count
            //FROM APP\Entity\Reservation r GROUP BY r.date_reservation");
       // return $query->getResult();
    }
}

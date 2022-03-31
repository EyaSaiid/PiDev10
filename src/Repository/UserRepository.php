<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }


    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function findByHomme()
    {
        return$this->createQueryBuilder('u')
            ->where('u.sexe LIKE :sexe')
            ->setParameter('sexe','Homme')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findByFemme()
    {
        return$this->createQueryBuilder('u')
            ->where('u.sexe LIKE :sexe')
            ->setParameter('sexe','Femme')
            ->getQuery()
            ->getResult()
            ;
    }

    public function verifier($email, $mdp)
    {
        {
            $em = $this->getEntityManager();

            $query = $em->createQuery(
                'SELECT u FROM   App\Entity\User u  where   u.password = :pass   and  u.email = :email '
            );
            $query->setParameter('email', $email);
            $query->setParameter('pass', $mdp);


            return $query->getResult();
        }
    }
    public function verifieremail($email)
    {
        {
            $em = $this->getEntityManager();

            $query = $em->createQuery(
                'SELECT u FROM   App\Entity\User u  where   u.email = :email '
            );
            $query->setParameter('email', $email);


            return $query->getResult();
        }
    }
    public function verifierid($id)
    {
        {
            $em = $this->getEntityManager();

            $query = $em->createQuery(
                'SELECT u FROM   App\Entity\User u  where   u.id = :id '
            );
            $query->setParameter('id', $id);


            return $query->getResult();
        }
    }

    /*
     * @return void
     */
    public function countByDate(){
        $query = $this->createQueryBuilder('u')
            ->select('SUBSTRING(u.date, 1, 10) as dat, COUNT(u) as count')
            ->groupBy('dat');
        return$query->getQuery()->getResult();
    }

}

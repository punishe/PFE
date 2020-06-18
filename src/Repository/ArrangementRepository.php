<?php

namespace App\Repository;

use App\Entity\Arrangement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Arrangement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Arrangement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Arrangement[]    findAll()
 * @method Arrangement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArrangementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Arrangement::class);
    }

    // /**
    //  * @return Arrangement[] Returns an array of Arrangement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Arrangement
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

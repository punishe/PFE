<?php

namespace App\Repository;

use App\Entity\Proporty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Proporty|null find($id, $lockMode = null, $lockVersion = null)
 * @method Proporty|null findOneBy(array $criteria, array $orderBy = null)
 * @method Proporty[]    findAll()
 * @method Proporty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProportyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Proporty::class);
    }
    /**
     * @return Proporty[]
     */
   
    public function findAllVisible(): array
    {
        return $this->findVisibleQuery()
        ->getQuery()
        ->getResult();
    }
    /**
     * @return Proporty[]
     */
    public function findLatest(): array
    {
        return $this->findVisibleQuery()
        ->getQuery()
        ->getResult();
    }
    private function findVisibleQuery()
    {
        return $this->createQueryBuilder('p');
    }

    // /**
    //  * @return Proporty[] Returns an array of Proporty objects
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
    public function findOneBySomeField($value): ?Proporty
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

<?php

namespace App\Repository;

use App\Entity\AdminCommentController;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AdminCommentController|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminCommentController|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminCommentController[]    findAll()
 * @method AdminCommentController[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminCommentControllerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdminCommentController::class);
    }

    // /**
    //  * @return AdminCommentController[] Returns an array of AdminCommentController objects
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
    public function findOneBySomeField($value): ?AdminCommentController
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

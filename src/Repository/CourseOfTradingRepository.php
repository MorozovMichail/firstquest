<?php

namespace App\Repository;

use App\Entity\CourseOfTrading;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CourseOfTrading|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourseOfTrading|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourseOfTrading[]    findAll()
 * @method CourseOfTrading[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourseOfTradingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CourseOfTrading::class);
    }
//стандартный, начальный
    public function getLatestBlogs()
    {
        $qb = $this->createQueryBuilder('b')
            ->select('b')
            ->addOrderBy('b.id', 'ASC');




        return $qb->getQuery()
            ->getResult();
    }



    public function kryb($why,$direct)
    {

        $qb = $this->createQueryBuilder('b')
            ->select('b')
            ->addOrderBy('b.'. $why, $direct);



        return $qb->getQuery()
            ->getResult();
    }




    // /**
    //  * @return CourseOfTrading[] Returns an array of CourseOfTrading objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CourseOfTrading
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

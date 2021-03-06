<?php

namespace App\Repository;

use App\Entity\Cart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cart|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cart|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cart[]    findAll()
 * @method Cart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cart::class);
    }

    // /**
    //  * @return Cart[] Returns an array of Cart objects
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
    public function findOneBySomeField($value): ?Cart
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    // public function addqty($qty)
    // {
    //     return $this->getEntityManager()
    //         ->createQuery('UPDATE  
    //         TABLE CartProds 
    //         SET (qty)'
    //         )->setParameter('qty',$qty)->getResult();
    // }
//    public function findbyuserid($userid)
//    {
//        return 'CAST(' .$this->getEntityManager()
//            ->createQuery('SELECT p.id
//            FROM App:Cart p
//        WHERE p.userCart =:userid'
//
//            )->setParameter('userid', $userid)->getResult(). ' AS integer)';
//    }
    public function findusercart($str)
    {
        return $this->getEntityManager()
            ->createQuery('SELECT p.id
            FROM App:Cart p
        WHERE '

            )->setParameter('str', '%'.$str.'%')->getResult();
    }
}

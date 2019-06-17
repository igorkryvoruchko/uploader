<?php

namespace App\Repository;

use App\Entity\Uploader;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Uploader|null find($id, $lockMode = null, $lockVersion = null)
 * @method Uploader|null findOneBy(array $criteria, array $orderBy = null)
 * @method Uploader[]    findAll()
 * @method Uploader[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UploaderRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Uploader::class);
    }

    // /**
    //  * @return Uploader[] Returns an array of Uploader objects
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
    public function findOneBySomeField($value): ?Uploader
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

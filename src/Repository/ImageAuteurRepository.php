<?php

namespace App\Repository;

use App\Entity\ImageAuteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ImageAuteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageAuteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageAuteur[]    findAll()
 * @method ImageAuteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageAuteurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ImageAuteur::class);
    }

    // /**
    //  * @return ImageAuteur[] Returns an array of ImageAuteur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImageAuteur
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

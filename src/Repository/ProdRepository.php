<?php

namespace App\Repository;

use App\Entity\Prod;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Prod|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prod|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prod[]    findAll()
 * @method Prod[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prod::class);
    }

    // /**
    //  * @return Prod[] Returns an array of Prod objects
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
    public function findOneBySomeField($value): ?Prod
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function findByExpField($value)
    {
        return $this->createQueryBuilder('lid')
            ->Where('lid.id like :val or lid.nomProd like :val or lid.prixProd like :val or lid.statusProd like :val or lid.rateProd like :val or lid.descriptionProd like :val or lid.categorieProd like :val')
            ->setParameter('val', '%'.$value.'%')
            ->orderBy('lid.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findlivr()
    {
        $query = $this
            ->createQueryBuilder('c')
            ->select( 'c')
            ->addOrderBy('c.id', 'DESC')
            ->setMaxResults(1);
        return $query->getQuery()->getSingleResult();

    }
}

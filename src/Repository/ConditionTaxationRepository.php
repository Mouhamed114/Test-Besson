<?php

namespace App\Repository;

use App\Entity\ConditionTaxation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ConditionTaxation>
 *
 * @method ConditionTaxation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConditionTaxation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConditionTaxation[]    findAll()
 * @method ConditionTaxation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConditionTaxationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConditionTaxation::class);
    }

    public function save(ConditionTaxation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ConditionTaxation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ConditionTaxation[] Returns an array of ConditionTaxation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

   public function findOneByIdClient($idClient): ?ConditionTaxation
   {
       return $this->createQueryBuilder('c')
           ->andWhere('c.idClient = :idClient')
           ->setParameter('idClient', $idClient)
           ->getQuery()
           ->getOneOrNullResult()
       ;
   }
}

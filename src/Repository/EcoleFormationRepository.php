<?php

namespace App\Repository;

use App\Entity\EcoleFormation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EcoleFormation|null find($id, $lockMode = null, $lockVersion = null)
 * @method EcoleFormation|null findOneBy(array $criteria, array $orderBy = null)
 * @method EcoleFormation[]    findAll()
 * @method EcoleFormation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EcoleFormationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EcoleFormation::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(EcoleFormation $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(EcoleFormation $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return EcoleFormation[] Returns an array of EcoleFormation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EcoleFormation
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

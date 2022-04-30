<?php

declare(strict_types=1);

/*
 * This file is part of jdwiese/contao-entities-core-bundle.
 *
 * (c) Jan-Dirk Wiese
 *
 * @license LGPL-3.0-or-later
 */

namespace Jdwiese\ContaoEntitiesCoreBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlNewsArchive;

/**
 * @method TlNewsArchive|null    find($id, $lockMode = null, $lockVersion = null)
 * @method TlNewsArchive|null    findOneBy(array $criteria, array $orderBy = null)
 * @method array|TlNewsArchive[] findAll()
 * @method array|TlNewsArchive[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlNewsArchiveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TlNewsArchive::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(TlNewsArchive $entity, bool $flush = true): void
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
    public function remove(TlNewsArchive $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);

        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return TlNewsArchive[] Returns an array of TlNewsArchive objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TlNewsArchive
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

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
use Jdwiese\ContaoEntitiesCoreBundle\Entity\CronJob;

/**
 * @method CronJob|null    find($id, $lockMode = null, $lockVersion = null)
 * @method CronJob|null    findOneBy(array $criteria, array $orderBy = null)
 * @method array|CronJob[] findAll()
 * @method array|CronJob[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CronJobRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CronJob::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(CronJob $entity, bool $flush = true): void
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
    public function remove(CronJob $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);

        if ($flush) {
            $this->_em->flush();
        }
    }
}

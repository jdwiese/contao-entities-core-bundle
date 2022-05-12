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
use Jdwiese\ContaoEntitiesCoreBundle\Entity\StyleSheet;

/**
 * @method StyleSheet|null    find($id, $lockMode = null, $lockVersion = null)
 * @method StyleSheet|null    findOneBy(array $criteria, array $orderBy = null)
 * @method array|StyleSheet[] findAll()
 * @method array|StyleSheet[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StyleSheetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StyleSheet::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(StyleSheet $entity, bool $flush = true): void
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
    public function remove(StyleSheet $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);

        if ($flush) {
            $this->_em->flush();
        }
    }
}

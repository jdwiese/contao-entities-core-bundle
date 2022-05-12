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
use Jdwiese\ContaoEntitiesCoreBundle\Entity\ImageSize;

/**
 * @method ImageSize|null    find($id, $lockMode = null, $lockVersion = null)
 * @method ImageSize|null    findOneBy(array $criteria, array $orderBy = null)
 * @method array|ImageSize[] findAll()
 * @method array|ImageSize[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageSizeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageSize::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(ImageSize $entity, bool $flush = true): void
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
    public function remove(ImageSize $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);

        if ($flush) {
            $this->_em->flush();
        }
    }
}
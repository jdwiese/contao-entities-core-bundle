<?php

declare(strict_types=1);

/*
 * This file is part of jdwiese/contao-entities-core-bundle.
 *
 * (c) Jan-Dirk Wiese
 *
 * @license LGPL-3.0-or-later
 */

namespace Jdwiese\ContaoEntitiesCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlSearchIndex.
 *
 * @ORM\Table(name="tl_search_index", indexes={@ORM\Index(name="pid", columns={"pid"})})
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlSearchIndexRepository")
 */
class TlSearchIndex
{
    /**
     * @var int
     *
     * @ORM\Column(name="pid", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pid;

    /**
     * @var int
     *
     * @ORM\Column(name="termId", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $termid;

    /**
     * @var int
     *
     * @ORM\Column(name="relevance", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $relevance;

    public function getPid(): ?int
    {
        return $this->pid;
    }

    public function getTermid(): ?int
    {
        return $this->termid;
    }

    public function getRelevance(): ?int
    {
        return $this->relevance;
    }

    public function setRelevance(int $relevance): self
    {
        $this->relevance = $relevance;

        return $this;
    }
}

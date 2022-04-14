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
 * TlSearchTerm.
 *
 * @ORM\Table(name="tl_search_term", uniqueConstraints={
 *     @ORM\UniqueConstraint(name="term", columns={"term"})
 * }, indexes={
 *     @ORM\Index(name="documentfrequency", columns={"documentFrequency"})
 * })
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlSearchTermRepository")
 */
class TlSearchTerm
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="term", type="string", length=64, nullable=false)
     */
    private $term;

    /**
     * @var int
     *
     * @ORM\Column(name="documentFrequency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $documentfrequency;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTerm(): ?string
    {
        return $this->term;
    }

    public function setTerm(string $term): self
    {
        $this->term = $term;

        return $this;
    }

    public function getDocumentfrequency(): ?int
    {
        return $this->documentfrequency;
    }

    public function setDocumentfrequency(int $documentfrequency): self
    {
        $this->documentfrequency = $documentfrequency;

        return $this;
    }
}

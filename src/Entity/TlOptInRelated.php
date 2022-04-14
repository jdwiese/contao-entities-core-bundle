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
 * TlOptInRelated.
 *
 * @ORM\Table(name="tl_opt_in_related", indexes={@ORM\Index(name="reltable_relid", columns={"relTable", "relId"})})
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlOptInRelatedRepository")
 */
class TlOptInRelated
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
     * @var int
     *
     * @ORM\Column(name="pid", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $pid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="relTable", type="string", length=64, nullable=true)
     */
    private $reltable;

    /**
     * @var int
     *
     * @ORM\Column(name="relId", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $relid = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPid(): ?int
    {
        return $this->pid;
    }

    public function setPid(int $pid): self
    {
        $this->pid = $pid;

        return $this;
    }

    public function getReltable(): ?string
    {
        return $this->reltable;
    }

    public function setReltable(?string $reltable): self
    {
        $this->reltable = $reltable;

        return $this;
    }

    public function getRelid(): ?int
    {
        return $this->relid;
    }

    public function setRelid(int $relid): self
    {
        $this->relid = $relid;

        return $this;
    }
}

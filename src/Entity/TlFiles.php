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
 * TlFiles.
 *
 * @ORM\Table(name="tl_files", uniqueConstraints={
 *     @ORM\UniqueConstraint(name="uuid", columns={"uuid"})
 * }, indexes={
 *     @ORM\Index(name="path", columns={"path"}),
 *     @ORM\Index(name="extension", columns={"extension"}),
 *     @ORM\Index(name="pid", columns={"pid"})
 * })
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlFilesRepository")
 */
class TlFiles
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
     * @var string|null
     *
     * @ORM\Column(name="pid", type="binary", nullable=true)
     */
    private $pid;

    /**
     * @var int
     *
     * @ORM\Column(name="tstamp", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tstamp = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="uuid", type="binary", nullable=true)
     */
    private $uuid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=16, nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=1022, nullable=false)
     */
    private $path = '';

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=16, nullable=false)
     */
    private $extension = '';

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=32, nullable=false)
     */
    private $hash = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="lastModified", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $lastmodified;

    /**
     * @var string
     *
     * @ORM\Column(name="found", type="string", length=1, nullable=false, options={"default"="1","fixed"=true})
     */
    private $found = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var float
     *
     * @ORM\Column(name="importantPartX", type="float", precision=10, scale=0, nullable=false)
     */
    private $importantpartx = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="importantPartY", type="float", precision=10, scale=0, nullable=false)
     */
    private $importantparty = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="importantPartWidth", type="float", precision=10, scale=0, nullable=false)
     */
    private $importantpartwidth = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="importantPartHeight", type="float", precision=10, scale=0, nullable=false)
     */
    private $importantpartheight = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta", type="blob", length=65535, nullable=true)
     */
    private $meta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setPid($pid): self
    {
        $this->pid = $pid;

        return $this;
    }

    public function getTstamp(): ?int
    {
        return $this->tstamp;
    }

    public function setTstamp(int $tstamp): self
    {
        $this->tstamp = $tstamp;

        return $this;
    }

    public function getUuid()
    {
        return $this->uuid;
    }

    public function setUuid($uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    public function getLastmodified(): ?int
    {
        return $this->lastmodified;
    }

    public function setLastmodified(?int $lastmodified): self
    {
        $this->lastmodified = $lastmodified;

        return $this;
    }

    public function getFound(): ?string
    {
        return $this->found;
    }

    public function setFound(string $found): self
    {
        $this->found = $found;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImportantpartx(): ?float
    {
        return $this->importantpartx;
    }

    public function setImportantpartx(float $importantpartx): self
    {
        $this->importantpartx = $importantpartx;

        return $this;
    }

    public function getImportantparty(): ?float
    {
        return $this->importantparty;
    }

    public function setImportantparty(float $importantparty): self
    {
        $this->importantparty = $importantparty;

        return $this;
    }

    public function getImportantpartwidth(): ?float
    {
        return $this->importantpartwidth;
    }

    public function setImportantpartwidth(float $importantpartwidth): self
    {
        $this->importantpartwidth = $importantpartwidth;

        return $this;
    }

    public function getImportantpartheight(): ?float
    {
        return $this->importantpartheight;
    }

    public function setImportantpartheight(float $importantpartheight): self
    {
        $this->importantpartheight = $importantpartheight;

        return $this;
    }

    public function getMeta()
    {
        return $this->meta;
    }

    public function setMeta($meta): self
    {
        $this->meta = $meta;

        return $this;
    }
}

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
 * TlImageSize.
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="tl_image_size", indexes={@ORM\Index(name="pid", columns={"pid"})})
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\ImageSizeRepository")
 */
class TlImageSize
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
     * @var int
     *
     * @ORM\Column(name="tstamp", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tstamp = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="cssClass", type="string", length=255, nullable=false)
     */
    private $cssclass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="densities", type="string", length=255, nullable=false)
     */
    private $densities = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sizes", type="string", length=255, nullable=false)
     */
    private $sizes = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="width", type="integer", nullable=true)
     */
    private $width;

    /**
     * @var int|null
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="resizeMode", type="string", length=255, nullable=false)
     */
    private $resizemode = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="zoom", type="integer", nullable=true)
     */
    private $zoom;

    /**
     * @var string
     *
     * @ORM\Column(name="formats", type="string", length=1024, nullable=false)
     */
    private $formats = '';

    /**
     * @var string
     *
     * @ORM\Column(name="skipIfDimensionsMatch", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $skipifdimensionsmatch = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lazyLoading", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $lazyloading = '';

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

    public function getTstamp(): ?int
    {
        return $this->tstamp;
    }

    public function setTstamp(int $tstamp): self
    {
        $this->tstamp = $tstamp;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCssclass(): ?string
    {
        return $this->cssclass;
    }

    public function setCssclass(string $cssclass): self
    {
        $this->cssclass = $cssclass;

        return $this;
    }

    public function getDensities(): ?string
    {
        return $this->densities;
    }

    public function setDensities(string $densities): self
    {
        $this->densities = $densities;

        return $this;
    }

    public function getSizes(): ?string
    {
        return $this->sizes;
    }

    public function setSizes(string $sizes): self
    {
        $this->sizes = $sizes;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(?int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getResizemode(): ?string
    {
        return $this->resizemode;
    }

    public function setResizemode(string $resizemode): self
    {
        $this->resizemode = $resizemode;

        return $this;
    }

    public function getZoom(): ?int
    {
        return $this->zoom;
    }

    public function setZoom(?int $zoom): self
    {
        $this->zoom = $zoom;

        return $this;
    }

    public function getFormats(): ?string
    {
        return $this->formats;
    }

    public function setFormats(string $formats): self
    {
        $this->formats = $formats;

        return $this;
    }

    public function getSkipifdimensionsmatch(): ?string
    {
        return $this->skipifdimensionsmatch;
    }

    public function setSkipifdimensionsmatch(string $skipifdimensionsmatch): self
    {
        $this->skipifdimensionsmatch = $skipifdimensionsmatch;

        return $this;
    }

    public function getLazyloading(): ?string
    {
        return $this->lazyloading;
    }

    public function setLazyloading(string $lazyloading): self
    {
        $this->lazyloading = $lazyloading;

        return $this;
    }
}

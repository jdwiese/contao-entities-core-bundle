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
 * TlPreviewLink.
 *
 * @ORM\Table(name="tl_preview_link", indexes={@ORM\Index(name="id_published_expiresat", columns={"id", "published", "expiresAt"})})
 */
class TlPreviewLink
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
     * @ORM\Column(name="tstamp", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tstamp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=2048, nullable=false)
     */
    private $url = '';

    /**
     * @var int
     *
     * @ORM\Column(name="expiresInDays", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $expiresindays = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="showUnpublished", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $showunpublished = '';

    /**
     * @var int
     *
     * @ORM\Column(name="createdAt", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdat = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="expiresAt", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $expiresat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="published", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $published = '';

    /**
     * @var int
     *
     * @ORM\Column(name="createdBy", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdby = '0';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getExpiresindays(): ?int
    {
        return $this->expiresindays;
    }

    public function setExpiresindays(int $expiresindays): self
    {
        $this->expiresindays = $expiresindays;

        return $this;
    }

    public function getShowunpublished(): ?string
    {
        return $this->showunpublished;
    }

    public function setShowunpublished(string $showunpublished): self
    {
        $this->showunpublished = $showunpublished;

        return $this;
    }

    public function getCreatedat(): ?int
    {
        return $this->createdat;
    }

    public function setCreatedat(int $createdat): self
    {
        $this->createdat = $createdat;

        return $this;
    }

    public function getExpiresat(): ?int
    {
        return $this->expiresat;
    }

    public function setExpiresat(int $expiresat): self
    {
        $this->expiresat = $expiresat;

        return $this;
    }

    public function getPublished(): ?string
    {
        return $this->published;
    }

    public function setPublished(string $published): self
    {
        $this->published = $published;

        return $this;
    }

    public function getCreatedby(): ?int
    {
        return $this->createdby;
    }

    public function setCreatedby(int $createdby): self
    {
        $this->createdby = $createdby;

        return $this;
    }
}

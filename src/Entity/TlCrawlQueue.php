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
 * TlCrawlQueue.
 *
 * @ORM\Table(name="tl_crawl_queue", indexes={
 *     @ORM\Index(name="processed", columns={"processed"}),
 *     @ORM\Index(name="job_id", columns={"job_id"}),
 *     @ORM\Index(name="uri_hash", columns={"uri_hash"})
 * })
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlCrawlQueueRepository")
 */
class TlCrawlQueue
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
     * @ORM\Column(name="job_id", type="string", length=128, nullable=false, options={"fixed"=true})
     */
    private $jobId;

    /**
     * @var string
     *
     * @ORM\Column(name="uri", type="text", length=0, nullable=false)
     */
    private $uri;

    /**
     * @var string
     *
     * @ORM\Column(name="uri_hash", type="string", length=40, nullable=false, options={"fixed"=true})
     */
    private $uriHash;

    /**
     * @var string|null
     *
     * @ORM\Column(name="found_on", type="text", length=0, nullable=true)
     */
    private $foundOn;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="smallint", nullable=false)
     */
    private $level;

    /**
     * @var bool
     *
     * @ORM\Column(name="processed", type="boolean", nullable=false)
     */
    private $processed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tags", type="text", length=0, nullable=true)
     */
    private $tags;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJobId(): ?string
    {
        return $this->jobId;
    }

    public function setJobId(string $jobId): self
    {
        $this->jobId = $jobId;

        return $this;
    }

    public function getUri(): ?string
    {
        return $this->uri;
    }

    public function setUri(string $uri): self
    {
        $this->uri = $uri;

        return $this;
    }

    public function getUriHash(): ?string
    {
        return $this->uriHash;
    }

    public function setUriHash(string $uriHash): self
    {
        $this->uriHash = $uriHash;

        return $this;
    }

    public function getFoundOn(): ?string
    {
        return $this->foundOn;
    }

    public function setFoundOn(?string $foundOn): self
    {
        $this->foundOn = $foundOn;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getProcessed(): ?bool
    {
        return $this->processed;
    }

    public function setProcessed(bool $processed): self
    {
        $this->processed = $processed;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }
}

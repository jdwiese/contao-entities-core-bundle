<?php

declare(strict_types=1);

namespace Jdwiese\ContaoEntitiesCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlNewsFeed
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="tl_news_feed", indexes={@ORM\Index(name="alias", columns={"alias"})})
 */
class TlNewsFeed
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
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=false)
     */
    private $alias = '';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=32, nullable=false)
     */
    private $language = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="archives", type="blob", length=65535, nullable=true)
     */
    private $archives;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=32, nullable=false, options={"default"="rss"})
     */
    private $format = 'rss';

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=32, nullable=false, options={"default"="source_teaser"})
     */
    private $source = 'source_teaser';

    /**
     * @var int
     *
     * @ORM\Column(name="maxItems", type="smallint", nullable=false, options={"default"="25","unsigned"=true})
     */
    private $maxitems = '25';

    /**
     * @var string
     *
     * @ORM\Column(name="feedBase", type="string", length=255, nullable=false)
     */
    private $feedbase = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="imgSize", type="string", length=255, nullable=false)
     */
    private $imgsize = '';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getTstamp()
    {
        return $this->tstamp;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @return string|null
     */
    public function getArchives(): ?string
    {
        return $this->archives;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @return int
     */
    public function getMaxitems()
    {
        return $this->maxitems;
    }

    /**
     * @return string
     */
    public function getFeedbase(): string
    {
        return $this->feedbase;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getImgsize(): string
    {
        return $this->imgsize;
    }
}

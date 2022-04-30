<?php

namespace Jdwiese\ContaoEntitiesCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlCalendarFeed
 *
 * @ORM\Table(name="tl_calendar_feed", indexes={@ORM\Index(name="alias", columns={"alias"})})
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlCalendarFeedRepository")
 */
class TlCalendarFeed
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
     * @ORM\Column(name="calendars", type="blob", length=65535, nullable=true)
     */
    private $calendars;

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


}

<?php

namespace Jdwiese\ContaoEntitiesCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlCalendarEvents
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="tl_calendar_events")
 */
class TlCalendarEvents
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
     * @var int
     *
     * @ORM\Column(name="author", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $author = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="addTime", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $addtime = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="startTime", type="integer", nullable=true)
     */
    private $starttime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="endTime", type="integer", nullable=true)
     */
    private $endtime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="startDate", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $startdate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="endDate", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="pageTitle", type="string", length=255, nullable=false)
     */
    private $pagetitle = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=false)
     */
    private $location = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="teaser", type="text", length=65535, nullable=true)
     */
    private $teaser;

    /**
     * @var string
     *
     * @ORM\Column(name="addImage", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $addimage = '';

    /**
     * @var string
     *
     * @ORM\Column(name="overwriteMeta", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $overwritemeta = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="singleSRC", type="binary_string", nullable=true)
     */
    private $singlesrc;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255, nullable=false)
     */
    private $alt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imageTitle", type="string", length=255, nullable=false)
     */
    private $imagetitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=64, nullable=false)
     */
    private $size = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imagemargin", type="string", length=128, nullable=false)
     */
    private $imagemargin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imageUrl", type="string", length=2048, nullable=false)
     */
    private $imageurl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fullsize", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $fullsize = '';

    /**
     * @var string
     *
     * @ORM\Column(name="caption", type="string", length=255, nullable=false)
     */
    private $caption = '';

    /**
     * @var string
     *
     * @ORM\Column(name="floating", type="string", length=32, nullable=false, options={"default"="above"})
     */
    private $floating = 'above';

    /**
     * @var string
     *
     * @ORM\Column(name="recurring", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $recurring = '';

    /**
     * @var string
     *
     * @ORM\Column(name="repeatEach", type="string", length=64, nullable=false)
     */
    private $repeateach = '';

    /**
     * @var int
     *
     * @ORM\Column(name="repeatEnd", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $repeatend = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="recurrences", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $recurrences = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="addEnclosure", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $addenclosure = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="enclosure", type="blob", length=65535, nullable=true)
     */
    private $enclosure;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=32, nullable=false, options={"default"="default"})
     */
    private $source = 'default';

    /**
     * @var int
     *
     * @ORM\Column(name="jumpTo", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $jumpto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="articleId", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $articleid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=2048, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $target = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cssClass", type="string", length=255, nullable=false)
     */
    private $cssclass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="noComments", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $nocomments = '';

    /**
     * @var string
     *
     * @ORM\Column(name="published", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $published = '';

    /**
     * @var string
     *
     * @ORM\Column(name="start", type="string", length=10, nullable=false)
     */
    private $start = '';

    /**
     * @var string
     *
     * @ORM\Column(name="stop", type="string", length=10, nullable=false)
     */
    private $stop = '';

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
    public function getPid()
    {
        return $this->pid;
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
     * @return int
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getAddtime(): string
    {
        return $this->addtime;
    }

    /**
     * @return int|null
     */
    public function getStarttime(): ?int
    {
        return $this->starttime;
    }

    /**
     * @return int|null
     */
    public function getEndtime(): ?int
    {
        return $this->endtime;
    }

    /**
     * @return int|null
     */
    public function getStartdate(): ?int
    {
        return $this->startdate;
    }

    /**
     * @return int|null
     */
    public function getEnddate(): ?int
    {
        return $this->enddate;
    }

    /**
     * @return string
     */
    public function getPagetitle(): string
    {
        return $this->pagetitle;
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
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string|null
     */
    public function getTeaser(): ?string
    {
        return $this->teaser;
    }

    /**
     * @return string
     */
    public function getAddimage(): string
    {
        return $this->addimage;
    }

    /**
     * @return string
     */
    public function getOverwritemeta(): string
    {
        return $this->overwritemeta;
    }

    /**
     * @return string|null
     */
    public function getSinglesrc(): ?string
    {
        return $this->singlesrc;
    }

    /**
     * @return string
     */
    public function getAlt(): string
    {
        return $this->alt;
    }

    /**
     * @return string
     */
    public function getImagetitle(): string
    {
        return $this->imagetitle;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getImagemargin(): string
    {
        return $this->imagemargin;
    }

    /**
     * @return string
     */
    public function getImageurl(): string
    {
        return $this->imageurl;
    }

    /**
     * @return string
     */
    public function getFullsize(): string
    {
        return $this->fullsize;
    }

    /**
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * @return string
     */
    public function getFloating(): string
    {
        return $this->floating;
    }

    /**
     * @return string
     */
    public function getRecurring(): string
    {
        return $this->recurring;
    }

    /**
     * @return string
     */
    public function getRepeateach(): string
    {
        return $this->repeateach;
    }

    /**
     * @return int
     */
    public function getRepeatend()
    {
        return $this->repeatend;
    }

    /**
     * @return int
     */
    public function getRecurrences()
    {
        return $this->recurrences;
    }

    /**
     * @return string
     */
    public function getAddenclosure(): string
    {
        return $this->addenclosure;
    }

    /**
     * @return string|null
     */
    public function getEnclosure(): ?string
    {
        return $this->enclosure;
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
    public function getJumpto()
    {
        return $this->jumpto;
    }

    /**
     * @return int
     */
    public function getArticleid()
    {
        return $this->articleid;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getTarget(): string
    {
        return $this->target;
    }

    /**
     * @return string
     */
    public function getCssclass(): string
    {
        return $this->cssclass;
    }

    /**
     * @return string
     */
    public function getNocomments(): string
    {
        return $this->nocomments;
    }

    /**
     * @return string
     */
    public function getPublished(): string
    {
        return $this->published;
    }

    /**
     * @return string
     */
    public function getStart(): string
    {
        return $this->start;
    }

    /**
     * @return string
     */
    public function getStop(): string
    {
        return $this->stop;
    }
}

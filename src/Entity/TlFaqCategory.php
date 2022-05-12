<?php

namespace Jdwiese\ContaoEntitiesCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlFaqCategory
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="tl_faq_category")
 */
class TlFaqCategory
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
     * @ORM\Column(name="headline", type="string", length=255, nullable=false)
     */
    private $headline = '';

    /**
     * @var int
     *
     * @ORM\Column(name="jumpTo", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $jumpto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="allowComments", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $allowcomments = '';

    /**
     * @var string
     *
     * @ORM\Column(name="notify", type="string", length=16, nullable=false, options={"default"="notify_admin"})
     */
    private $notify = 'notify_admin';

    /**
     * @var string
     *
     * @ORM\Column(name="sortOrder", type="string", length=12, nullable=false, options={"default"="ascending"})
     */
    private $sortorder = 'ascending';

    /**
     * @var int
     *
     * @ORM\Column(name="perPage", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $perpage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="moderate", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $moderate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bbcode", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $bbcode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="requireLogin", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $requirelogin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="disableCaptcha", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $disablecaptcha = '';

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
    public function getHeadline(): string
    {
        return $this->headline;
    }

    /**
     * @return int
     */
    public function getJumpto()
    {
        return $this->jumpto;
    }

    /**
     * @return string
     */
    public function getAllowcomments(): string
    {
        return $this->allowcomments;
    }

    /**
     * @return string
     */
    public function getNotify(): string
    {
        return $this->notify;
    }

    /**
     * @return string
     */
    public function getSortorder(): string
    {
        return $this->sortorder;
    }

    /**
     * @return int
     */
    public function getPerpage()
    {
        return $this->perpage;
    }

    /**
     * @return string
     */
    public function getModerate(): string
    {
        return $this->moderate;
    }

    /**
     * @return string
     */
    public function getBbcode(): string
    {
        return $this->bbcode;
    }

    /**
     * @return string
     */
    public function getRequirelogin(): string
    {
        return $this->requirelogin;
    }

    /**
     * @return string
     */
    public function getDisablecaptcha(): string
    {
        return $this->disablecaptcha;
    }
}

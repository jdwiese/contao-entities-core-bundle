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
 * TlModule.
 *
 * @ORM\Table(name="tl_module")
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlModuleRepository")
 */
class TlModule
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="headline", type="string", length=255, nullable=false, options={"default"="a:2:{s:5:""value"";s:0:"""";s:4:""unit"";s:2:""h2"";}"})
     */
    private $headline = 'a:2:{s:5:"value";s:0:"";s:4:"unit";s:2:"h2";}';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=64, nullable=false, options={"default"="navigation"})
     */
    private $type = 'navigation';

    /**
     * @var int
     *
     * @ORM\Column(name="levelOffset", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $leveloffset = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="showLevel", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $showlevel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="hardLimit", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $hardlimit = '';

    /**
     * @var string
     *
     * @ORM\Column(name="showProtected", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $showprotected = '';

    /**
     * @var string
     *
     * @ORM\Column(name="defineRoot", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $defineroot = '';

    /**
     * @var int
     *
     * @ORM\Column(name="rootPage", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rootpage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="navigationTpl", type="string", length=64, nullable=false)
     */
    private $navigationtpl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customTpl", type="string", length=64, nullable=false)
     */
    private $customtpl = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pages", type="blob", length=65535, nullable=true)
     */
    private $pages;

    /**
     * @var string
     *
     * @ORM\Column(name="showHidden", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $showhidden = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customLabel", type="string", length=64, nullable=false)
     */
    private $customlabel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="autologin", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $autologin = '';

    /**
     * @var int
     *
     * @ORM\Column(name="jumpTo", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $jumpto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="overviewPage", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $overviewpage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="redirectBack", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $redirectback = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="editable", type="blob", length=65535, nullable=true)
     */
    private $editable;

    /**
     * @var string
     *
     * @ORM\Column(name="memberTpl", type="string", length=64, nullable=false)
     */
    private $membertpl = '';

    /**
     * @var int
     *
     * @ORM\Column(name="form", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $form = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="queryType", type="string", length=8, nullable=false, options={"default"="and"})
     */
    private $querytype = 'and';

    /**
     * @var string
     *
     * @ORM\Column(name="fuzzy", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $fuzzy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contextLength", type="string", length=64, nullable=false)
     */
    private $contextlength = '';

    /**
     * @var int
     *
     * @ORM\Column(name="minKeywordLength", type="smallint", nullable=false, options={"default"="4","unsigned"=true})
     */
    private $minkeywordlength = '4';

    /**
     * @var int
     *
     * @ORM\Column(name="perPage", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $perpage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="searchType", type="string", length=16, nullable=false, options={"default"="simple"})
     */
    private $searchtype = 'simple';

    /**
     * @var string
     *
     * @ORM\Column(name="searchTpl", type="string", length=64, nullable=false)
     */
    private $searchtpl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="inColumn", type="string", length=32, nullable=false, options={"default"="main"})
     */
    private $incolumn = 'main';

    /**
     * @var int
     *
     * @ORM\Column(name="skipFirst", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $skipfirst = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="loadFirst", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $loadfirst = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="singleSRC", type="binary_string", nullable=true)
     */
    private $singlesrc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="text", length=65535, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="imgSize", type="string", length=128, nullable=false)
     */
    private $imgsize = '';

    /**
     * @var string
     *
     * @ORM\Column(name="useCaption", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $usecaption = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fullsize", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $fullsize = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="multiSRC", type="blob", length=65535, nullable=true)
     */
    private $multisrc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="orderSRC", type="blob", length=65535, nullable=true)
     */
    private $ordersrc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="html", type="text", length=65535, nullable=true)
     */
    private $html;

    /**
     * @var int
     *
     * @ORM\Column(name="rss_cache", type="integer", nullable=false, options={"default"="3600","unsigned"=true})
     */
    private $rssCache = 3600;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rss_feed", type="text", length=65535, nullable=true)
     */
    private $rssFeed;

    /**
     * @var string
     *
     * @ORM\Column(name="rss_template", type="string", length=64, nullable=false)
     */
    private $rssTemplate = '';

    /**
     * @var int
     *
     * @ORM\Column(name="numberOfItems", type="smallint", nullable=false, options={"default"="3","unsigned"=true})
     */
    private $numberofitems = '3';

    /**
     * @var string
     *
     * @ORM\Column(name="disableCaptcha", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $disablecaptcha = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reg_groups", type="blob", length=65535, nullable=true)
     */
    private $regGroups;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_allowLogin", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $regAllowlogin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="reg_skipName", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $regSkipname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="reg_close", type="string", length=32, nullable=false)
     */
    private $regClose = '';

    /**
     * @var string
     *
     * @ORM\Column(name="reg_deleteDir", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $regDeletedir = '';

    /**
     * @var string
     *
     * @ORM\Column(name="reg_assignDir", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $regAssigndir = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reg_homeDir", type="binary_string", nullable=true)
     */
    private $regHomedir;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_activate", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $regActivate = '';

    /**
     * @var int
     *
     * @ORM\Column(name="reg_jumpTo", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $regJumpto = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reg_text", type="text", length=65535, nullable=true)
     */
    private $regText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reg_password", type="text", length=65535, nullable=true)
     */
    private $regPassword;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="protected", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $protected = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="groups", type="blob", length=65535, nullable=true)
     */
    private $groups;

    /**
     * @var string
     *
     * @ORM\Column(name="guests", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $guests = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cssID", type="string", length=255, nullable=false)
     */
    private $cssid = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="rootPageDependentModules", type="blob", length=65535, nullable=true)
     */
    private $rootpagedependentmodules;

    /**
     * @var string
     *
     * @ORM\Column(name="cal_featured", type="string", length=16, nullable=false, options={"default"="all_items"})
     */
    private $calFeatured = 'all_items';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_showQuantity", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $calShowquantity = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_ctemplate", type="string", length=64, nullable=false)
     */
    private $calCtemplate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_template", type="string", length=64, nullable=false)
     */
    private $calTemplate = '';

    /**
     * @var int
     *
     * @ORM\Column(name="cal_limit", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $calLimit = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cal_readerModule", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $calReadermodule = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_order", type="string", length=16, nullable=false, options={"default"="ascending"})
     */
    private $calOrder = 'ascending';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_ignoreDynamic", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $calIgnoredynamic = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_format", type="string", length=32, nullable=false, options={"default"="cal_month"})
     */
    private $calFormat = 'cal_month';

    /**
     * @var int
     *
     * @ORM\Column(name="cal_startDay", type="smallint", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $calStartday = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_hideRunning", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $calHiderunning = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_noSpan", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $calNospan = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cal_calendar", type="blob", length=65535, nullable=true)
     */
    private $calCalendar;

    /**
     * @var string
     *
     * @ORM\Column(name="news_showQuantity", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $newsShowquantity = '';

    /**
     * @var string
     *
     * @ORM\Column(name="news_order", type="string", length=32, nullable=false, options={"default"="order_date_desc"})
     */
    private $newsOrder = 'order_date_desc';

    /**
     * @var int
     *
     * @ORM\Column(name="news_startDay", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $newsStartday = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="news_format", type="string", length=32, nullable=false, options={"default"="news_month"})
     */
    private $newsFormat = 'news_month';

    /**
     * @var string
     *
     * @ORM\Column(name="news_template", type="string", length=64, nullable=false)
     */
    private $newsTemplate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="news_metaFields", type="string", length=255, nullable=false, options={"default"="a:2:{i:0;s:4:""date"";i:1;s:6:""author"";}"})
     */
    private $newsMetafields = 'a:2:{i:0;s:4:"date";i:1;s:6:"author";}';

    /**
     * @var int
     *
     * @ORM\Column(name="news_readerModule", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $newsReadermodule = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="news_jumpToCurrent", type="string", length=16, nullable=false)
     */
    private $newsJumptocurrent = '';

    /**
     * @var string
     *
     * @ORM\Column(name="news_featured", type="string", length=16, nullable=false, options={"default"="all_items"})
     */
    private $newsFeatured = 'all_items';

    /**
     * @var string|null
     *
     * @ORM\Column(name="news_archives", type="blob", length=65535, nullable=true)
     */
    private $newsArchives;

    /**
     * @var int
     *
     * @ORM\Column(name="faq_readerModule", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $faqReadermodule = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="faq_categories", type="blob", length=65535, nullable=true)
     */
    private $faqCategories;

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

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getHeadline(): ?string
    {
        return $this->headline;
    }

    public function setHeadline(string $headline): self
    {
        $this->headline = $headline;

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

    public function getLeveloffset(): ?int
    {
        return $this->leveloffset;
    }

    public function setLeveloffset(int $leveloffset): self
    {
        $this->leveloffset = $leveloffset;

        return $this;
    }

    public function getShowlevel(): ?int
    {
        return $this->showlevel;
    }

    public function setShowlevel(int $showlevel): self
    {
        $this->showlevel = $showlevel;

        return $this;
    }

    public function getHardlimit(): ?string
    {
        return $this->hardlimit;
    }

    public function setHardlimit(string $hardlimit): self
    {
        $this->hardlimit = $hardlimit;

        return $this;
    }

    public function getShowprotected(): ?string
    {
        return $this->showprotected;
    }

    public function setShowprotected(string $showprotected): self
    {
        $this->showprotected = $showprotected;

        return $this;
    }

    public function getDefineroot(): ?string
    {
        return $this->defineroot;
    }

    public function setDefineroot(string $defineroot): self
    {
        $this->defineroot = $defineroot;

        return $this;
    }

    public function getRootpage(): ?int
    {
        return $this->rootpage;
    }

    public function setRootpage(int $rootpage): self
    {
        $this->rootpage = $rootpage;

        return $this;
    }

    public function getNavigationtpl(): ?string
    {
        return $this->navigationtpl;
    }

    public function setNavigationtpl(string $navigationtpl): self
    {
        $this->navigationtpl = $navigationtpl;

        return $this;
    }

    public function getCustomtpl(): ?string
    {
        return $this->customtpl;
    }

    public function setCustomtpl(string $customtpl): self
    {
        $this->customtpl = $customtpl;

        return $this;
    }

    public function getPages()
    {
        return $this->pages;
    }

    public function setPages($pages): self
    {
        $this->pages = $pages;

        return $this;
    }

    public function getShowhidden(): ?string
    {
        return $this->showhidden;
    }

    public function setShowhidden(string $showhidden): self
    {
        $this->showhidden = $showhidden;

        return $this;
    }

    public function getCustomlabel(): ?string
    {
        return $this->customlabel;
    }

    public function setCustomlabel(string $customlabel): self
    {
        $this->customlabel = $customlabel;

        return $this;
    }

    public function getAutologin(): ?string
    {
        return $this->autologin;
    }

    public function setAutologin(string $autologin): self
    {
        $this->autologin = $autologin;

        return $this;
    }

    public function getJumpto(): ?int
    {
        return $this->jumpto;
    }

    public function setJumpto(int $jumpto): self
    {
        $this->jumpto = $jumpto;

        return $this;
    }

    public function getOverviewpage(): ?int
    {
        return $this->overviewpage;
    }

    public function setOverviewpage(int $overviewpage): self
    {
        $this->overviewpage = $overviewpage;

        return $this;
    }

    public function getRedirectback(): ?string
    {
        return $this->redirectback;
    }

    public function setRedirectback(string $redirectback): self
    {
        $this->redirectback = $redirectback;

        return $this;
    }

    public function getEditable()
    {
        return $this->editable;
    }

    public function setEditable($editable): self
    {
        $this->editable = $editable;

        return $this;
    }

    public function getMembertpl(): ?string
    {
        return $this->membertpl;
    }

    public function setMembertpl(string $membertpl): self
    {
        $this->membertpl = $membertpl;

        return $this;
    }

    public function getForm(): ?int
    {
        return $this->form;
    }

    public function setForm(int $form): self
    {
        $this->form = $form;

        return $this;
    }

    public function getQuerytype(): ?string
    {
        return $this->querytype;
    }

    public function setQuerytype(string $querytype): self
    {
        $this->querytype = $querytype;

        return $this;
    }

    public function getFuzzy(): ?string
    {
        return $this->fuzzy;
    }

    public function setFuzzy(string $fuzzy): self
    {
        $this->fuzzy = $fuzzy;

        return $this;
    }

    public function getContextlength(): ?string
    {
        return $this->contextlength;
    }

    public function setContextlength(string $contextlength): self
    {
        $this->contextlength = $contextlength;

        return $this;
    }

    public function getMinkeywordlength(): ?int
    {
        return $this->minkeywordlength;
    }

    public function setMinkeywordlength(int $minkeywordlength): self
    {
        $this->minkeywordlength = $minkeywordlength;

        return $this;
    }

    public function getPerpage(): ?int
    {
        return $this->perpage;
    }

    public function setPerpage(int $perpage): self
    {
        $this->perpage = $perpage;

        return $this;
    }

    public function getSearchtype(): ?string
    {
        return $this->searchtype;
    }

    public function setSearchtype(string $searchtype): self
    {
        $this->searchtype = $searchtype;

        return $this;
    }

    public function getSearchtpl(): ?string
    {
        return $this->searchtpl;
    }

    public function setSearchtpl(string $searchtpl): self
    {
        $this->searchtpl = $searchtpl;

        return $this;
    }

    public function getIncolumn(): ?string
    {
        return $this->incolumn;
    }

    public function setIncolumn(string $incolumn): self
    {
        $this->incolumn = $incolumn;

        return $this;
    }

    public function getSkipfirst(): ?int
    {
        return $this->skipfirst;
    }

    public function setSkipfirst(int $skipfirst): self
    {
        $this->skipfirst = $skipfirst;

        return $this;
    }

    public function getLoadfirst(): ?string
    {
        return $this->loadfirst;
    }

    public function setLoadfirst(string $loadfirst): self
    {
        $this->loadfirst = $loadfirst;

        return $this;
    }

    public function getSinglesrc()
    {
        return $this->singlesrc;
    }

    public function setSinglesrc($singlesrc): self
    {
        $this->singlesrc = $singlesrc;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getImgsize(): ?string
    {
        return $this->imgsize;
    }

    public function setImgsize(string $imgsize): self
    {
        $this->imgsize = $imgsize;

        return $this;
    }

    public function getUsecaption(): ?string
    {
        return $this->usecaption;
    }

    public function setUsecaption(string $usecaption): self
    {
        $this->usecaption = $usecaption;

        return $this;
    }

    public function getFullsize(): ?string
    {
        return $this->fullsize;
    }

    public function setFullsize(string $fullsize): self
    {
        $this->fullsize = $fullsize;

        return $this;
    }

    public function getMultisrc()
    {
        return $this->multisrc;
    }

    public function setMultisrc($multisrc): self
    {
        $this->multisrc = $multisrc;

        return $this;
    }

    public function getOrdersrc()
    {
        return $this->ordersrc;
    }

    public function setOrdersrc($ordersrc): self
    {
        $this->ordersrc = $ordersrc;

        return $this;
    }

    public function getHtml(): ?string
    {
        return $this->html;
    }

    public function setHtml(?string $html): self
    {
        $this->html = $html;

        return $this;
    }

    public function getRssCache(): ?int
    {
        return $this->rssCache;
    }

    public function setRssCache(int $rssCache): self
    {
        $this->rssCache = $rssCache;

        return $this;
    }

    public function getRssFeed(): ?string
    {
        return $this->rssFeed;
    }

    public function setRssFeed(?string $rssFeed): self
    {
        $this->rssFeed = $rssFeed;

        return $this;
    }

    public function getRssTemplate(): ?string
    {
        return $this->rssTemplate;
    }

    public function setRssTemplate(string $rssTemplate): self
    {
        $this->rssTemplate = $rssTemplate;

        return $this;
    }

    public function getNumberofitems(): ?int
    {
        return $this->numberofitems;
    }

    public function setNumberofitems(int $numberofitems): self
    {
        $this->numberofitems = $numberofitems;

        return $this;
    }

    public function getDisablecaptcha(): ?string
    {
        return $this->disablecaptcha;
    }

    public function setDisablecaptcha(string $disablecaptcha): self
    {
        $this->disablecaptcha = $disablecaptcha;

        return $this;
    }

    public function getRegGroups()
    {
        return $this->regGroups;
    }

    public function setRegGroups($regGroups): self
    {
        $this->regGroups = $regGroups;

        return $this;
    }

    public function getRegAllowlogin(): ?string
    {
        return $this->regAllowlogin;
    }

    public function setRegAllowlogin(string $regAllowlogin): self
    {
        $this->regAllowlogin = $regAllowlogin;

        return $this;
    }

    public function getRegSkipname(): ?string
    {
        return $this->regSkipname;
    }

    public function setRegSkipname(string $regSkipname): self
    {
        $this->regSkipname = $regSkipname;

        return $this;
    }

    public function getRegClose(): ?string
    {
        return $this->regClose;
    }

    public function setRegClose(string $regClose): self
    {
        $this->regClose = $regClose;

        return $this;
    }

    public function getRegDeletedir(): ?string
    {
        return $this->regDeletedir;
    }

    public function setRegDeletedir(string $regDeletedir): self
    {
        $this->regDeletedir = $regDeletedir;

        return $this;
    }

    public function getRegAssigndir(): ?string
    {
        return $this->regAssigndir;
    }

    public function setRegAssigndir(string $regAssigndir): self
    {
        $this->regAssigndir = $regAssigndir;

        return $this;
    }

    public function getRegHomedir()
    {
        return $this->regHomedir;
    }

    public function setRegHomedir($regHomedir): self
    {
        $this->regHomedir = $regHomedir;

        return $this;
    }

    public function getRegActivate(): ?string
    {
        return $this->regActivate;
    }

    public function setRegActivate(string $regActivate): self
    {
        $this->regActivate = $regActivate;

        return $this;
    }

    public function getRegJumpto(): ?int
    {
        return $this->regJumpto;
    }

    public function setRegJumpto(int $regJumpto): self
    {
        $this->regJumpto = $regJumpto;

        return $this;
    }

    public function getRegText(): ?string
    {
        return $this->regText;
    }

    public function setRegText(?string $regText): self
    {
        $this->regText = $regText;

        return $this;
    }

    public function getRegPassword(): ?string
    {
        return $this->regPassword;
    }

    public function setRegPassword(?string $regPassword): self
    {
        $this->regPassword = $regPassword;

        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getProtected(): ?string
    {
        return $this->protected;
    }

    public function setProtected(string $protected): self
    {
        $this->protected = $protected;

        return $this;
    }

    public function getGroups()
    {
        return $this->groups;
    }

    public function setGroups($groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    public function getGuests(): ?string
    {
        return $this->guests;
    }

    public function setGuests(string $guests): self
    {
        $this->guests = $guests;

        return $this;
    }

    public function getCssid(): ?string
    {
        return $this->cssid;
    }

    public function setCssid(string $cssid): self
    {
        $this->cssid = $cssid;

        return $this;
    }

    public function getRootpagedependentmodules()
    {
        return $this->rootpagedependentmodules;
    }

    public function setRootpagedependentmodules($rootpagedependentmodules): self
    {
        $this->rootpagedependentmodules = $rootpagedependentmodules;

        return $this;
    }

    public function getCalFeatured(): string
    {
        return $this->calFeatured;
    }

    public function setCalFeatured(string $calFeatured): self
    {
        $this->calFeatured = $calFeatured;

        return $this;
    }

    public function getCalShowquantity(): string
    {
        return $this->calShowquantity;
    }

    public function setCalShowquantity(string $calShowquantity): self
    {
        $this->calShowquantity = $calShowquantity;

        return $this;
    }

    public function getCalCtemplate(): string
    {
        return $this->calCtemplate;
    }

    public function setCalCtemplate(string $calCtemplate): self
    {
        $this->calCtemplate = $calCtemplate;

        return $this;
    }

    public function getCalTemplate(): string
    {
        return $this->calTemplate;
    }

    public function setCalTemplate(string $calTemplate): self
    {
        $this->calTemplate = $calTemplate;

        return $this;
    }

    public function getCalLimit()
    {
        return $this->calLimit;
    }

    public function setCalLimit($calLimit): self
    {
        $this->calLimit = $calLimit;

        return $this;
    }

    public function getCalReadermodule()
    {
        return $this->calReadermodule;
    }

    public function setCalReadermodule($calReadermodule): self
    {
        $this->calReadermodule = $calReadermodule;

        return $this;
    }

    public function getCalOrder(): string
    {
        return $this->calOrder;
    }

    public function setCalOrder(string $calOrder): self
    {
        $this->calOrder = $calOrder;

        return $this;
    }

    public function getCalIgnoredynamic(): string
    {
        return $this->calIgnoredynamic;
    }

    public function setCalIgnoredynamic(string $calIgnoredynamic): self
    {
        $this->calIgnoredynamic = $calIgnoredynamic;

        return $this;
    }

    public function getCalFormat(): string
    {
        return $this->calFormat;
    }

    public function setCalFormat(string $calFormat): self
    {
        $this->calFormat = $calFormat;

        return $this;
    }

    public function getCalStartday(): int
    {
        return $this->calStartday;
    }

    public function setCalStartday($calStartday): self
    {
        $this->calStartday = $calStartday;

        return $this;
    }

    public function getCalHiderunning(): string
    {
        return $this->calHiderunning;
    }

    public function setCalHiderunning(string $calHiderunning): self
    {
        $this->calHiderunning = $calHiderunning;

        return $this;
    }

    public function getCalNospan(): string
    {
        return $this->calNospan;
    }

    public function setCalNospan(string $calNospan): self
    {
        $this->calNospan = $calNospan;

        return $this;
    }

    public function getCalCalendar(): ?string
    {
        return $this->calCalendar;
    }

    public function setCalCalendar(?string $calCalendar): self
    {
        $this->calCalendar = $calCalendar;

        return $this;
    }

    public function getNewsShowquantity(): string
    {
        return $this->newsShowquantity;
    }

    public function setNewsShowquantity(string $newsShowquantity): self
    {
        $this->newsShowquantity = $newsShowquantity;

        return $this;
    }

    public function getNewsOrder(): string
    {
        return $this->newsOrder;
    }

    public function setNewsOrder(string $newsOrder): self
    {
        $this->newsOrder = $newsOrder;

        return $this;
    }

    public function getNewsStartday(): int
    {
        return $this->newsStartday;
    }

    public function setNewsStartday($newsStartday): self
    {
        $this->newsStartday = $newsStartday;

        return $this;
    }

    public function getNewsFormat(): string
    {
        return $this->newsFormat;
    }

    public function setNewsFormat(string $newsFormat): self
    {
        $this->newsFormat = $newsFormat;

        return $this;
    }

    public function getNewsTemplate(): string
    {
        return $this->newsTemplate;
    }

    public function setNewsTemplate(string $newsTemplate): self
    {
        $this->newsTemplate = $newsTemplate;

        return $this;
    }

    public function getNewsMetafields(): string
    {
        return $this->newsMetafields;
    }

    public function setNewsMetafields(string $newsMetafields): self
    {
        $this->newsMetafields = $newsMetafields;

        return $this;
    }

    public function getNewsReadermodule(): int
    {
        return $this->newsReadermodule;
    }

    public function setNewsReadermodule($newsReadermodule): self
    {
        $this->newsReadermodule = $newsReadermodule;

        return $this;
    }

    public function getNewsJumptocurrent(): string
    {
        return $this->newsJumptocurrent;
    }

    public function setNewsJumptocurrent(string $newsJumptocurrent): self
    {
        $this->newsJumptocurrent = $newsJumptocurrent;

        return $this;
    }

    public function getNewsFeatured(): string
    {
        return $this->newsFeatured;
    }

    public function setNewsFeatured(string $newsFeatured): self
    {
        $this->newsFeatured = $newsFeatured;

        return $this;
    }

    public function getNewsArchives(): ?string
    {
        return $this->newsArchives;
    }

    public function setNewsArchives(?string $newsArchives): self
    {
        $this->newsArchives = $newsArchives;

        return $this;
    }

    public function getFaqReadermodule(): int
    {
        return $this->faqReadermodule;
    }

    public function setFaqReadermodule($faqReadermodule): self
    {
        $this->faqReadermodule = $faqReadermodule;

        return $this;
    }

    public function getFaqCategories(): ?string
    {
        return $this->faqCategories;
    }

    public function setFaqCategories(?string $faqCategories): self
    {
        $this->faqCategories = $faqCategories;

        return $this;
    }

}

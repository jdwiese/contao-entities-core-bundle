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
 * TlPage.
 *
 * @ORM\Table(name="tl_page", indexes={@ORM\Index(name="pid_published_type_start_stop", columns={"pid", "published", "type", "start", "stop"}), @ORM\Index(name="alias", columns={"alias"}), @ORM\Index(name="type_dns", columns={"type", "dns"})})
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlPageRepository")
 */
class TlPage
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
     * @ORM\Column(name="sorting", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $sorting = '0';

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
     * @ORM\Column(name="type", type="string", length=64, nullable=false, options={"default"="regular"})
     */
    private $type = 'regular';

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=false)
     */
    private $alias = '';

    /**
     * @var string
     *
     * @ORM\Column(name="requireItem", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $requireitem = '';

    /**
     * @var int
     *
     * @ORM\Column(name="routePriority", type="integer", nullable=false)
     */
    private $routepriority = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pageTitle", type="string", length=255, nullable=false)
     */
    private $pagetitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=64, nullable=false)
     */
    private $language = '';

    /**
     * @var string
     *
     * @ORM\Column(name="robots", type="string", length=32, nullable=false)
     */
    private $robots = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="redirect", type="string", length=32, nullable=false, options={"default"="permanent"})
     */
    private $redirect = 'permanent';

    /**
     * @var int
     *
     * @ORM\Column(name="jumpTo", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $jumpto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="redirectBack", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $redirectback = '';

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
     * @ORM\Column(name="dns", type="string", length=255, nullable=false)
     */
    private $dns = '';

    /**
     * @var string
     *
     * @ORM\Column(name="staticFiles", type="string", length=255, nullable=false)
     */
    private $staticfiles = '';

    /**
     * @var string
     *
     * @ORM\Column(name="staticPlugins", type="string", length=255, nullable=false)
     */
    private $staticplugins = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fallback", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $fallback = '';

    /**
     * @var string
     *
     * @ORM\Column(name="disableLanguageRedirect", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $disablelanguageredirect = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="favicon", type="binary_string", nullable=true)
     */
    private $favicon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="robotsTxt", type="text", length=65535, nullable=true)
     */
    private $robotstxt;

    /**
     * @var string
     *
     * @ORM\Column(name="maintenanceMode", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $maintenancemode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mailerTransport", type="string", length=255, nullable=false)
     */
    private $mailertransport = '';

    /**
     * @var string
     *
     * @ORM\Column(name="enableCanonical", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $enablecanonical = '';

    /**
     * @var string
     *
     * @ORM\Column(name="canonicalLink", type="string", length=2048, nullable=false)
     */
    private $canonicallink = '';

    /**
     * @var string
     *
     * @ORM\Column(name="canonicalKeepParams", type="string", length=255, nullable=false)
     */
    private $canonicalkeepparams = '';

    /**
     * @var string
     *
     * @ORM\Column(name="adminEmail", type="string", length=255, nullable=false)
     */
    private $adminemail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dateFormat", type="string", length=32, nullable=false)
     */
    private $dateformat = '';

    /**
     * @var string
     *
     * @ORM\Column(name="timeFormat", type="string", length=32, nullable=false)
     */
    private $timeformat = '';

    /**
     * @var string
     *
     * @ORM\Column(name="datimFormat", type="string", length=32, nullable=false)
     */
    private $datimformat = '';

    /**
     * @var string
     *
     * @ORM\Column(name="validAliasCharacters", type="string", length=255, nullable=false)
     */
    private $validaliascharacters = '';

    /**
     * @var string
     *
     * @ORM\Column(name="useFolderUrl", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $usefolderurl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="urlPrefix", type="string", length=128, nullable=false)
     */
    private $urlprefix = '';

    /**
     * @var string
     *
     * @ORM\Column(name="urlSuffix", type="string", length=16, nullable=false)
     */
    private $urlsuffix = '';

    /**
     * @var string
     *
     * @ORM\Column(name="useSSL", type="string", length=1, nullable=false, options={"default"="1","fixed"=true})
     */
    private $usessl = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="autoforward", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $autoforward = '';

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
     * @ORM\Column(name="includeLayout", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $includelayout = '';

    /**
     * @var int
     *
     * @ORM\Column(name="layout", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $layout = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="subpageLayout", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $subpagelayout = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="includeCache", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $includecache = '';

    /**
     * @var int
     *
     * @ORM\Column(name="cache", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $cache = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="alwaysLoadFromCache", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $alwaysloadfromcache = '';

    /**
     * @var int
     *
     * @ORM\Column(name="clientCache", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $clientcache = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="includeChmod", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $includechmod = '';

    /**
     * @var int
     *
     * @ORM\Column(name="cuser", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $cuser = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cgroup", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $cgroup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="chmod", type="string", length=255, nullable=false)
     */
    private $chmod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="noSearch", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $nosearch = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cssClass", type="string", length=64, nullable=false)
     */
    private $cssclass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sitemap", type="string", length=32, nullable=false)
     */
    private $sitemap = '';

    /**
     * @var string
     *
     * @ORM\Column(name="hide", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $hide = '';

    /**
     * @var string
     *
     * @ORM\Column(name="guests", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $guests = '';

    /**
     * @var int
     *
     * @ORM\Column(name="tabindex", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $tabindex = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="accesskey", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $accesskey = '';

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
     * @var string
     *
     * @ORM\Column(name="enforceTwoFactor", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $enforcetwofactor = '';

    /**
     * @var int
     *
     * @ORM\Column(name="twoFactorJumpTo", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $twofactorjumpto = '0';

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

    public function getSorting(): ?int
    {
        return $this->sorting;
    }

    public function setSorting(int $sorting): self
    {
        $this->sorting = $sorting;

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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    public function getRequireitem(): ?string
    {
        return $this->requireitem;
    }

    public function setRequireitem(string $requireitem): self
    {
        $this->requireitem = $requireitem;

        return $this;
    }

    public function getRoutepriority(): ?int
    {
        return $this->routepriority;
    }

    public function setRoutepriority(int $routepriority): self
    {
        $this->routepriority = $routepriority;

        return $this;
    }

    public function getPagetitle(): ?string
    {
        return $this->pagetitle;
    }

    public function setPagetitle(string $pagetitle): self
    {
        $this->pagetitle = $pagetitle;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getRobots(): ?string
    {
        return $this->robots;
    }

    public function setRobots(string $robots): self
    {
        $this->robots = $robots;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getRedirect(): ?string
    {
        return $this->redirect;
    }

    public function setRedirect(string $redirect): self
    {
        $this->redirect = $redirect;

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

    public function getRedirectback(): ?string
    {
        return $this->redirectback;
    }

    public function setRedirectback(string $redirectback): self
    {
        $this->redirectback = $redirectback;

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

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(string $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getDns(): ?string
    {
        return $this->dns;
    }

    public function setDns(string $dns): self
    {
        $this->dns = $dns;

        return $this;
    }

    public function getStaticfiles(): ?string
    {
        return $this->staticfiles;
    }

    public function setStaticfiles(string $staticfiles): self
    {
        $this->staticfiles = $staticfiles;

        return $this;
    }

    public function getStaticplugins(): ?string
    {
        return $this->staticplugins;
    }

    public function setStaticplugins(string $staticplugins): self
    {
        $this->staticplugins = $staticplugins;

        return $this;
    }

    public function getFallback(): ?string
    {
        return $this->fallback;
    }

    public function setFallback(string $fallback): self
    {
        $this->fallback = $fallback;

        return $this;
    }

    public function getDisablelanguageredirect(): ?string
    {
        return $this->disablelanguageredirect;
    }

    public function setDisablelanguageredirect(string $disablelanguageredirect): self
    {
        $this->disablelanguageredirect = $disablelanguageredirect;

        return $this;
    }

    public function getFavicon()
    {
        return $this->favicon;
    }

    public function setFavicon($favicon): self
    {
        $this->favicon = $favicon;

        return $this;
    }

    public function getRobotstxt(): ?string
    {
        return $this->robotstxt;
    }

    public function setRobotstxt(?string $robotstxt): self
    {
        $this->robotstxt = $robotstxt;

        return $this;
    }

    public function getMaintenancemode(): ?string
    {
        return $this->maintenancemode;
    }

    public function setMaintenancemode(string $maintenancemode): self
    {
        $this->maintenancemode = $maintenancemode;

        return $this;
    }

    public function getMailertransport(): ?string
    {
        return $this->mailertransport;
    }

    public function setMailertransport(string $mailertransport): self
    {
        $this->mailertransport = $mailertransport;

        return $this;
    }

    public function getEnablecanonical(): ?string
    {
        return $this->enablecanonical;
    }

    public function setEnablecanonical(string $enablecanonical): self
    {
        $this->enablecanonical = $enablecanonical;

        return $this;
    }

    public function getCanonicallink(): ?string
    {
        return $this->canonicallink;
    }

    public function setCanonicallink(string $canonicallink): self
    {
        $this->canonicallink = $canonicallink;

        return $this;
    }

    public function getCanonicalkeepparams(): ?string
    {
        return $this->canonicalkeepparams;
    }

    public function setCanonicalkeepparams(string $canonicalkeepparams): self
    {
        $this->canonicalkeepparams = $canonicalkeepparams;

        return $this;
    }

    public function getAdminemail(): ?string
    {
        return $this->adminemail;
    }

    public function setAdminemail(string $adminemail): self
    {
        $this->adminemail = $adminemail;

        return $this;
    }

    public function getDateformat(): ?string
    {
        return $this->dateformat;
    }

    public function setDateformat(string $dateformat): self
    {
        $this->dateformat = $dateformat;

        return $this;
    }

    public function getTimeformat(): ?string
    {
        return $this->timeformat;
    }

    public function setTimeformat(string $timeformat): self
    {
        $this->timeformat = $timeformat;

        return $this;
    }

    public function getDatimformat(): ?string
    {
        return $this->datimformat;
    }

    public function setDatimformat(string $datimformat): self
    {
        $this->datimformat = $datimformat;

        return $this;
    }

    public function getValidaliascharacters(): ?string
    {
        return $this->validaliascharacters;
    }

    public function setValidaliascharacters(string $validaliascharacters): self
    {
        $this->validaliascharacters = $validaliascharacters;

        return $this;
    }

    public function getUsefolderurl(): ?string
    {
        return $this->usefolderurl;
    }

    public function setUsefolderurl(string $usefolderurl): self
    {
        $this->usefolderurl = $usefolderurl;

        return $this;
    }

    public function getUrlprefix(): ?string
    {
        return $this->urlprefix;
    }

    public function setUrlprefix(string $urlprefix): self
    {
        $this->urlprefix = $urlprefix;

        return $this;
    }

    public function getUrlsuffix(): ?string
    {
        return $this->urlsuffix;
    }

    public function setUrlsuffix(string $urlsuffix): self
    {
        $this->urlsuffix = $urlsuffix;

        return $this;
    }

    public function getUsessl(): ?string
    {
        return $this->usessl;
    }

    public function setUsessl(string $usessl): self
    {
        $this->usessl = $usessl;

        return $this;
    }

    public function getAutoforward(): ?string
    {
        return $this->autoforward;
    }

    public function setAutoforward(string $autoforward): self
    {
        $this->autoforward = $autoforward;

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

    public function getIncludelayout(): ?string
    {
        return $this->includelayout;
    }

    public function setIncludelayout(string $includelayout): self
    {
        $this->includelayout = $includelayout;

        return $this;
    }

    public function getLayout(): ?int
    {
        return $this->layout;
    }

    public function setLayout(int $layout): self
    {
        $this->layout = $layout;

        return $this;
    }

    public function getSubpagelayout(): ?int
    {
        return $this->subpagelayout;
    }

    public function setSubpagelayout(int $subpagelayout): self
    {
        $this->subpagelayout = $subpagelayout;

        return $this;
    }

    public function getIncludecache(): ?string
    {
        return $this->includecache;
    }

    public function setIncludecache(string $includecache): self
    {
        $this->includecache = $includecache;

        return $this;
    }

    public function getCache(): ?int
    {
        return $this->cache;
    }

    public function setCache(int $cache): self
    {
        $this->cache = $cache;

        return $this;
    }

    public function getAlwaysloadfromcache(): ?string
    {
        return $this->alwaysloadfromcache;
    }

    public function setAlwaysloadfromcache(string $alwaysloadfromcache): self
    {
        $this->alwaysloadfromcache = $alwaysloadfromcache;

        return $this;
    }

    public function getClientcache(): ?int
    {
        return $this->clientcache;
    }

    public function setClientcache(int $clientcache): self
    {
        $this->clientcache = $clientcache;

        return $this;
    }

    public function getIncludechmod(): ?string
    {
        return $this->includechmod;
    }

    public function setIncludechmod(string $includechmod): self
    {
        $this->includechmod = $includechmod;

        return $this;
    }

    public function getCuser(): ?int
    {
        return $this->cuser;
    }

    public function setCuser(int $cuser): self
    {
        $this->cuser = $cuser;

        return $this;
    }

    public function getCgroup(): ?int
    {
        return $this->cgroup;
    }

    public function setCgroup(int $cgroup): self
    {
        $this->cgroup = $cgroup;

        return $this;
    }

    public function getChmod(): ?string
    {
        return $this->chmod;
    }

    public function setChmod(string $chmod): self
    {
        $this->chmod = $chmod;

        return $this;
    }

    public function getNosearch(): ?string
    {
        return $this->nosearch;
    }

    public function setNosearch(string $nosearch): self
    {
        $this->nosearch = $nosearch;

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

    public function getSitemap(): ?string
    {
        return $this->sitemap;
    }

    public function setSitemap(string $sitemap): self
    {
        $this->sitemap = $sitemap;

        return $this;
    }

    public function getHide(): ?string
    {
        return $this->hide;
    }

    public function setHide(string $hide): self
    {
        $this->hide = $hide;

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

    public function getTabindex(): ?int
    {
        return $this->tabindex;
    }

    public function setTabindex(int $tabindex): self
    {
        $this->tabindex = $tabindex;

        return $this;
    }

    public function getAccesskey(): ?string
    {
        return $this->accesskey;
    }

    public function setAccesskey(string $accesskey): self
    {
        $this->accesskey = $accesskey;

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

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(string $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getStop(): ?string
    {
        return $this->stop;
    }

    public function setStop(string $stop): self
    {
        $this->stop = $stop;

        return $this;
    }

    public function getEnforcetwofactor(): ?string
    {
        return $this->enforcetwofactor;
    }

    public function setEnforcetwofactor(string $enforcetwofactor): self
    {
        $this->enforcetwofactor = $enforcetwofactor;

        return $this;
    }

    public function getTwofactorjumpto(): ?int
    {
        return $this->twofactorjumpto;
    }

    public function setTwofactorjumpto(int $twofactorjumpto): self
    {
        $this->twofactorjumpto = $twofactorjumpto;

        return $this;
    }
}

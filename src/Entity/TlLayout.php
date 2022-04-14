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
 * TlLayout.
 *
 * @ORM\Table(name="tl_layout")
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlLayoutRepository")
 */
class TlLayout
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
     * @ORM\Column(name="rows", type="string", length=8, nullable=false, options={"default"="2rwh"})
     */
    private $rows = '2rwh';

    /**
     * @var string
     *
     * @ORM\Column(name="headerHeight", type="string", length=255, nullable=false)
     */
    private $headerheight = '';

    /**
     * @var string
     *
     * @ORM\Column(name="footerHeight", type="string", length=255, nullable=false)
     */
    private $footerheight = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cols", type="string", length=8, nullable=false, options={"default"="2cll"})
     */
    private $cols = '2cll';

    /**
     * @var string
     *
     * @ORM\Column(name="widthLeft", type="string", length=255, nullable=false)
     */
    private $widthleft = '';

    /**
     * @var string
     *
     * @ORM\Column(name="widthRight", type="string", length=255, nullable=false)
     */
    private $widthright = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sections", type="blob", length=65535, nullable=true)
     */
    private $sections;

    /**
     * @var string
     *
     * @ORM\Column(name="framework", type="string", length=255, nullable=false, options={"default"="a:2:{i:0;s:10:""layout.css"";i:1;s:14:""responsive.css"";}"})
     */
    private $framework = 'a:2:{i:0;s:10:"layout.css";i:1;s:14:"responsive.css";}';

    /**
     * @var string|null
     *
     * @ORM\Column(name="stylesheet", type="blob", length=65535, nullable=true)
     */
    private $stylesheet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="external", type="blob", length=65535, nullable=true)
     */
    private $external;

    /**
     * @var string
     *
     * @ORM\Column(name="loadingOrder", type="string", length=16, nullable=false, options={"default"="external_first"})
     */
    private $loadingorder = 'external_first';

    /**
     * @var string
     *
     * @ORM\Column(name="combineScripts", type="string", length=1, nullable=false, options={"default"="1","fixed"=true})
     */
    private $combinescripts = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="modules", type="blob", length=65535, nullable=true)
     */
    private $modules;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=64, nullable=false)
     */
    private $template = '';

    /**
     * @var string
     *
     * @ORM\Column(name="minifyMarkup", type="string", length=1, nullable=false, options={"default"="1","fixed"=true})
     */
    private $minifymarkup = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="lightboxSize", type="string", length=255, nullable=false)
     */
    private $lightboxsize = '';

    /**
     * @var string
     *
     * @ORM\Column(name="defaultImageDensities", type="string", length=255, nullable=false)
     */
    private $defaultimagedensities = '';

    /**
     * @var string
     *
     * @ORM\Column(name="viewport", type="string", length=255, nullable=false)
     */
    private $viewport = '';

    /**
     * @var string
     *
     * @ORM\Column(name="titleTag", type="string", length=255, nullable=false)
     */
    private $titletag = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cssClass", type="string", length=255, nullable=false)
     */
    private $cssclass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="onload", type="string", length=255, nullable=false)
     */
    private $onload = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="head", type="text", length=65535, nullable=true)
     */
    private $head;

    /**
     * @var string
     *
     * @ORM\Column(name="addJQuery", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $addjquery = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jquery", type="text", length=65535, nullable=true)
     */
    private $jquery;

    /**
     * @var string
     *
     * @ORM\Column(name="addMooTools", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $addmootools = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mootools", type="text", length=65535, nullable=true)
     */
    private $mootools;

    /**
     * @var string|null
     *
     * @ORM\Column(name="analytics", type="text", length=65535, nullable=true)
     */
    private $analytics;

    /**
     * @var string|null
     *
     * @ORM\Column(name="externalJs", type="blob", length=65535, nullable=true)
     */
    private $externaljs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scripts", type="text", length=65535, nullable=true)
     */
    private $scripts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script", type="text", length=65535, nullable=true)
     */
    private $script;

    /**
     * @var string
     *
     * @ORM\Column(name="static", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $static = '';

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="string", length=255, nullable=false)
     */
    private $width = '';

    /**
     * @var string
     *
     * @ORM\Column(name="align", type="string", length=32, nullable=false, options={"default"="center"})
     */
    private $align = 'center';

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

    public function getRows(): ?string
    {
        return $this->rows;
    }

    public function setRows(string $rows): self
    {
        $this->rows = $rows;

        return $this;
    }

    public function getHeaderheight(): ?string
    {
        return $this->headerheight;
    }

    public function setHeaderheight(string $headerheight): self
    {
        $this->headerheight = $headerheight;

        return $this;
    }

    public function getFooterheight(): ?string
    {
        return $this->footerheight;
    }

    public function setFooterheight(string $footerheight): self
    {
        $this->footerheight = $footerheight;

        return $this;
    }

    public function getCols(): ?string
    {
        return $this->cols;
    }

    public function setCols(string $cols): self
    {
        $this->cols = $cols;

        return $this;
    }

    public function getWidthleft(): ?string
    {
        return $this->widthleft;
    }

    public function setWidthleft(string $widthleft): self
    {
        $this->widthleft = $widthleft;

        return $this;
    }

    public function getWidthright(): ?string
    {
        return $this->widthright;
    }

    public function setWidthright(string $widthright): self
    {
        $this->widthright = $widthright;

        return $this;
    }

    public function getSections()
    {
        return $this->sections;
    }

    public function setSections($sections): self
    {
        $this->sections = $sections;

        return $this;
    }

    public function getFramework(): ?string
    {
        return $this->framework;
    }

    public function setFramework(string $framework): self
    {
        $this->framework = $framework;

        return $this;
    }

    public function getStylesheet()
    {
        return $this->stylesheet;
    }

    public function setStylesheet($stylesheet): self
    {
        $this->stylesheet = $stylesheet;

        return $this;
    }

    public function getExternal()
    {
        return $this->external;
    }

    public function setExternal($external): self
    {
        $this->external = $external;

        return $this;
    }

    public function getLoadingorder(): ?string
    {
        return $this->loadingorder;
    }

    public function setLoadingorder(string $loadingorder): self
    {
        $this->loadingorder = $loadingorder;

        return $this;
    }

    public function getCombinescripts(): ?string
    {
        return $this->combinescripts;
    }

    public function setCombinescripts(string $combinescripts): self
    {
        $this->combinescripts = $combinescripts;

        return $this;
    }

    public function getModules()
    {
        return $this->modules;
    }

    public function setModules($modules): self
    {
        $this->modules = $modules;

        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(string $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getMinifymarkup(): ?string
    {
        return $this->minifymarkup;
    }

    public function setMinifymarkup(string $minifymarkup): self
    {
        $this->minifymarkup = $minifymarkup;

        return $this;
    }

    public function getLightboxsize(): ?string
    {
        return $this->lightboxsize;
    }

    public function setLightboxsize(string $lightboxsize): self
    {
        $this->lightboxsize = $lightboxsize;

        return $this;
    }

    public function getDefaultimagedensities(): ?string
    {
        return $this->defaultimagedensities;
    }

    public function setDefaultimagedensities(string $defaultimagedensities): self
    {
        $this->defaultimagedensities = $defaultimagedensities;

        return $this;
    }

    public function getViewport(): ?string
    {
        return $this->viewport;
    }

    public function setViewport(string $viewport): self
    {
        $this->viewport = $viewport;

        return $this;
    }

    public function getTitletag(): ?string
    {
        return $this->titletag;
    }

    public function setTitletag(string $titletag): self
    {
        $this->titletag = $titletag;

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

    public function getOnload(): ?string
    {
        return $this->onload;
    }

    public function setOnload(string $onload): self
    {
        $this->onload = $onload;

        return $this;
    }

    public function getHead(): ?string
    {
        return $this->head;
    }

    public function setHead(?string $head): self
    {
        $this->head = $head;

        return $this;
    }

    public function getAddjquery(): ?string
    {
        return $this->addjquery;
    }

    public function setAddjquery(string $addjquery): self
    {
        $this->addjquery = $addjquery;

        return $this;
    }

    public function getJquery(): ?string
    {
        return $this->jquery;
    }

    public function setJquery(?string $jquery): self
    {
        $this->jquery = $jquery;

        return $this;
    }

    public function getAddmootools(): ?string
    {
        return $this->addmootools;
    }

    public function setAddmootools(string $addmootools): self
    {
        $this->addmootools = $addmootools;

        return $this;
    }

    public function getMootools(): ?string
    {
        return $this->mootools;
    }

    public function setMootools(?string $mootools): self
    {
        $this->mootools = $mootools;

        return $this;
    }

    public function getAnalytics(): ?string
    {
        return $this->analytics;
    }

    public function setAnalytics(?string $analytics): self
    {
        $this->analytics = $analytics;

        return $this;
    }

    public function getExternaljs()
    {
        return $this->externaljs;
    }

    public function setExternaljs($externaljs): self
    {
        $this->externaljs = $externaljs;

        return $this;
    }

    public function getScripts(): ?string
    {
        return $this->scripts;
    }

    public function setScripts(?string $scripts): self
    {
        $this->scripts = $scripts;

        return $this;
    }

    public function getScript(): ?string
    {
        return $this->script;
    }

    public function setScript(?string $script): self
    {
        $this->script = $script;

        return $this;
    }

    public function getStatic(): ?string
    {
        return $this->static;
    }

    public function setStatic(string $static): self
    {
        $this->static = $static;

        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setWidth(string $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getAlign(): ?string
    {
        return $this->align;
    }

    public function setAlign(string $align): self
    {
        $this->align = $align;

        return $this;
    }
}

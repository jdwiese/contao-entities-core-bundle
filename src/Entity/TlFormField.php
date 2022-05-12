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
 * TlFormField.
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="tl_form_field", indexes={@ORM\Index(name="pid_invisible", columns={"pid", "invisible"})})
 */
class TlFormField
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
     * @ORM\Column(name="type", type="string", length=64, nullable=false, options={"default"="text"})
     */
    private $type = 'text';

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
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="html", type="text", length=65535, nullable=true)
     */
    private $html;

    /**
     * @var string|null
     *
     * @ORM\Column(name="options", type="blob", length=65535, nullable=true)
     */
    private $options;

    /**
     * @var string
     *
     * @ORM\Column(name="mandatory", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $mandatory = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rgxp", type="string", length=32, nullable=false)
     */
    private $rgxp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="placeholder", type="string", length=255, nullable=false)
     */
    private $placeholder = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customRgxp", type="string", length=255, nullable=false)
     */
    private $customrgxp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="errorMsg", type="string", length=255, nullable=false)
     */
    private $errormsg = '';

    /**
     * @var int
     *
     * @ORM\Column(name="minlength", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $minlength = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="maxlength", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $maxlength = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="maxImageWidth", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $maximagewidth = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="maxImageHeight", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $maximageheight = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="minval", type="string", length=10, nullable=false)
     */
    private $minval = '';

    /**
     * @var string
     *
     * @ORM\Column(name="maxval", type="string", length=10, nullable=false)
     */
    private $maxval = '';

    /**
     * @var string
     *
     * @ORM\Column(name="step", type="string", length=10, nullable=false)
     */
    private $step = '';

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=255, nullable=false, options={"default"="a:2:{i:0;i:4;i:1;i:40;}"})
     */
    private $size = 'a:2:{i:0;i:4;i:1;i:40;}';

    /**
     * @var string
     *
     * @ORM\Column(name="multiple", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $multiple = '';

    /**
     * @var int
     *
     * @ORM\Column(name="mSize", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $msize = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="extensions", type="string", length=255, nullable=false, options={"default"="jpg,jpeg,gif,png,pdf,doc,docx,xls,xlsx,ppt,pptx"})
     */
    private $extensions = 'jpg,jpeg,gif,png,pdf,doc,docx,xls,xlsx,ppt,pptx';

    /**
     * @var string
     *
     * @ORM\Column(name="storeFile", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $storefile = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="uploadFolder", type="binary_string", nullable=true)
     */
    private $uploadfolder;

    /**
     * @var string
     *
     * @ORM\Column(name="useHomeDir", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $usehomedir = '';

    /**
     * @var string
     *
     * @ORM\Column(name="doNotOverwrite", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $donotoverwrite = '';

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255, nullable=false)
     */
    private $class = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value = '';

    /**
     * @var string
     *
     * @ORM\Column(name="accesskey", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $accesskey = '';

    /**
     * @var int
     *
     * @ORM\Column(name="tabindex", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $tabindex = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fSize", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $fsize = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="customTpl", type="string", length=64, nullable=false)
     */
    private $customtpl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="slabel", type="string", length=255, nullable=false)
     */
    private $slabel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imageSubmit", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $imagesubmit = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="singleSRC", type="binary_string", nullable=true)
     */
    private $singlesrc;

    /**
     * @var string
     *
     * @ORM\Column(name="invisible", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $invisible = '';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

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

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions($options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getMandatory(): ?string
    {
        return $this->mandatory;
    }

    public function setMandatory(string $mandatory): self
    {
        $this->mandatory = $mandatory;

        return $this;
    }

    public function getRgxp(): ?string
    {
        return $this->rgxp;
    }

    public function setRgxp(string $rgxp): self
    {
        $this->rgxp = $rgxp;

        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->placeholder;
    }

    public function setPlaceholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function getCustomrgxp(): ?string
    {
        return $this->customrgxp;
    }

    public function setCustomrgxp(string $customrgxp): self
    {
        $this->customrgxp = $customrgxp;

        return $this;
    }

    public function getErrormsg(): ?string
    {
        return $this->errormsg;
    }

    public function setErrormsg(string $errormsg): self
    {
        $this->errormsg = $errormsg;

        return $this;
    }

    public function getMinlength(): ?int
    {
        return $this->minlength;
    }

    public function setMinlength(int $minlength): self
    {
        $this->minlength = $minlength;

        return $this;
    }

    public function getMaxlength(): ?int
    {
        return $this->maxlength;
    }

    public function setMaxlength(int $maxlength): self
    {
        $this->maxlength = $maxlength;

        return $this;
    }

    public function getMaximagewidth(): ?int
    {
        return $this->maximagewidth;
    }

    public function setMaximagewidth(int $maximagewidth): self
    {
        $this->maximagewidth = $maximagewidth;

        return $this;
    }

    public function getMaximageheight(): ?int
    {
        return $this->maximageheight;
    }

    public function setMaximageheight(int $maximageheight): self
    {
        $this->maximageheight = $maximageheight;

        return $this;
    }

    public function getMinval(): ?string
    {
        return $this->minval;
    }

    public function setMinval(string $minval): self
    {
        $this->minval = $minval;

        return $this;
    }

    public function getMaxval(): ?string
    {
        return $this->maxval;
    }

    public function setMaxval(string $maxval): self
    {
        $this->maxval = $maxval;

        return $this;
    }

    public function getStep(): ?string
    {
        return $this->step;
    }

    public function setStep(string $step): self
    {
        $this->step = $step;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getMultiple(): ?string
    {
        return $this->multiple;
    }

    public function setMultiple(string $multiple): self
    {
        $this->multiple = $multiple;

        return $this;
    }

    public function getMsize(): ?int
    {
        return $this->msize;
    }

    public function setMsize(int $msize): self
    {
        $this->msize = $msize;

        return $this;
    }

    public function getExtensions(): ?string
    {
        return $this->extensions;
    }

    public function setExtensions(string $extensions): self
    {
        $this->extensions = $extensions;

        return $this;
    }

    public function getStorefile(): ?string
    {
        return $this->storefile;
    }

    public function setStorefile(string $storefile): self
    {
        $this->storefile = $storefile;

        return $this;
    }

    public function getUploadfolder()
    {
        return $this->uploadfolder;
    }

    public function setUploadfolder($uploadfolder): self
    {
        $this->uploadfolder = $uploadfolder;

        return $this;
    }

    public function getUsehomedir(): ?string
    {
        return $this->usehomedir;
    }

    public function setUsehomedir(string $usehomedir): self
    {
        $this->usehomedir = $usehomedir;

        return $this;
    }

    public function getDonotoverwrite(): ?string
    {
        return $this->donotoverwrite;
    }

    public function setDonotoverwrite(string $donotoverwrite): self
    {
        $this->donotoverwrite = $donotoverwrite;

        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): self
    {
        $this->class = $class;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

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

    public function getTabindex(): ?int
    {
        return $this->tabindex;
    }

    public function setTabindex(int $tabindex): self
    {
        $this->tabindex = $tabindex;

        return $this;
    }

    public function getFsize(): ?int
    {
        return $this->fsize;
    }

    public function setFsize(int $fsize): self
    {
        $this->fsize = $fsize;

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

    public function getSlabel(): ?string
    {
        return $this->slabel;
    }

    public function setSlabel(string $slabel): self
    {
        $this->slabel = $slabel;

        return $this;
    }

    public function getImagesubmit(): ?string
    {
        return $this->imagesubmit;
    }

    public function setImagesubmit(string $imagesubmit): self
    {
        $this->imagesubmit = $imagesubmit;

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

    public function getInvisible(): ?string
    {
        return $this->invisible;
    }

    public function setInvisible(string $invisible): self
    {
        $this->invisible = $invisible;

        return $this;
    }
}

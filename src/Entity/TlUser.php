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
 * TlUser.
 *
 * @ORM\Table(name="tl_user", uniqueConstraints={
 *     @ORM\UniqueConstraint(name="username", columns={"username"})
 * }, indexes={
 *     @ORM\Index(name="email", columns={"email"})
 * })
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlUserRepository")
 */
class TlUser
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
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=64, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=64, nullable=false)
     */
    private $language = '';

    /**
     * @var string
     *
     * @ORM\Column(name="backendTheme", type="string", length=32, nullable=false)
     */
    private $backendtheme = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fullscreen", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $fullscreen = '';

    /**
     * @var string
     *
     * @ORM\Column(name="uploader", type="string", length=32, nullable=false)
     */
    private $uploader = '';

    /**
     * @var string
     *
     * @ORM\Column(name="showHelp", type="string", length=1, nullable=false, options={"default"="1","fixed"=true})
     */
    private $showhelp = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="thumbnails", type="string", length=1, nullable=false, options={"default"="1","fixed"=true})
     */
    private $thumbnails = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="useRTE", type="string", length=1, nullable=false, options={"default"="1","fixed"=true})
     */
    private $userte = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="useCE", type="string", length=1, nullable=false, options={"default"="1","fixed"=true})
     */
    private $usece = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pwChange", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $pwchange = '';

    /**
     * @var string
     *
     * @ORM\Column(name="admin", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $admin = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="groups", type="blob", length=65535, nullable=true)
     */
    private $groups;

    /**
     * @var string
     *
     * @ORM\Column(name="inherit", type="string", length=12, nullable=false, options={"default"="group"})
     */
    private $inherit = 'group';

    /**
     * @var string|null
     *
     * @ORM\Column(name="modules", type="blob", length=65535, nullable=true)
     */
    private $modules;

    /**
     * @var string|null
     *
     * @ORM\Column(name="themes", type="blob", length=65535, nullable=true)
     */
    private $themes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="elements", type="blob", length=65535, nullable=true)
     */
    private $elements;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fields", type="blob", length=65535, nullable=true)
     */
    private $fields;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pagemounts", type="blob", length=65535, nullable=true)
     */
    private $pagemounts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alpty", type="blob", length=65535, nullable=true)
     */
    private $alpty;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filemounts", type="blob", length=65535, nullable=true)
     */
    private $filemounts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fop", type="blob", length=65535, nullable=true)
     */
    private $fop;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imageSizes", type="blob", length=65535, nullable=true)
     */
    private $imagesizes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forms", type="blob", length=65535, nullable=true)
     */
    private $forms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="formp", type="blob", length=65535, nullable=true)
     */
    private $formp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amg", type="blob", length=65535, nullable=true)
     */
    private $amg;

    /**
     * @var string
     *
     * @ORM\Column(name="disable", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $disable = '';

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
     * @var string|null
     *
     * @ORM\Column(name="session", type="blob", length=65535, nullable=true)
     */
    private $session;

    /**
     * @var int
     *
     * @ORM\Column(name="dateAdded", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dateadded = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="secret", type="binary", nullable=true)
     */
    private $secret;

    /**
     * @var string
     *
     * @ORM\Column(name="useTwoFactor", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $usetwofactor = '';

    /**
     * @var int
     *
     * @ORM\Column(name="lastLogin", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastlogin = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="currentLogin", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $currentlogin = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="loginAttempts", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $loginattempts = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="locked", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $locked = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="backupCodes", type="text", length=65535, nullable=true)
     */
    private $backupcodes;

    /**
     * @var int
     *
     * @ORM\Column(name="trustedTokenVersion", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $trustedtokenversion = '0';

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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getBackendtheme(): ?string
    {
        return $this->backendtheme;
    }

    public function setBackendtheme(string $backendtheme): self
    {
        $this->backendtheme = $backendtheme;

        return $this;
    }

    public function getFullscreen(): ?string
    {
        return $this->fullscreen;
    }

    public function setFullscreen(string $fullscreen): self
    {
        $this->fullscreen = $fullscreen;

        return $this;
    }

    public function getUploader(): ?string
    {
        return $this->uploader;
    }

    public function setUploader(string $uploader): self
    {
        $this->uploader = $uploader;

        return $this;
    }

    public function getShowhelp(): ?string
    {
        return $this->showhelp;
    }

    public function setShowhelp(string $showhelp): self
    {
        $this->showhelp = $showhelp;

        return $this;
    }

    public function getThumbnails(): ?string
    {
        return $this->thumbnails;
    }

    public function setThumbnails(string $thumbnails): self
    {
        $this->thumbnails = $thumbnails;

        return $this;
    }

    public function getUserte(): ?string
    {
        return $this->userte;
    }

    public function setUserte(string $userte): self
    {
        $this->userte = $userte;

        return $this;
    }

    public function getUsece(): ?string
    {
        return $this->usece;
    }

    public function setUsece(string $usece): self
    {
        $this->usece = $usece;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPwchange(): ?string
    {
        return $this->pwchange;
    }

    public function setPwchange(string $pwchange): self
    {
        $this->pwchange = $pwchange;

        return $this;
    }

    public function getAdmin(): ?string
    {
        return $this->admin;
    }

    public function setAdmin(string $admin): self
    {
        $this->admin = $admin;

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

    public function getInherit(): ?string
    {
        return $this->inherit;
    }

    public function setInherit(string $inherit): self
    {
        $this->inherit = $inherit;

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

    public function getThemes()
    {
        return $this->themes;
    }

    public function setThemes($themes): self
    {
        $this->themes = $themes;

        return $this;
    }

    public function getElements()
    {
        return $this->elements;
    }

    public function setElements($elements): self
    {
        $this->elements = $elements;

        return $this;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setFields($fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    public function getPagemounts()
    {
        return $this->pagemounts;
    }

    public function setPagemounts($pagemounts): self
    {
        $this->pagemounts = $pagemounts;

        return $this;
    }

    public function getAlpty()
    {
        return $this->alpty;
    }

    public function setAlpty($alpty): self
    {
        $this->alpty = $alpty;

        return $this;
    }

    public function getFilemounts()
    {
        return $this->filemounts;
    }

    public function setFilemounts($filemounts): self
    {
        $this->filemounts = $filemounts;

        return $this;
    }

    public function getFop()
    {
        return $this->fop;
    }

    public function setFop($fop): self
    {
        $this->fop = $fop;

        return $this;
    }

    public function getImagesizes()
    {
        return $this->imagesizes;
    }

    public function setImagesizes($imagesizes): self
    {
        $this->imagesizes = $imagesizes;

        return $this;
    }

    public function getForms()
    {
        return $this->forms;
    }

    public function setForms($forms): self
    {
        $this->forms = $forms;

        return $this;
    }

    public function getFormp()
    {
        return $this->formp;
    }

    public function setFormp($formp): self
    {
        $this->formp = $formp;

        return $this;
    }

    public function getAmg()
    {
        return $this->amg;
    }

    public function setAmg($amg): self
    {
        $this->amg = $amg;

        return $this;
    }

    public function getDisable(): ?string
    {
        return $this->disable;
    }

    public function setDisable(string $disable): self
    {
        $this->disable = $disable;

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

    public function getSession()
    {
        return $this->session;
    }

    public function setSession($session): self
    {
        $this->session = $session;

        return $this;
    }

    public function getDateadded(): ?int
    {
        return $this->dateadded;
    }

    public function setDateadded(int $dateadded): self
    {
        $this->dateadded = $dateadded;

        return $this;
    }

    public function getSecret()
    {
        return $this->secret;
    }

    public function setSecret($secret): self
    {
        $this->secret = $secret;

        return $this;
    }

    public function getUsetwofactor(): ?string
    {
        return $this->usetwofactor;
    }

    public function setUsetwofactor(string $usetwofactor): self
    {
        $this->usetwofactor = $usetwofactor;

        return $this;
    }

    public function getLastlogin(): ?int
    {
        return $this->lastlogin;
    }

    public function setLastlogin(int $lastlogin): self
    {
        $this->lastlogin = $lastlogin;

        return $this;
    }

    public function getCurrentlogin(): ?int
    {
        return $this->currentlogin;
    }

    public function setCurrentlogin(int $currentlogin): self
    {
        $this->currentlogin = $currentlogin;

        return $this;
    }

    public function getLoginattempts(): ?int
    {
        return $this->loginattempts;
    }

    public function setLoginattempts(int $loginattempts): self
    {
        $this->loginattempts = $loginattempts;

        return $this;
    }

    public function getLocked(): ?int
    {
        return $this->locked;
    }

    public function setLocked(int $locked): self
    {
        $this->locked = $locked;

        return $this;
    }

    public function getBackupcodes(): ?string
    {
        return $this->backupcodes;
    }

    public function setBackupcodes(?string $backupcodes): self
    {
        $this->backupcodes = $backupcodes;

        return $this;
    }

    public function getTrustedtokenversion(): ?int
    {
        return $this->trustedtokenversion;
    }

    public function setTrustedtokenversion(int $trustedtokenversion): self
    {
        $this->trustedtokenversion = $trustedtokenversion;

        return $this;
    }
}

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
 * TlMember.
 *
 * @ORM\MappedSuperclass
 * @ORM\Table(name="tl_member", uniqueConstraints={
 *     @ORM\UniqueConstraint(name="username", columns={"username"})
 * }, indexes={
 *     @ORM\Index(name="login_disable_start_stop", columns={"login", "disable", "start", "stop"}),
 *     @ORM\Index(name="email", columns={"email"})
 * })
 */
class TlMember
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
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     */
    private $lastname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dateOfBirth", type="string", length=11, nullable=false)
     */
    private $dateofbirth = '';

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=32, nullable=false)
     */
    private $gender = '';

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=false)
     */
    private $company = '';

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255, nullable=false)
     */
    private $street = '';

    /**
     * @var string
     *
     * @ORM\Column(name="postal", type="string", length=32, nullable=false)
     */
    private $postal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     */
    private $city = '';

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=64, nullable=false)
     */
    private $state = '';

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=false)
     */
    private $country = '';

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=64, nullable=false)
     */
    private $phone = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=64, nullable=false)
     */
    private $mobile = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=64, nullable=false)
     */
    private $fax = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=false)
     */
    private $website = '';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=64, nullable=false)
     */
    private $language = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="groups", type="blob", length=65535, nullable=true)
     */
    private $groups;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $login = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=64, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="assignDir", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $assigndir = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="homeDir", type="binary_string", nullable=true)
     */
    private $homedir;

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
     * @var int
     *
     * @ORM\Column(name="dateAdded", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dateadded = '0';

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
     * @ORM\Column(name="session", type="blob", length=65535, nullable=true)
     */
    private $session;

    /**
     * @var string|null
     *
     * @ORM\Column(name="secret", type="binary_string", nullable=true)
     */
    private $secret;

    /**
     * @var string
     *
     * @ORM\Column(name="useTwoFactor", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $usetwofactor = '';

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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getDateofbirth(): ?string
    {
        return $this->dateofbirth;
    }

    public function setDateofbirth(string $dateofbirth): self
    {
        $this->dateofbirth = $dateofbirth;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getPostal(): ?string
    {
        return $this->postal;
    }

    public function setPostal(string $postal): self
    {
        $this->postal = $postal;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

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

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->website = $website;

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

    public function getGroups(): ?string
    {
        return $this->groups;
    }

    public function setGroups($groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getAssigndir(): ?string
    {
        return $this->assigndir;
    }

    public function setAssigndir(string $assigndir): self
    {
        $this->assigndir = $assigndir;

        return $this;
    }

    public function getHomedir(): ?string
    {
        return $this->homedir;
    }

    public function setHomedir($homedir): self
    {
        $this->homedir = $homedir;

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

    public function getDateadded(): ?int
    {
        return $this->dateadded;
    }

    public function setDateadded(int $dateadded): self
    {
        $this->dateadded = $dateadded;

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

    public function getSession(): ?string
    {
        return $this->session;
    }

    public function setSession($session): self
    {
        $this->session = $session;

        return $this;
    }

    public function getSecret(): ?string
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

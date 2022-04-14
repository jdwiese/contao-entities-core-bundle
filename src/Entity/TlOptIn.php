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
 * TlOptIn.
 *
 * @ORM\Table(name="tl_opt_in", uniqueConstraints={@ORM\UniqueConstraint(name="token", columns={"token"})}, indexes={@ORM\Index(name="removeon", columns={"removeOn"})})
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlOptInRepository")
 */
class TlOptIn
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
     * @ORM\Column(name="token", type="string", length=24, nullable=false)
     */
    private $token = '';

    /**
     * @var int
     *
     * @ORM\Column(name="createdOn", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdon = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="confirmedOn", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $confirmedon = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="removeOn", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $removeon = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="invalidatedThrough", type="string", length=24, nullable=false)
     */
    private $invalidatedthrough = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="emailSubject", type="string", length=255, nullable=false)
     */
    private $emailsubject = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailText", type="text", length=65535, nullable=true)
     */
    private $emailtext;

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

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getCreatedon(): ?int
    {
        return $this->createdon;
    }

    public function setCreatedon(int $createdon): self
    {
        $this->createdon = $createdon;

        return $this;
    }

    public function getConfirmedon(): ?int
    {
        return $this->confirmedon;
    }

    public function setConfirmedon(int $confirmedon): self
    {
        $this->confirmedon = $confirmedon;

        return $this;
    }

    public function getRemoveon(): ?int
    {
        return $this->removeon;
    }

    public function setRemoveon(int $removeon): self
    {
        $this->removeon = $removeon;

        return $this;
    }

    public function getInvalidatedthrough(): ?string
    {
        return $this->invalidatedthrough;
    }

    public function setInvalidatedthrough(string $invalidatedthrough): self
    {
        $this->invalidatedthrough = $invalidatedthrough;

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

    public function getEmailsubject(): ?string
    {
        return $this->emailsubject;
    }

    public function setEmailsubject(string $emailsubject): self
    {
        $this->emailsubject = $emailsubject;

        return $this;
    }

    public function getEmailtext(): ?string
    {
        return $this->emailtext;
    }

    public function setEmailtext(?string $emailtext): self
    {
        $this->emailtext = $emailtext;

        return $this;
    }
}

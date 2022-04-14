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
 * TlRememberMe.
 *
 * @ORM\Table(name="tl_remember_me", uniqueConstraints={
 *     @ORM\UniqueConstraint(name="value", columns={"value"})
 * }, indexes={
 *     @ORM\Index(name="series", columns={"series"})
 * })
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlRememberMeRepository")
 */
class TlRememberMe
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
     * @ORM\Column(name="series", type="binary_string", nullable=false)
     */
    private $series;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="binary_string", nullable=false)
     */
    private $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastUsed", type="datetime", nullable=false)
     */
    private $lastused;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expires", type="datetime", nullable=true)
     */
    private $expires;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=100, nullable=false)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=200, nullable=false)
     */
    private $username;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSeries()
    {
        return $this->series;
    }

    public function setSeries($series): self
    {
        $this->series = $series;

        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getLastused(): ?\DateTimeInterface
    {
        return $this->lastused;
    }

    public function setLastused(\DateTimeInterface $lastused): self
    {
        $this->lastused = $lastused;

        return $this;
    }

    public function getExpires(): ?\DateTimeInterface
    {
        return $this->expires;
    }

    public function setExpires(?\DateTimeInterface $expires): self
    {
        $this->expires = $expires;

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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }
}

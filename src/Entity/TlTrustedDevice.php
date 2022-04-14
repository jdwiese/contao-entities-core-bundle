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
 * TlTrustedDevice.
 *
 * @ORM\Table(name="tl_trusted_device")
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlTrustedDeviceRepository")
 */
class TlTrustedDevice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var string|null
     *
     * @ORM\Column(name="userClass", type="string", length=255, nullable=true)
     */
    private $userclass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="userId", type="integer", nullable=true)
     */
    private $userid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_agent", type="text", length=0, nullable=true)
     */
    private $userAgent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ua_family", type="string", length=255, nullable=true)
     */
    private $uaFamily;

    /**
     * @var string|null
     *
     * @ORM\Column(name="os_family", type="string", length=255, nullable=true)
     */
    private $osFamily;

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_family", type="string", length=255, nullable=true)
     */
    private $deviceFamily;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getUserclass(): ?string
    {
        return $this->userclass;
    }

    public function setUserclass(?string $userclass): self
    {
        $this->userclass = $userclass;

        return $this;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(?int $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    public function getUaFamily(): ?string
    {
        return $this->uaFamily;
    }

    public function setUaFamily(?string $uaFamily): self
    {
        $this->uaFamily = $uaFamily;

        return $this;
    }

    public function getOsFamily(): ?string
    {
        return $this->osFamily;
    }

    public function setOsFamily(?string $osFamily): self
    {
        $this->osFamily = $osFamily;

        return $this;
    }

    public function getDeviceFamily(): ?string
    {
        return $this->deviceFamily;
    }

    public function setDeviceFamily(?string $deviceFamily): self
    {
        $this->deviceFamily = $deviceFamily;

        return $this;
    }
}

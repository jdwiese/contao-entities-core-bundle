<?php

namespace Jdwiese\ContaoEntitiesCoreBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait CalendarEvents413Trait
{
    /**
     * @var string
     *
     * @ORM\Column(name="featured", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $featured = '';

    /**
     * @var string
     *
     * @ORM\Column(name="robots", type="string", length=32, nullable=false)
     */
    private $robots = '';

    /**
     * @return string
     */
    public function getFeatured(): string
    {
        return $this->featured;
    }

    /**
     * @return string
     */
    public function getRobots(): string
    {
        return $this->robots;
    }
}

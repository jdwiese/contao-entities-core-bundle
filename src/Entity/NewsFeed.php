<?php

declare(strict_types=1);

namespace Jdwiese\ContaoEntitiesCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsFeed
 *
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\NewsFeedRepository")
 */
class NewsFeed extends TlNewsFeed
{
}

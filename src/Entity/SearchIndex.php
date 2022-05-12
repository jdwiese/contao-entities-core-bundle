<?php

declare(strict_types=1);

namespace Jdwiese\ContaoEntitiesCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SearchIndex.
 *
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\SearchIndexRepository")
 */
class SearchIndex extends TlSearchIndex
{
}

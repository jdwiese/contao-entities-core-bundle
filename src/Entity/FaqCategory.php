<?php

declare(strict_types=1);

namespace Jdwiese\ContaoEntitiesCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FaqCategory
 *
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\FaqCategoryRepository")
 */
class FaqCategory extends TlFaqCategory
{
}

<?php

declare(strict_types=1);

namespace Jdwiese\ContaoEntitiesCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarEvents
 *
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\CalendarEventsRepository")
 */
class CalendarEvents extends TlCalendarEvents
{
}

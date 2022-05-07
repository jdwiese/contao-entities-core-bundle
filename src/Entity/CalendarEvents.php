<?php

namespace Jdwiese\ContaoEntitiesCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarEvents
 *
 * @ORM\Table(name="tl_calendar_events", indexes={
 *     @ORM\Index(name="alias", columns={"alias"}),
 *     @ORM\Index(name="pid_published_featured_start_stop", columns={"pid", "published", "featured", "start", "stop"})
 * })
 * @ORM\Entity(repositoryClass="Jdwiese\ContaoEntitiesCoreBundle\Repository\TlCalendarEventsRepository")
 */
class CalendarEvents extends TlCalendarEvents
{
}

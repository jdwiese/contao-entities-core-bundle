<?php

namespace Jdwiese\ContaoEntitiesCoreBundle\EventListener\Schema;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Event\GenerateSchemaTableEventArgs;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Article;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Calendar;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\CalendarEvents;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\CalendarFeed;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Content;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Faq;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\FaqCategory;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Files;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Form;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\FormField;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\ImageSize;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\ImageSizeItem;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Layout;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Log;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Member;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\MemberGroup;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Module;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\News;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\NewsArchive;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\NewsFeed;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\OptIn;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\OptInRelated;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Page;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\PreviewLink;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Search;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\SearchIndex;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\SearchTerm;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Style;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\StyleSheet;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Theme;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Undo;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\User;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\UserGroup;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\Version;

final class SchemaListener
{
    const SKIP_ENTITIES = [
        Article::class,
        Content::class,
        Calendar::class,
        CalendarEvents::class,
        CalendarFeed::class,
        Faq::class,
        FaqCategory::class,
        Files::class,
        Form::class,
        FormField::class,
        ImageSize::class,
        ImageSizeItem::class,
        Layout::class,
        Log::class,
        Member::class,
        MemberGroup::class,
        Module::class,
        News::class,
        NewsArchive::class,
        NewsFeed::class,
        OptIn::class,
        OptInRelated::class,
        Page::class,
        PreviewLink::class,
        Search::class,
        SearchIndex::class,
        SearchTerm::class,
        Style::class,
        StyleSheet::class,
        Theme::class,
        Undo::class,
        User::class,
        UserGroup::class,
        Version::class
    ];

    private array $skipTables;

    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function postGenerateSchemaTable(GenerateSchemaTableEventArgs $args)
    {
        $table = $args->getClassTable()->getName();
        if ($this->skipTable($table)) {
            $schema = $args->getSchema();
            $schema->dropTable($table);
        }
    }

    private function skipTable(string $table): bool
    {
        if (empty($this->skipTables)) {
            $this->skipTables = array_map(function(string $entityClass) {
                return $this->entityManager->getClassMetadata($entityClass)->getTableName();
            }, self::SKIP_ENTITIES);
        }

        return in_array($table, $this->skipTables);
    }
}

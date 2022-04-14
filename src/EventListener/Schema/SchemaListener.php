<?php

namespace Jdwiese\ContaoEntitiesCoreBundle\EventListener\Schema;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Event\GenerateSchemaTableEventArgs;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlArticle;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlContent;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlFiles;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlForm;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlFormField;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlImageSize;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlImageSizeItem;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlLayout;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlLog;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlMember;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlMemberGroup;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlModule;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlOptIn;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlOptInRelated;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlPage;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlPreviewLink;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlSearch;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlSearchIndex;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlSearchTerm;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlStyle;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlStyleSheet;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlTheme;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlUndo;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlUser;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlUserGroup;
use Jdwiese\ContaoEntitiesCoreBundle\Entity\TlVersion;

final class SchemaListener
{
    const SKIP_ENTITIES = [
        TlArticle::class,
        TlContent::class,
        TlFiles::class,
        TlForm::class,
        TlFormField::class,
        TlImageSize::class,
        TlImageSizeItem::class,
        TlLayout::class,
        TlLog::class,
        TlMember::class,
        TlMemberGroup::class,
        TlModule::class,
        TlOptIn::class,
        TlOptInRelated::class,
        TlPage::class,
        TlPreviewLink::class,
        TlSearch::class,
        TlSearchIndex::class,
        TlSearchTerm::class,
        TlStyle::class,
        TlStyleSheet::class,
        TlTheme::class,
        TlUndo::class,
        TlUser::class,
        TlUserGroup::class,
        TlVersion::class
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

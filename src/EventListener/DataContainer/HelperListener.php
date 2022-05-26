<?php

declare(strict_types=1);

namespace Jdwiese\ContaoEntitiesCoreBundle\EventListener\DataContainer;

use Contao\DataContainer;
use Contao\StringUtil;
use DateTime;

class HelperListener
{
    public function saveEmptyNull($varValue, DataContainer $dataContainer): ?string
    {
        return ('' === $varValue) ? null : $varValue;
    }

    public function saveBoolean($varValue, DataContainer $dataContainer): int
    {
        return $varValue ? 1 : 0;
    }

    public function saveDate($varValue, object $dataContainer): ?string
    {
        if ((string)$varValue !== '') {
            return date('Y-m-d', $varValue);
        }
        return null;
    }

    public function loadDate($varValue, DataContainer $dataContainer): ?int
    {
        if ($varValue) {
            return DateTime::createFromFormat('Y-m-d', $varValue)->getTimestamp();
        }
        return null;
    }

    public function saveTime($varValue, object $dataContainer): ?string
    {
        if ((string)$varValue !== '') {
            return date('H:i:s', $varValue);
        }
        return null;
    }

    public function loadTime($varValue, DataContainer $dataContainer): ?int
    {
        if ($varValue) {
            return DateTime::createFromFormat('H:i:s', $varValue)->getTimestamp();
        }
        return null;
    }

    public function saveArrayAsJson($varValue, object $dataContainer): ?string
    {
        $varValue = StringUtil::deserialize($varValue, true);
        return json_encode($varValue);
    }

    public function loadArrayFromJson($varValue, DataContainer $dataContainer): array
    {
        return empty($varValue) ? [] : json_decode($varValue, true);
    }
}

<?php

declare(strict_types=1);

/*
 * This file is part of jdwiese/contao-entities-core-bundle.
 *
 * (c) Jan-Dirk Wiese
 *
 * @license LGPL-3.0-or-later
 */

namespace Jdwiese\ContaoEntitiesCoreBundle\Tests;

use Jdwiese\ContaoEntitiesCoreBundle\JdwieseContaoEntitiesCoreBundle;
use PHPUnit\Framework\TestCase;

class JdwieseContaoEntitiesCoreBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new JdwieseContaoEntitiesCoreBundle();

        $this->assertInstanceOf('Jdwiese\ContaoEntitiesCoreBundle\JdwieseContaoEntitiesCoreBundle', $bundle);
    }
}

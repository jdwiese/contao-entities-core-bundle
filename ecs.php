<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use SlevomatCodingStandard\Sniffs\TypeHints\DisallowArrayTypeHintSyntaxSniff;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__.'/vendor/contao/easy-coding-standard/config/contao.php');

    // Adjust the configuration according to your needs.
    $services = $containerConfigurator->services();
    $services
        ->set(HeaderCommentFixer::class)
        ->call('configure', [[
            'header' => "This file is part of jdwiese/contao-entities-core-bundle.\n\n(c) Jan-Dirk Wiese\n\n@license LGPL-3.0-or-later",
        ]])
    ;

    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::SKIP, [
        DisallowArrayTypeHintSyntaxSniff::class => [
            __DIR__ . '/src/Repository/*Repository.php'
        ]
    ]);
};

<?php

declare(strict_types=1);

/**
 * @package    EmcModule
 * @subpackage src
 * @author     Matijs de Jong <mjong@magnafacta.nl>
 */

namespace EmcModule;

/**
 * @package    EmcModule
 * @subpackage src
 * @since      Class available since version 1.0
 */
class ConfigProvider
{
    public function __invoke(): array
    {
        return [
//            'console'         => $this->getConsoleSettings(),
//            'dependencies'    => $this->getDependencies(),
//            'migrations'      => $this->getMigrations(),
            'overLoaderPaths' => ['EmcModule'],
//            'routes'          => $this->getRoutes(),
//            'translations'    => $this->getTranslationSettings(),
        ];
    }

}
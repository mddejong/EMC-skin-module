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
class EmcConfigProvider
{
    public function __invoke(): array
    {
        return [
//            'auth'            => $this->getAuthSettings(),
            'console'         => $this->getConsoleSettings(),
//            'dependencies'    => $this->getDependencies(),
            'migrations'      => $this->getMigrations(),
            'overLoaderPaths' => ['EmcModule'],
//            'routes'          => $this->getRoutes(),
            'templates'       => $this->getTemplates(),
//            'translations'    => $this->getTranslationSettings(),
        ];
    }

    protected function getAuthSettings(): array
    {
        return [
            'allowLoginOnOtherOrganization' => true,
        ];
    }

    public function getConsoleSettings(): array
    {
        return [
            'addUsers' => true,
            'resetPassword' => true,
        ];
    }

    protected function getMigrations(): array
    {
        return [
            'tables' => [
                dirname(__DIR__) . '/configs/db/tables',
            ],
            'seeds' => [
                dirname(__DIR__) . '/configs/db/seeds',
            ],
            /* 'patches' => [
                dirname(__DIR__) . '/Config/Db/patches',
            ], // */
        ];
    }

    /**
     * Returns the templates configuration
     *
     * @return mixed[]
     */
    public function getTemplates(): array
    {
        return [
            'paths' => [
                'layout'  => [dirname(__DIR__) . '/templates/layout'],
            ],
        ];
    }
}
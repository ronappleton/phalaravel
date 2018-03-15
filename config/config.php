<?php

defined('APP_PATH') || define('APP_PATH', realpath('.'));
defined('APP_NAMESPACE_PATH') || define('APP_NAMESPACE_PATH', '/app/');

return new \Phalcon\Config(
    [
        'application' => [
            'directories' => [
                'controllerDir' => APP_PATH . APP_NAMESPACE_PATH . 'Http/Controllers/',
                'modelDir' => APP_PATH . APP_NAMESPACE_PATH . 'Models/',
                'facadeDir' => APP_PATH . APP_NAMESPACE_PATH . 'Facades/',

                'cacheDir' => APP_PATH . '/cache/',
                'logDir' => APP_PATH . '/storage/logs',

                'resourceDir' => APP_PATH . APP_NAMESPACE_PATH . 'resources/',
                'viewDir' => APP_PATH . '/resources/views/',
                'layoutDir' => APP_PATH . '/resources/layouts/',
                'assetDir' => APP_PATH . '/resources/assets/',


                'databaseDir' => APP_PATH . '/database/',
                'migrationsDir' => APP_PATH . '/database/migrations/',
                'seedDir' => APP_PATH . '/database/seeders/',

                'libDir' => APP_PATH . APP_NAMESPACE_PATH . 'Libs/',
            ],

            'baseUri' => '/current/',
        ],
        'session' => [
            'id' => 'userid'

        ],
    ]
);

<?php
return [
    'application' => [
        'directories' => [
            'controllerDir' => APP_PATH . APP_NAMESPACE_PATH . 'Http/Controllers/',
            'modelDir' => APP_PATH . APP_NAMESPACE_PATH . 'Models/',
            'facadeDir' => APP_PATH . APP_NAMESPACE_PATH . 'Facades/',

            'logDir' => APP_PATH . '/storage/logs',

            'resourceDir' => APP_PATH . APP_NAMESPACE_PATH . 'resources/',

            'layoutDir' => APP_PATH . '/resources/layouts/',
            'assetDir' => APP_PATH . '/resources/assets/',


            'databaseDir' => APP_PATH . '/database/',
            'migrationsDir' => APP_PATH . '/database/migrations/',
            'seedDir' => APP_PATH . '/database/seeders/',

            'libDir' => APP_PATH . APP_NAMESPACE_PATH . 'Libs/',
        ],
    ]
];
<?php

return [

    'application' => [
        'directories' => [
            'cacheDir' => APP_PATH . '/cache/', //needed for boot
            'logDir' => APP_PATH . '/storage/logs',
            'viewDir' => APP_PATH . '/resources/views/', //needed for boot
        ],

        'baseUri' => '/current/', //needed for boot
    ],
    'session' => [
        'id' => 'userid'

    ],
];
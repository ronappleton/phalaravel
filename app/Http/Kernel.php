<?php

use Phalcon\Di\FactoryDefault;

$loader = new \Phalcon\Loader;


$loader->registerDirs(
    [
        $config->application->directories->modelDir,
        $config->application->directories->facadeDir,
    ]
);


$loader->registerNamespaces(
    [

    ]
);


/**
 * Registers within phalcon
 */
$loader->register();

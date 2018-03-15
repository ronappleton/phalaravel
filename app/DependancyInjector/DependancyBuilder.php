<?php
/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */

use Phalcon\Di\FactoryDefault;

$di = new FactoryDefault;

$services = include "ServiceRegister.php";

/**
 * Read the configuration
 */
$config = include APP_PATH . "/config/config.php";

if(!function_exists('loadDIServices'))
{
    function loadDIServices($config, $services, $di)
    {
        foreach ($services as $filename)
        {
            include $filename;
        }
    }
}

loadDIServices($config, $services, $di);
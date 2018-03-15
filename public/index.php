<?php
define('APP_PATH', realpath('..'));

try {

    /**
     * Path to vendor directory
     */
    require_once APP_PATH . '/vendor/autoload.php';

    /**
     * Load environment file
     */
    $dotenv = new Dotenv\Dotenv(APP_PATH);
    $dotenv->load();

    /**
     * Control debugging
     */
    if(env('APP_DEBUG'))
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }

    include APP_PATH . "/app/DependancyInjector/DependancyBuilder.php";

    include APP_PATH . "/app/Http/Kernel.php";

    /**
     * Boot our application
     */
    $application = new Phalcon\Mvc\Application($di);

    /**
     * Construct service facades
     */
    Facade::setFacadeApplication($di);

    /**
    *  Read the routes
    */
    include APP_PATH . "/app/Http/Routes/routes.php";


    /**
     * Handle the request
     */

    $response = $application->handle();

    $response->send();

} catch (\Exception $e) {
    echo $e->getMessage();
    echo $e;
}
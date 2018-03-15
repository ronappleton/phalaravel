<?php
$di->set('router', function () {
    $router = new Phalcon\Mvc\Router(false);
    return $router;
}, true);
/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->set('url', function () use ($config) {
    $url = new UrlResolver();
    $url->setBaseUri($config->application->baseUri);

    return $url;
}, true);

$di->setShared('request', function () {
    $input = new Phalcon\Http\Request();
    return $input;
});

$di->set('response', function () {
    $response = new App\Libs\Response();
    return $response;
});
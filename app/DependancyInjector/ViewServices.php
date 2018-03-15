<?php
/**
 * Setting up the view component
 */
$di->setShared('view', function () use ($config) {
    $view = new Phalcon\Mvc\View();
    $view->setViewsDir($config->application->directories->viewDir);

    return $view;
});

$di->set('blade', function () use ($config) {
    $paths = [
        $config->application->directories->viewDir
    ];

    $renderer = new App\Libs\Blade($paths, [
        'cache_path' => $config->application->directories->cacheDir
    ]);
    return $renderer;
});

$di->setShared('assets', function () {
    return new Phalcon\Assets\Manager();
});
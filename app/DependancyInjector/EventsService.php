<?php
$di->set('dispatcher', function () {

    // Create an EventsManager
    $eventsManager = new Phalcon\Events\Manager;

    /*
    * Event below is only responsible for checking to see if user is logged in to the system.
    */
    $eventsManager->attach('dispatch:beforeDispatch', new App\Libs\RouteFilter());
    /*
    * Event below is only responsible for checking to see if user has valid permission to acces the route.
    */
    $eventsManager->attach("dispatch:beforeExecuteRoute", new App\Libs\RouteFilter());

    $dispatcher = new Phalcon\Mvc\Dispatcher;

    // Bind the EventsManager to the dispatcher
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;

}, true);


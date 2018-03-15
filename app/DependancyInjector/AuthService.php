<?php
$di->setShared('auth', function () {
    $auth = new App\Libs\Auth();
    return $auth;
});

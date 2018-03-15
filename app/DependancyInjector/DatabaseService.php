<?php
/**
 * Database connection is created based in the parameters defined in the configuration file
 */

$capsule = new Illuminate\Database\Capsule\Manager;

$capsule->addConnection(
    include_once APP_PATH . '/config/database.php'
);

$capsule->bootEloquent();

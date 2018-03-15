<?php
/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->set('modelsMetadata', function () {
    return new  Phalcon\Mvc\Model\Metadata\Memory;
});

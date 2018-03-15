<?php

namespace App\Http\Controllers;

use \Phalcon\Mvc\Controller;

class BaseController
{
    public function onConstruct()
    {
        $this->view->disable();

    }

    public function beforeExecuteRoute($dispatcher)
    {
        // Executed before every found action
    }

    public function afterExecuteRoute($dispatcher)
    {
        // Executed after every found action
    }
}

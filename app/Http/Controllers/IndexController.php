<?php

namespace App\Http\Controllers;

use View;

class IndexController extends BaseController
{

    public function indexAction()
    {
        return View::make('frontend.hello');

    }

}
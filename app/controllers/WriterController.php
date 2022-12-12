<?php

namespace app\controllers;

use app\core\base\BaseController;
use app\core\adapter\RequestAdapter as Request;

class WriterController extends BaseController
{
    public function index($slug)
    {
        return view('writer');
    }
}

<?php

namespace app\controllers;

use app\model\Post;
use app\core\base\BaseController;
use app\core\adapter\RequestAdapter as Request;

class IndexController extends BaseController
{
    public function index()
    {
        return view('index');
    }
}

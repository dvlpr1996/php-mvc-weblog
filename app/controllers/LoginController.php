<?php

namespace app\controllers;

use app\core\base\BaseController;
use app\core\adapter\RequestAdapter as Request;

class LoginController extends BaseController
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        dd($request->all());
        // return view('');
    }
}

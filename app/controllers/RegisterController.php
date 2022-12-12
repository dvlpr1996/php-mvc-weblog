<?php

namespace app\controllers;

use app\core\base\BaseController;
use app\core\adapter\RequestAdapter as Request;

class RegisterController extends BaseController
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        dd($request->all());
        // return view('');
    }
}

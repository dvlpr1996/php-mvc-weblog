<?php

namespace app\controllers;

use app\validation\test;
use app\core\facades\Validate;
use Buki\Router\Http\Controller;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends Controller
{
	public function index()
	{
		return view('test');
	}

	public function send(Request $request)
	{
		$validation = Validate::validate(test::class);
		return view('test', ['errors' => $validation]);
	}
}

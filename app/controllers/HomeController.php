<?php

namespace app\controllers;

use app\validation\test;
use Rakit\Validation\Validator;
use Buki\Router\Http\Controller;
use app\core\adapter\ValidatorAdapter;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends Controller
{
	public function index()
	{
		view('test');
	}

	public function send(Request $request)
	{
		$a = new ValidatorAdapter;
		$b = $a->validate(test::class);
		view('test', ['errors' => $b]);
	}
}

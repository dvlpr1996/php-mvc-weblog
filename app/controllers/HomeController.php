<?php

namespace app\controllers;

use Buki\Router\Http\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
	public function index()
	{
		view('test');
	}

	public function send(Request $request)
	{
	
	}

	public function go($id, $slug)
	{
	}
}

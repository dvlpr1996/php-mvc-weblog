<?php

namespace app\controllers;

use app\model\Post;
use app\validation\test;
use app\core\facades\Validate;
use Buki\Router\Http\Controller;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends Controller
{
	public function index()
	{
		$post = new Post();
		$posts = $post->select('name')->getAll();
		return view('test', ['errors' => $posts]);
		// return view('test');
	}

	public function send(Request $request)
	{

		// $validation = Validate::validate(test::class);
	}
}

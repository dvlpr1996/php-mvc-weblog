<?php

namespace app\controllers;

use app\model\Post;
use app\core\base\BaseController;
use app\core\adapter\RequestAdapter as Request;

class HomeController extends BaseController
{
    public function index()
    {
        $posts = $this->model(Post::class)->select('name')->getAll();
        return view('test', compact('posts'));
    }

    public function send($id, $slug, Request $request)
    {
        return redirect('test');
    }
}

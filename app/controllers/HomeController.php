<?php

namespace app\controllers;

use app\model\Post;
use app\core\facades\Validate;
use app\core\base\BaseController;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends BaseController
{
    public function index()
    {
        $posts = $this->model(Post::class)->select('name')->getAll();
        return view('test', compact('posts'));
    }

    public function send(Request $request)
    {
        $validation = Validate::validate(test::class);
    }
}

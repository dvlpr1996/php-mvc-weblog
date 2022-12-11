<?php

namespace app\core\adapter;

use Buki\Router\Router;
use app\core\adapter\RequestAdapter;

class RouterAdapter
{
    private $router;
    private $request;
    private array $config;
    public function __construct()
    {
        $this->config = config('route');
        $this->request = new RequestAdapter();
        $this->router = new Router($this->config, $this->request);
    }

    public function get(string $route, array $action, string $routeName)
    {
        return $this->router->get($route, $action, ['name' => $routeName]);
    }

    public function post(string $route, array $action, string $routeName)
    {
        return $this->router->POST($route, $action, ['name' => $routeName]);
    }

    public function put(string $route, array $action, string $routeName)
    {
        return $this->router->PUT($route, $action, ['name' => $routeName]);
    }

    public function getAllRoutes()
    {
        return $this->router->getRoutes();
    }

    public function runRouter()
    {
        // $this->cacheRoute();
        $this->dispatch404();
        $this->displayError();
        return $this->router->run();
    }

    private function dispatch404()
    {
        return $this->router->notFound(function () {
            header("HTTP/1.0 404 Not Found");
            // view('errors.404');
            die('errors.404notFound');
        });
    }

    private function displayError()
    {
        return $this->router->error(function () {
            die('errors');
            // view('errors.error');
        });
    }

    // private function cacheRoute()
    // {
    // 	return $this->router->cache();
    // }
}

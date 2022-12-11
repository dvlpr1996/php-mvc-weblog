<?php

namespace app\utilities;

use app\core\adapter\RequestAdapter;


class UriGenerator
{
    protected $url;
    protected $base;
    protected $request;
    protected $cachePath;
    protected $https = false;
    protected $cachedHttps = false;

    function __construct()
    {
        $this->cachePath = routeCachePath();
        $this->request = new RequestAdapter;
        $this->base = BASE_URL;
        $this->url = $this->request->server('HTTP_HOST');
    }

    public function route(string $name, array $params = [], $secure = false): string
    {
        global $router;

        $routes = file_exists($this->cachePath)
            ? require_once $this->cachePath
            : $router->getAllRoutes();

        $foundRoute = false;

        foreach ($routes as $key => $value) {
            if ($value['name'] == $name) {
                $foundRoute = true;
                break;
            }
        }

        if ($foundRoute) {
            if (strstr($routes[$key]['route'], ':')) {
                $segment = explode('/', $routes[$key]['route']);
                $i = 0;
                foreach ($segment as $key => $value) {
                    if (strstr($value, ':')) {
                        $segment[$key] = $params[$i];
                        $i++;
                    }
                }
                $newUrl = implode('/', $segment);
            } else {
                $newUrl = $routes[$key]['route'];
            }

            $data = str_replace($this->base, '', $this->url) . '/' . $newUrl;
            return $this->getUrl($data, $secure);
        }

        return $this->getUrl($this->url, $secure);
    }

    protected function getUrl(string $data, bool $secure): string
    {
        $this->https = $secure;
        return $this->scheme() . $this->replace($data);
    }

    protected function scheme(): string
    {
        if ($this->cachedHttps === true) {
            $this->https = true;
        }

        return "http" . ($this->https === true ? 's' : '') . "://";
    }

    private function replace(string $data): ?string
    {
        return str_replace(['///', '//'], '/', $data);
    }
}

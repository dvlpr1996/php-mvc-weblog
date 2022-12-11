<?php

namespace app\core\adapter;

use SplFileInfo;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\{ParameterBag, Request as SymfonyRequest};

class RequestAdapter extends SymfonyRequest
{
    protected $json;

    public function __construct()
    {
        parent::__construct($_GET, $_POST, [], $_COOKIE, $_FILES, $_SERVER);
    }

    public function exists($key): bool
    {
        return $this->has($key);
    }

    public function has($key): bool
    {
        $keys = is_array($key) ? $key : func_get_args();
        $input = $this->all();
        foreach ($keys as $value) {
            if (!Arr::has($input, $value)) {
                return false;
            }
        }

        return true;
    }

    public function all($keys = null): array
    {
        $input = array_replace_recursive($this->input(), $this->allFiles());
        if (!$keys) {
            return $input;
        }

        $results = [];
        foreach (is_array($keys) ? $keys : func_get_args() as $key) {
            Arr::set($results, $key, Arr::get($input, $key));
        }

        return $results;
    }

    public function input($key = null, $default = null)
    {
        return data_get(
            $this->getInputSource()->all() + $this->query->all(),
            $key,
            $default
        );
    }

    public function isJson(): bool
    {
        return Str::contains($this->header('Content-Type'), ['/json', '+json']);
    }

    public function json(string $key = null, $default = null)
    {
        if (!isset($this->json)) {
            $this->json = new ParameterBag((array)json_decode($this->getContent(), true));
        }

        if (is_null($key)) {
            return $this->json;
        }

        return data_get($this->json->all(), $key, $default);
    }

    protected function getInputSource()
    {
        if ($this->isJson()) {
            return $this->json();
        }

        return in_array($this->getRealMethod(), ['GET', 'HEAD']) ? $this->query : $this->request;
    }

    public function hasHeader(string $key): bool
    {
        return !is_null($this->header($key));
    }

    public function header(string $key = null, $default = null)
    {
        return $this->retrieveItem('headers', $key, $default);
    }

    public function allFiles(): array
    {
        return $this->files->all();
    }

    public function keys(): array
    {
        return array_merge(array_keys($this->input()), $this->files->keys());
    }

    public function except($keys): array
    {
        $keys = is_array($keys) ? $keys : func_get_args();
        $results = $this->all();
        Arr::forget($results, $keys);

        return $results;
    }

    public function hasFile(string $key): bool
    {
        if (!is_array($files = $this->file($key))) {
            $files = [$files];
        }

        foreach ($files as $file) {
            if ($this->isValidFile($file)) {
                return true;
            }
        }

        return false;
    }

    protected function isValidFile($file): bool
    {
        return $file instanceof SplFileInfo && $file->getPath() !== '';
    }

    public function file(string $key = null, $default = null)
    {
        return data_get($this->allFiles(), $key, $default);
    }

    public function method(): string
    {
        return $this->getMethod();
    }

    public function isGet(): bool
    {
        return $this->method() === 'GET';
    }

    public function isPost(): bool
    {
        return $this->method() === 'POST';
    }

    public function isPut(): bool
    {
        return $this->method() === 'PUT';
    }

    public function isDelete(): bool
    {
        return $this->method() === 'DELETE';
    }

    public function query(string $key = null, $default = null)
    {
        return $this->retrieveItem('query', $key, $default);
    }

    protected function retrieveItem(string $source, ?string $key, $default)
    {
        if (is_null($key)) {
            return $this->$source->all();
        }

        return $this->$source->get($key, $default);
    }

    public function url(): string
    {
        return rtrim(preg_replace('/\?.*/', '', $this->getUri()), '/');
    }

    public function fullUrl(): string
    {
        $query = $this->getQueryString();
        $question = $this->getBaseUrl() . $this->getPathInfo() == '/' ? '/?' : '?';

        return $query ? $this->url() . $question . $query : $this->url();
    }

    public function path(): string
    {
        $pattern = trim($this->getPathInfo(), '/');

        return $pattern == '' ? '/' : $pattern;
    }

    public function toArray(): array
    {
        return $this->all();
    }

    public function __isset($key)
    {
        return !is_null($this->__get($key));
    }

    public function __get($key)
    {
        if (array_key_exists($key, $this->all())) {
            return data_get($this->all(), $key);
        }
    }

    public function ajax(): bool
    {
        return $this->isXmlHttpRequest();
    }

    public function validate(array $rules, array $data = null)
    {
        $this->validation->rules($rules);
        $data = $data ?? $this->all();

        return $this->validation->isValid($data) ? $data : false;
    }

    public function errors(): array
    {
        return $this->validation->errors();
    }

    public function server(string $key = null, $default = null)
    {
        return $this->retrieveItem('server', $key, $default);
    }

    public function mimeType(string $format)
    {
        return $this->getMimeType($format);
    }

    public function requestUri()
    {
        return $this->getRequestUri();
    }
}

<?php

use app\core\facades\Uri;
use app\core\facades\Config;
use app\core\adapter\BladeViewAdapter;
use PhpStringHelpers\utility\StrUtility;
use app\exceptions\DataDoesNotExistException;
use app\exceptions\FileDoesNotExistException;
use app\exceptions\NotFoundHttpRequestException;
use Symfony\Component\HttpFoundation\RedirectResponse;

function checkFileExists(string $path): bool
{
    if (!file_exists($path) && !is_file($path))
        return false;
    return true;
}

function fetchArray(string $pathFile)
{
    if (!checkFileExists($pathFile))
        throw new FileDoesNotExistException($pathFile . 'Does not exist');
    return include $pathFile;
}

function getArrayEl(string $key, array $array)
{
    if (!array_key_exists($key, $array))
        throw new DataDoesNotExistException($key . ' does not exist');

    return $array[$key] ?? null;
}

function config(string $config)
{
    return Config::get($config);
}

function lang(string $key, string $replace = '', string $dirName = 'en')
{
    return StrUtility::translate($key, $replace, $dirName);
}

function dispatch405()
{
    header("HTTP/1.0 405 Method Not Allowed");
    echo '405 Method Not Allowed';
    die();
}

function dispatch404(): never
{
    header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
    die();
}

function view(string $path, array $data = [])
{
    (new BladeViewAdapter)->display($path, $data);
}

function route(string $name, array $params = [], $secure = false): string
{
    return Uri::route($name, $params, $secure);
}

function redirect(string $url, int $status = 302, array $headers = []): RedirectResponse
{
    return new RedirectResponse(route($url), $status, $headers);
}

function abort404($message = null)
{
    throw new NotFoundHttpRequestException($message);
}

function routeCachePath(): string
{
    return CACHE_PATH . 'router/routeCache.php';
}

function asset(string $path)
{
    $path = BASE_URL . '/' . $path;
    if (!checkAssetExists($path))
        throw new FileDoesNotExistException($path . 'Does not exist');
    return $path;
}

function checkAssetExists(string $path): bool
{
    if (!checkFileExists($path) && !isValidAssetUrl($path))
        return false;
    return true;
}

function isValidAssetUrl(string $path): bool
{
	if (filter_var($path, FILTER_VALIDATE_URL) === false)
		return false;
	return true;
}

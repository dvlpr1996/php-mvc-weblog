<?php

use app\core\facades\Config;
use app\core\adapter\BladeViewAdapter;
use PhpStringHelpers\utility\StrUtility;
use app\exceptions\DataDoesNotExistException;
use app\exceptions\FileDoesNotExistException;

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

function route(string $routeName, array $parameter = [])
{
	$route = getRoute($routeName);

	if (!empty($parameter['id']) && empty($parameter['slug'])) {
		return BASE_URL . str_replace(':id', $parameter['id'], $route);
	}

	if (empty($parameter['id']) && !empty($parameter['slug'])) {
		return BASE_URL . str_replace(':slug', $parameter['slug'], $route);
	}

	if (!empty($parameter['slug']) && !empty($parameter['id'])) {
		return BASE_URL . str_replace([':slug', ':id'], [$parameter['slug'], $parameter['id']], $route);
	}

	return BASE_URL . $route;
}

function getRoute(string $routeName)
{
	global $router;
	$routers = $router->getAllRoutes();
	foreach ($routers as $key => $value) {
		if ($value['name'] === $routeName){
			$route = $value['route'];
		}
	}
	return $route;
}

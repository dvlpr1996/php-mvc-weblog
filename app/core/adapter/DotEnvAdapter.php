<?php

namespace app\core\adapter;

use Dotenv\Dotenv;

class DotEnvAdapter
{
	private $dotenv;

	public function __construct()
	{
		$this->dotenv = Dotenv::createImmutable(BASE_APP_PATH);
	}

	public function loadDotEnv(string $loadType)
	{
		$this->dotenv->$loadType();
	}

	public function requiredElement()
	{
		$this->loadDotEnv("safeLoad");

		$this->dotenv->required('SITE_TITLE')->notEmpty();
		$this->dotenv->required('BASE_URL')->notEmpty();
		$this->dotenv->required('BASE_PATH')->notEmpty();
		$this->dotenv->required('ROUTER_DEBUG')->notEmpty();
		$this->dotenv->required('DISPLAY_ERRORS')->notEmpty();
		$this->dotenv->required('DISPLAY_STARTUP_ERRORS')->notEmpty();
		$this->dotenv->required('ERROR_REPORTING')->notEmpty();
		$this->dotenv->required('CACHE_TEMPLATE')->notEmpty();
		$this->dotenv->required('APP_NAME')->notEmpty();
		$this->dotenv->required('HOST')->notEmpty();
		$this->dotenv->required('DATABASE')->notEmpty();
		$this->dotenv->required('USERNAME')->notEmpty();
		$this->dotenv->required('CHARSET')->notEmpty();
		$this->dotenv->required('COLLATION')->notEmpty();
	}
}

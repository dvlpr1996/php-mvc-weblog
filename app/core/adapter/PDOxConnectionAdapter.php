<?php

namespace app\core\adapter;

use Buki\Pdox;

class PDOxConnectionAdapter
{
	private $pdoConnection;
	private $pdoConnectionConfig;

	public function __construct()
	{
		$this->pdoConnectionConfig = config('database');
		$this->pdoConnection = new Pdox($this->pdoConnectionConfig);
	}

	protected function db()
	{
		return $this->pdoConnection;
	}
}

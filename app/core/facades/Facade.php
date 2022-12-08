<?php

namespace app\core\facades;

class Facade
{
	protected static $getFacadeName;

	public static function __callStatic($name, $arguments)
	{
		$instance = new static::$getFacadeName;
		return $instance->$name(...$arguments);
	}
}

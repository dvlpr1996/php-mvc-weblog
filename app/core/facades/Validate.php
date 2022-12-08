<?php

namespace app\core\facades;

use app\core\facades\Facade;

class Validate extends Facade
{
	protected static $getFacadeName = '\app\core\adapter\ValidatorAdapter';
}

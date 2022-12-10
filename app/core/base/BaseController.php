<?php

namespace app\core\base;

use Buki\Router\Http\Controller;
use app\core\traits\ControllerModelHandler;

class BaseController extends Controller
{
	use ControllerModelHandler;
}

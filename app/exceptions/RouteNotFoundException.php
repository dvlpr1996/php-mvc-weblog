<?PHP

namespace app\exceptions;

use Exception;

class RouteNotFoundException extends Exception
{
	public function __construct(string $message, int $statusCode = 500)
	{
		parent::__construct($message, $statusCode);
	}
}
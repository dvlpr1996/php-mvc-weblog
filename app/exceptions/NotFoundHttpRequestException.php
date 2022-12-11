<?php

namespace app\exceptions;

use Exception;

class NotFoundHttpRequestException extends Exception
{
    public function __construct(string $message, int $statusCode = 404)
    {
        parent::__construct($message, $statusCode);
    }
}

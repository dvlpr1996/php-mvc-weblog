<?php

namespace app\validation;

use app\validation\ValidatorInterface;

class test implements ValidatorInterface
{
	public function validateRules(): array
	{
		return [
			'fname' => 'required|alpha',
			'lname' => 'required|alpha',
		];
	}
}

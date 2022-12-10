<?php

namespace app\core\contract;

interface ValidatorInterface
{
	public function validateRules(): array;
}

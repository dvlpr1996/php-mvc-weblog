<?php

namespace app\utilities;

use PhpStringHelpers\utility\StrUtility;

class Config
{
	private const CONFIG_PATH = 'config';

	public function get(string $config)
	{
		$config = explode(".", $config);
		$configFilePath = $this->configFilePath($config[0]);

		if (count($config) === 1)
			return fetchArray($configFilePath);

		$arrayValue = $this->getArrayValue($config[1], $config[0]) ??
			throw new \Exception($config[1] . ' has no value');

		return $arrayValue;
	}

	private function configFilePath(string $configPath): string
	{
		return StrUtility::filePath(self::CONFIG_PATH . '.' . $configPath);
	}

	private function getArrayValue($key, $array)
	{
		return getArrayEl($key, fetchArray($this->configFilePath($array)));
	}

	public function gets() {

	}
}

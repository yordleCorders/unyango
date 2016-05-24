<?php

namespace Source\Parser;

use Source\Exception\InvalidException as Exception;

class ConfigParser
{
	protected $protected = true;

	public static function load($path, $file = '.env')
	{
		if (!is_string($file)) {
			$file = '.env';
		}

		$filePath = rtrim($path, '/').'/'.$file;

		if (!is_readable($filePath) || !is_file($filePath)) {
			$exception = 'Invalid Argument Exception';

			return Exception::setException($exception)
				   				   ->setMessage('ClassParser .env file cannot be found')
				   				   ->respondException();
		}

		return $filePath;
 	}
}
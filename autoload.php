<?php

class Autoloader
{
	public static function load($class)
	{
		$classPath = './' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

		if(is_file($classPath))
		{
			require_once($classPath);
			return true;
		}
	}
}

spl_autoload_register(array('Autoloader', 'load'));
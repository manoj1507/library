<?php

namespace AvgiSolutions\Core\Utility;

use AvgiSolutions\Core\Module;

class Validate
{

	/**
	 * Validates if the class exists in this project.
	 *
	 * @param string $class The Class to Check.
	 *
	 * @return boolean
	 */
	public static function classExists($class)
	{
		return class_exists($class);
	}

	/**
	 * Validates if the class exists in this project.
	 *
	 * @param string $className The Class Name to Check.
	 * @param string $module    The Module to Check.
	 *
	 * @return boolean
	 */
	public static function moduleHasClass($className, $module)
	{
		return class_exists(Module::getClass($className, $module));
	}

	/**
	 * Validates if the class has method.
	 *
	 * @param string $class  The Class Name.
	 * @param string $method The Method Name.
	 *
	 * @return boolean
	 */
	public static function classHasMethod($class, $method)
	{
		return method_exists($class, $method);
	}

}

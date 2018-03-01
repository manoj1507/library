<?php

namespace AvgiSolutions\Core\Utility;

class Inflector
{
	/**
	 * Converts a underscore separated name to class name equivalent.
	 *
	 * @param string $string The string to convert.
	 *
	 * @return string
	 */
	public static function classify($string)
	{
		return implode('', array_map('ucfirst', explode('_', trim($string))));
	}

	/**
	 * Converts a underscore separated name to camelCase equivalent.
	 *
	 * @param string $string The string to convert.
	 *
	 * @return string
	 */
	public static function camelize($string)
	{
		return lcfirst(self::classify($string));
	}

}
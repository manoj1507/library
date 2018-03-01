<?php

namespace AvgiSolutions\Core;

class Module
{
	const CONTROLLER = 'Controller';
	const MODEL      = 'Model';

	/**
	 * Gives back the namespaced class.
	 *
	 * @param string $module    The Module to Check.
	 * @param string $className The Class Name to Check.
	 *
	 * @return string
	 */
	public static function getClass($className, $module = self::MODEL)
	{
		return sprintf('AvgiSolutions\\%s\\%s', $module, $className);
	}
}

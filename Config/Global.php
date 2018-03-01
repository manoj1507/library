<?php

function path(array $link)
{
	return implode(DS, $link);
}

function pr($string)
{
	echo '<pre>';
	print_r($string);
	echo '</pre>';
}

function setDebug($level = 1)
{
	error_reporting(E_ERROR);
	set_time_limit(0);
	ini_set('display_errors', $level);
}

if (!\Illuminate\Support\Arr::hasMacro('getNotEmpty')) {
	\Illuminate\Support\Arr::macro('getNotEmpty', function ($array, $key, $default = null) {
		if (!static::accessible($array)) {
			return value($default);
		}

		if ($key === null) {
			return $array;
		}

		if (static::exists($array, $key) && !empty($array[$key])) {
			return $array[$key];
		}

		foreach (explode('.', $key) as $segment) {
			if (static::accessible($array) && static::exists($array, $segment) && !empty($array[$segment])) {
				$array = $array[$segment];
			} else {
				return value($default);
			}
		}

		return $array;
	});
}//end if

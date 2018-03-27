<?php

namespace Config;

abstract class Database
{

	const MAIN = 0;
	const TEST = 1;

	const ALL = [
		self::MAIN => [
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'libms',
			'username'  => 'root',
			'password'  => 'admin',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		],
		/*self::TEST => [
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'test_student_registration',
			'username'  => 'root',
			'password'  => 'admin',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		],*/
	];

}

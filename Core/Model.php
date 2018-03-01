<?php

namespace AvgiSolutions\Core;

use AvgiSolutions\Config\Database;
use Illuminate\Database\Capsule\Manager as DatabaseManager;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
	/**
	 * The database manager object.
	 *
	 * @var Illuminate\Database\Capsule\Manager
	 */
	private static $databaseManager;

	/**
	 * The class constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		if (!empty(self::$databaseManager)) {
			return true;
		}

		self::$databaseManager = (new DatabaseManager);
		self::$databaseManager->addConnection(Database::ALL[USE_CONNECTION]);
		self::$databaseManager->bootEloquent();
	}

}

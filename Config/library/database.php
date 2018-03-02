<?php

 
class DBconfig
{
    var $connection;
	
	public function __construct()
	{
		$this->hostname = $GLOBALS['ep_hostname'];
		$this->username = $GLOBALS['ep_username']; 
		$this->password = $GLOBALS['ep_password'];
		$this->database = $GLOBALS['ep_database'];
	}

    function connectToDatabase()
    {
		$connection = new mysqli($this->hostname,$this->username,$this->password,$this->database);
		
        if($connection->connect_errno > 0)
        {
            die ("Cannot connect to the database, please check database settings.");
        }

        else
        {
            $this->connection = $connection;
        }

        return $this->connection;

    }

}
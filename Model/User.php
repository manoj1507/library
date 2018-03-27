<?php

namespace AvgiSolutions\Model;

class User_model implements AppModel, DBconfig {
	
	public function __construct() {

		$connection = new DBconfig();  
		$this->connection = $connection->connectToDatabase();
		$this->helper = new helper(); 
	}
	  
	public function getAllUsers() {
		//Ex: $result = $this->helper->db_select("column_selector", "table_name", "where conditions");
		$result = $this->helper->db_select("*", "users", "");
		return $result;
	}
	
	public function insertUser($data, $table) {	
		//Ex: $result = $this->helper->db_insert("post Or get_data_array", "table_name");	
		$result = $this->helper->db_insert($data, $table);
		return $result;
	}
	
	public function updateUser($data, $table, $id) {		
		//Ex: $result = $this->helper->db_update("post Or get_data_array", "table_name", "where_conditions");
		$result = $this->helper->db_update($data, $table, "WHERE id='$id'");
		return $result;
	}
	
	public function getUserById($id) {		
		$resultRaw = $this->helper->db_select("*", "users", "WHERE id='$id'");
		$result = $resultRaw->fetch_assoc();
		return $result;
	}
	
}

?>

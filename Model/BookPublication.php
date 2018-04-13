<?php

namespace AvgiSolutions\Model;

class BookPublication extends AppModel
{


  public function register($data) {
		$final_data = array();
		$keys = array_keys($data);
		foreach($keys as $key) {
				$value = mysqli_real_escape_string($this->connection, $data[$key]);
				$final_data[$key] = $value;
			}
		$result = $this->helper->db_insert($final_data, "book_publications"); 
		return $result;
	}
	
	public function update($data) {
		$final_data = array();
		$keys = array_keys($data);
		$SessionId = $_SESSION["easyphp_sessionid"];
		$resultRaw = $this->helper->db_select("id", "sessions", "WHERE sessionid='$SessionId'");
		$session_array = $resultRaw->fetch_assoc();
		$id = $session_array['id'];
		foreach($keys as $key) {
				$value = mysqli_real_escape_string($this->connection, $data[$key]);
				$final_data[$key] = $value;
			}
		$result = $this->helper->db_update($final_data, "book_publications", "WHERE id='$id'"); 
		return $result;
	}
}


?>

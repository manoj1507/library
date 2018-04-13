<?php
namespace AvgiSolutions\Controller;

use AvgiSolutions\Model\Lease;


class Leases extends AppController
{

	public function __construct()
	  {
			$this->model = new AppModel(); 
	  }
	  
	public function index() {
		if(isset($_SESSION["easyphp_sessionid"])) {
			$ifSessionExists = $this->model->checksession($_SESSION["easyphp_sessionid"]);
			if($ifSessionExists) {
				header("Location: ".$GLOBALS['ep_dynamic_url']."dashboard");
				die();
			}
		}
		else if(isset($_COOKIE['tutbuzzeasyphpsessionid'])) {
			$ifCookieExists = $this->model->checksession($_COOKIE['tutbuzzeasyphpsessionid']);
			if($ifCookieExists) {
				$_SESSION["easyphp_sessionid"] = $_COOKIE['tutbuzzeasyphpsessionid'];
				header("Location: ".$GLOBALS['ep_dynamic_url']."dashboard");
				die();
			}
		}
		else {
			$_SESSION["easyphp_sessionid"] = "";
		}
		if(isset($_GET['redirecturl'])) {
			$_SESSION['redirecturl'] = $_GET['redirecturl'];
		}
		if (!empty($_POST)) {
			$data['post'] = $_POST; 
			$student_user_id = $_POST['student_user_id'];
			$leased_librarian_user_id = $_POST['leased_librarian_user_id'];
			$received_librarian_user_id = $_POST['received_librarian_user_id'];
			$book_id = $_POST['book_id'];
			$lease_id = $_POST['lease_id'];
			$returned_id = $_POST['returned_id'];

			$student_user_id = strip_tags($student_user_id);
			$leased_librarian_user_id = strip_tags($leased_librarian_user_id);
			$received_librarian_user_id = strip_tags($received_librarian_user_id);
			$book_id = strip_tags($book_id);
			$lease_id = strip_tags($lease_id);
			$returned_id = strip_tags($returned_id);
			
			$result = $this->model->Lease($student_user_id, $leased_librarian_user_id, $received_librarian_user_id, $book_id, $lease_id, $returned_id);
			if($result) {
				if(isset($_SESSION['redirecturl'])) {
					header("Location: ".$_SESSION['redirecturl']);
					die();
				}
				else {
					header("Location: ".$GLOBALS['ep_dynamic_url']."dashboard");
					die();
				}
			}
			
		}
		$data['ep_title'] = "Leases"; 
		$data['view_page'] = "/ViewLeases/ViewLeases.php"; 
		$data['ep_header'] = $GLOBALS['ep_header']; 
		$data['ep_footer'] = $GLOBALS['ep_footer']; 
		return $data;
	}

}
?>
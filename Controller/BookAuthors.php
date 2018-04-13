<?php
namespace AvgiSolutions\Controller;

use AvgiSolutions\Model\BookAuthor;


class BookAuthors extends AppController
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
			$book_id = $_POST['book_id'];
			$author_id = $_POST['author_id'];
			
			$book_id = strip_tags($book_id);
			$author_id = strip_tags($author_id);
			
			$result = $this->model->BookAuthor($book_id, $author_id);
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
		$data['ep_title'] = "BookAuthor"; 
		$data['view_page'] = "View/BookAuthors/ViewBookAuthors.php"; 
		$data['ep_header'] = $GLOBALS['ep_header']; 
		$data['ep_footer'] = $GLOBALS['ep_footer']; 
		return $data;
	}

}
?>
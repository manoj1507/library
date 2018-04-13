<?php
namespace AvgiSolutions\Controller;

use AvgiSolutions\Model\Book;


class Books extends AppController
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
			$isbn = $_POST['isbn'];
			$name = $_POST['name'];
			$edition = $_POST['edition'];
			$is_downloadable = $_POST['is_downloadable'];

			$isbn = strip_tags($isbn);
			$name = strip_tags($name);
			$edition = strip_tags($edition);
			$is_downloadable = strip_tags($is_downloadable);
			
			$result = $this->model->Book($isbn, $name, $edition, $is_downloadable);
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
		$data['ep_title'] = "Books"; 
		$data['view_page'] = "View/Books/AddBooks.php"; 
		$data['ep_header'] = $GLOBALS['ep_header']; 
		$data['ep_footer'] = $GLOBALS['ep_footer']; 
		return $data;
	}

}
?>
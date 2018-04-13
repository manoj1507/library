<?php
namespace AvgiSolutions\Controller;

use AvgiSolutions\Model\BookPublication;


class BookPublications extends AppController
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
			$publication_id = $_POST['publication_id'];
			$price = $_POST['price'];
			$release_date = $_POST['release_date'];
			$image_path = $_POST['image_path'];
			$stock = $_POST['stock'];

			$book_id = strip_tags($book_id);
			$publication_id = strip_tags($publication_id);
			$price = strip_tags($price);
			$release_date = strip_tags($release_date);
			$image_path = strip_tags($image_path);
			$stock = strip_tags($stock);
			
			$result = $this->model->BookPublication($book_id, $publication_id, $price, $release_date, $image_path, $stock);
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
		$data['ep_title'] = "BookPublications"; 
		$data['view_page'] = "View/BookPublications/ViewBookPublications.php"; 
		$data['ep_header'] = $GLOBALS['ep_header']; 
		$data['ep_footer'] = $GLOBALS['ep_footer']; 
		return $data;
	}

}
?>
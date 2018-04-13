<?php
namespace AvgiSolutions\Controller;

use AvgiSolutions\Model\Publication;


class Publications extends AppController
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
			$name = $_POST['name'];
			$address_line_1 = $_POST['address_line_1'];
			$address_line_2 = $_POST['address_line_2'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$country = $_POST['country'];
			$pincode = $_POST ['pincode'];
			$status = $_POST['status'];

			$name = strip_tags($name);
			$address_line_1 = strip_tags($address_line_1);
			$address_line_2 = strip_tags($address_line_2);
			$city = strip_tags($city);
			$state = strip_tags($state);
			$country  = strip_tags($country);
			$pincode = strip_tags($pincode);
			$status = strip_tags($status);
			

			$result = $this->model->Publication($name, $address_line_1, $address_line_2, $city, $state, $country, $pincode, $status);
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
		$data['ep_title'] = "Publications"; 
		$data['view_page'] = "View/Publications/ViewPublications.php"; 
		$data['ep_header'] = $GLOBALS['ep_header']; 
		$data['ep_footer'] = $GLOBALS['ep_footer']; 
		return $data;
	}

}
?>
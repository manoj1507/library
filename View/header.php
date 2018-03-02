<?php
function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title> <?php echo $ep_title; ?> </title>
		
		<link rel="stylesheet" type="text/css" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
		<script type="text/javascript" src="node_modules\jquery\dist\jquery.min.js"></script>
		<script type="text/javascript" src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>

		<link  rel="stylesheet" href="<?php echo $GLOBALS['ep_base_url']; ?>css\bootstrap.min.css"  />
		<link  rel="stylesheet" href="<?php echo $GLOBALS['ep_base_url']; ?>css\bootstrap.min.css"  />
		<script type="text/javascript" src="<?php echo $GLOBALS['ep_base_url']; ?>view/js/jquery-1.11.3.js"></script>
		<script type="text/javascript" src="<?php echo $GLOBALS['ep_base_url']; ?>view/js/jquery-migrate-1.2.1.js"></script>
		<script type="text/javascript" src="<?php echo $GLOBALS['ep_base_url']; ?>view/js/materialize.js"></script>
		<link rel="shortcut icon" href="<?php echo $GLOBALS['ep_base_url']; ?>view/images/favicon.png" type="image/x-icon" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<link rel="stylesheet" href="<?php echo $GLOBALS['ep_base_url']; ?>view/css/deletethis.css">
		<script src="<?php echo $GLOBALS['ep_base_url']; ?>view/js/deletethis.js"></script>
	</head>
	<body>
		
    
		
			
			<div class="wrapper"> 
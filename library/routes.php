<?php 

 
/**
 * Important variables
 *
 * $controller - Gets first value after slash from URL - Also calls Contoller when value is set
 * $func - Gets second value after slash from URL - Also calls method inside the class when value is set
 * $params - Gets all other values in array - Also supplies as arguemnts to functions
 */

 

 
$helper = new helper();
$check = $helper->check("users", "where username='$controller'");
if($check) {
	$GLOBALS['user'] = $controller;
	$controller = "profile"; 
	$func = "index";
 }	
?>
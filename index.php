<?php
if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

require_once 'Config' . DS . 'Bootstrap.php';
setDebug(DEBUG);

(new \AvgiSolutions\Core\Request)->dispatch();

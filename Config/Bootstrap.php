<?php

define('PROJECT_PATH', dirname(dirname(__FILE__)));
require_once implode(DS, [PROJECT_PATH, 'Vendor', 'autoload.php']);
require_once 'Global.php';

define('HTTP_URL', sprintf('http://localhost/%s/', basename(dirname(dirname(__FILE__)))));
define('TMP', path([PROJECT_PATH, 'tmp']));
define('DEBUG', 1);
define('USE_CONNECTION', AvgiSolutions\Config\Database::MAIN);

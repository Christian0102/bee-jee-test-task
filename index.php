<?php
/*General Settings*/ 


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*Connection App Files*/

define('ROOT', dirname(__FILE__));

require_once(ROOT.'/components/Router.php');

$router = new Router();
$router->run();
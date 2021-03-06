<?php
/**Front Controller  */



/*General Settings*/ 


ini_set('display_errors', 1);

error_reporting(E_ALL);

/*Connection App Files*/
session_start();
define('ROOT', dirname(__FILE__));

require_once(ROOT.'/components/Router.php');

require_once(ROOT.'/components/Autoload.php');
require_once(ROOT.'/components/functions.php');

$router = new Router();
$router->run();

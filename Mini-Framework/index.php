<?php 

require 'vendor/autoload.php';
require 'core/bootstrap.php';

$router  = new Router();

require 'app/routes.php';
	
$router->direct(Request::uri(), Request::method());

?>
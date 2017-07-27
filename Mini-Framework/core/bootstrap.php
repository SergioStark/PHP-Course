<?php 
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require __DIR__ .'/../functions.php';
require 'Router.php';
require 'Request.php';
require __DIR__ .'/../Asignado.php';
require __DIR__ .'/../Tarea.php';

$app = array();
$app['config'] = require 'config.php';
$app['db'] = new QueryBuilder(
	Connection::make($app['config']['database'])
	);

?>
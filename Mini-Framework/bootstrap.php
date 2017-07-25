<?php 
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'functions.php';
require 'Asignado.php';
require 'Tarea.php';
$config = require 'config.php';
//$pdo = Connection::make();
//$query = new QueryBuilder($pdo);
return new QueryBuilder(
	Connection::make($config['database'])
	);

?>
<?php 
if (isset($_POST)) {

$parameters = array(
	'nombre' => $_POST['nombre'],
	'edad' => $_POST['edad']
	);

$app['db']->insert('usuario', $parameters);

header('Location: /');

}


?>
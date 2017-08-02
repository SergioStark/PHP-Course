<?php 

$usuarios = $app['db']->selectAll('usuario');

require __DIR__ . '/../views/inicio.view.php';

?>
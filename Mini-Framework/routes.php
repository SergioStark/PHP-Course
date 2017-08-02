<?php 

$router->get('', 'controllers/inicio.php');
$router->get('acerca', 'controllers/acerca.php');
$router->get('contacto', 'controllers/contacto.php');

$router->post('usuario', 'controllers/usuario.php');

?>
<?php 

$router->get('', 'WebController@inicio' );
$router->get('acerca', 'WebController@acerca');
$router->get('contacto', 'controllers/contacto.php');

$router->get('usuario', 'UsuarioController@mostrar');
$router->post('usuario', 'UsuarioController@guardar');

?>
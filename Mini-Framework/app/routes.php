<?php 

$router->get('', 'WebController@inicio' );
$router->get('acerca', 'WebController@acerca');
$router->get('contacto', 'WebController@contacto');

$router->get('usuario', 'UsuarioController@mostrar');
$router->post('usuario', 'UsuarioController@guardar');

?>
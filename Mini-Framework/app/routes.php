<?php 

$router->get('', 'ExampleController@index' );
$router->get('about', 'ExampleController@about');
$router->get('contact', 'ExampleController@contact');

$router->get('task', 'TaskController@show');
$router->post('task', 'TaskController@store');

?>
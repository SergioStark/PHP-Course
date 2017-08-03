<?php 

function dd($arreglo)
{
	echo '<pre>';
	var_dump($arreglo);
	echo'</pre>';
	die();
}

function view($name, $data=array())
{
	extract($data);
	return require __DIR__ . "/../app/views/{$name}.view.php";
}

function redirect($uri)
{
	header("Location: /{$uri}");
}


?>
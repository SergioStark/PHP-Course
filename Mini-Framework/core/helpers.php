<?php 

function dd($arreglo)
{
	echo '<pre>';
	var_dump($arreglo);
	echo'</pre>';
	die();
}


function view($name)
{
	return require __DIR__ . "views/{$name}.view.php"
}

function redirect()
{

}


?>
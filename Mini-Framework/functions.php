<?php 

function dd($arreglo)
{
	echo '<pre>';
	var_dump($arreglo);
	echo'</pre>';
	die();
}

function suma($a, $b)
{
	return $a + $b;
}

?>
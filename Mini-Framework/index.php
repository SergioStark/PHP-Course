<?php 
	//ARREGLOS
	$nombres = array(
		'Alejandro',
		'Luis',
		'David'
		);

	$animales = [
		'Perro',
		'Gato',
		'Leon'
		];

	//Traer un elemento en especifico
	$dato = $animales[1];		

	//Exite un elemento?
	$respuesta = in_array('Sergio', $nombres);
	if ($respuesta == 1) {
		$respuesta2 = "Si";
	} else {
		//if ($respuesta === 0) {
			$respuesta2 = "No";
		//}
	}

	//Eliminar un elemento
	unset($nombres[1]);


//ARREGLOS ASOCIATIVOS


require 'index.view.php';

?>
<?php 
//ARREGLOS ASOCIATIVOS
//Funcionan con datos llave -> valor
//Las llaves deben ser unicas
$persona = array(
	'Nombre' => 'Sergio',
	'Edad' => '18',
	'Direccion' => 'Av Chapultepec'
	);

//Eliminar
unset($persona['Direccion']);

//Actualizar
$persona['Edad'] = 60;

//Agregar
$persona['Telefono'] = '12345';


//ARREGLOS ANIDADOS
$tarea1 = array(
	'Tarea' => 'Terminar el código',
	'Asignado' => 'Alejandro',
	'Fecha' => '25 Jul 2017'
	);

$tarea2 = array(
	'Tarea' => 'Revisar el código',
	'Asignado' => 'Alejandro',
	'Fecha' => '30 Jul 2017'
	);

$tareas = array(
	$tarea1,
	$tarea2,
	array(
		'Tarea' => 'Subir el codigo',
		'Asignado' => 'David',
		'Fecha' => '31 Jul 2017'
		)
	);








require 'index.view.php';

?>
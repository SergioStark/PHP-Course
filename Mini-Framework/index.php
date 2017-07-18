<?php 

$tarea1 = array(
	'tarea' => 'Terminar el código',
	'asignado' => 'Alejandro',
	'fecha' => '25 Jul 2017',
	'completado' => false
	);

$tarea2 = array(
	'tarea' => 'Revisar el código',
	'asignado' => 'Alejandro',
	'fecha' => '30 Jul 2017',
	'completado' => true
	);

$tareas = array(
	$tarea1,
	$tarea2,
	array(
		'tarea' => 'Subir el codigo',
		'asignado' => 'David',
		'fecha' => '31 Jul 2017',
		'completado' => false
		)
	);








require 'index.view.php';

?>
<?php 

require 'functions.php';
require 'Tarea.php';
require 'Asignado.php';

$pdo = conectarDB();
$tareas = listaTareas($pdo);
$asignados = listaAsignado($pdo);
//dd($tareas);
/*echo $tareas[0]->getId() ."<br>";
echo $tareas[0]->getDescripcion()."<br>";
echo $tareas[0]->getAsignado()."<br>";
echo $tareas[0]->getCompletado()."<br>";
echo $tareas[0]->getFecha()."<br>";*/


require 'index.view.php';

/*
1. Crear una tabla de "Asignado" dentro de "Tareas"
	- id
	- nombre
	- puesto
2. Crear la clase "Asignado"
	- metodos getters y setters
3. En el index view
	- TAREAS
	- ASIGNADO	

*/

?>
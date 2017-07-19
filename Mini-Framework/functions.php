<?php 

function conectarDB()
{
	try {
		$pdo = new PDO('mysql:host=127.0.0.1;dbname=tareas','root','');	
		return $pdo;
	} catch (PDOException $e) {
			dd($e->getMessage());
	}

}

function listaTareas($base)
{
	$sentencia = $base->prepare('SELECT * FROM tarea');
	$sentencia->execute();
	$tareas = $sentencia->fetchAll();
	return $tareas;
}

function listaTareasCompletadas($base)
{
	$sentencia = $base->prepare('SELECT * FROM tarea WHERE completado = true');
	$sentencia->execute();
	$tareas = $sentencia->fetchAll();
	return $tareas;
}

function dd($arreglo)
{
	echo '<pre>';
	var_dump($arreglo);
	echo'</pre>';
	die();
}

?>
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
	$tareas = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Tarea');
	return $tareas;
}

function listaTareasCompletadas($base)
{
	$sentencia = $base->prepare('SELECT * FROM tarea WHERE completado = true');
	$sentencia->execute();
	$tareas = $sentencia->fetchAll(PDO::FETCH_CLASS,'Tarea');
	return $tareas;
}

function listaAsignado($base)
{
	$sentencia = $base->prepare('SELECT * FROM asignado');
	$sentencia->execute();
	$asignado = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Asignado');
	return $asignado;
}

function dd($arreglo)
{
	echo '<pre>';
	var_dump($arreglo);
	echo'</pre>';
	die();
}

?>
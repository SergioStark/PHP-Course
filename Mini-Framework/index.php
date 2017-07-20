<?php 

require 'functions.php';
require 'Tarea.php';

//$pdo = conectarDB();
//$tareas = listaTareasCompletadas($pdo);

$tarea1 = new Tarea();
$tarea2 = new Tarea();

$tarea1->setId(1);
$tarea1->setDescripcion("Ir al supermercado");
$tarea1->setAsignado("Alejandro");
$tarea1->setCompletado(0);
$tarea1->setFecha("2017-08-20");

$tarea2->setId(2);
$tarea2->setDescripcion("Comprar pan");
$tarea2->setAsignado("Luis");
$tarea2->setCompletado(0);
$tarea2->setFecha("2017-08-20");

echo $tarea1->getId() . "<br>";
echo $tarea1->getDescripcion() . "<br>";
echo $tarea1->getAsignado() . "<br>";
echo $tarea1->getCompletado() . "<br>";
echo $tarea1->getFecha() . "<br>";

echo $tarea2->getId() . "<br>";
echo $tarea2->getDescripcion() . "<br>";
echo $tarea2->getAsignado() . "<br>";
echo $tarea2->getCompletado() . "<br>";
echo $tarea2->getFecha() . "<br>";

/*-----------------------------------------*/

echo $tarea1->getDescripcion() . "<br>";
echo $tarea2->getDescripcion() . "<br>";

$tarea1->setDescripcion("Ir al supermarket ;)");
$tarea2->setDescripcion("Comprar pan");

echo $tarea1->getDescripcion() . "<br>";
echo $tarea2->getDescripcion();

$tarea1->setAsignado("Sergio");
$tarea2->setAsignado("Luis");

echo $tarea1->getAsignado() . "<br>";
echo $tarea2->getAsignado() . "<br>";

//require 'index.view.php';

?>
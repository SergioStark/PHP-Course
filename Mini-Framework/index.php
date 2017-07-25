<?php 
$query = require 'bootstrap.php';

$tareas = $query->selectAll('tarea', 'Tarea');
$asignados = $query->selectAll('asignado','Asignado');

require 'index.view.php';

?>
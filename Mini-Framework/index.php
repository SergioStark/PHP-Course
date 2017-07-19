<?php 

require 'functions.php';

$pdo = conectarDB();
$tareas = listaTareasCompletadas($pdo);



require 'index.view.php';

?>
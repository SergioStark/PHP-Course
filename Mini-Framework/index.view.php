<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mini Framework PHP</title>
	<style>
		header{
			background: #e3e3e3;
			padding: 2em;
			text-align: center;					
		}	

		h2 {
			color: green;
			padding-left: 2em;
			padding-top: 2em;
		}

		li {
			color: blue;
		}	
	</style>
</head>
<body>
	<header>
		<h1>Condicionales</h1>
	</header>

	<main>
		<h2>Tareas</h2>
		<ul>
			<?php foreach ($tareas as $tarea): ?>
			<li>
				Tarea: <?= $tarea['tarea']; ?> <br>
				Asigando: <?= $tarea['asignado']; ?> <br>
				Fecha: <?= $tarea['fecha']; ?> <br>
				Completado: <?php if($tarea['completado'] === true): ?>
					Tarea Realizada
				<?php elseif($tarea['completado'] === false): ?>
					Tarea Incompleta
				<?php else: ?>
					No tiene valor asignado
				<?php endif; ?>
			
			</li>
			<?php endforeach; ?>
		</ul>
	</main>

	<footer>
		
	</footer>
</body>
</html>
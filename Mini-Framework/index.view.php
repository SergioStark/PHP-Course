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
		<h1>Arreglos</h1>
	</header>

	<main>
		<?php foreach ($persona as $llave => $valor) { ?>
			<p><?= $llave . ': ' . $valor  ?></p>
		<?php } ?> 
		
		<pre>
		<?php var_dump($tareas); ?>
		</pre>

		<h1>Tareas</h1>
		<ul>
		<?php foreach ($tareas as $tarea) { ?>
			<li>
			<p>Tarea: <?php echo $tarea['Tarea']; ?></p> 
			<p>Asignado: <?= $tarea['Asignado']; ?></p>
			<p> <?php echo $tarea['Fecha']; ?> </p>
			</li>
		<?php } ?>
		</ul>

	</main>

	<footer>
		
	</footer>
</body>
</html>
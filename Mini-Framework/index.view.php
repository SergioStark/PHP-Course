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
		<h2>Condicionales</h2>
	</header>

	<main>
		<ul>
			<?php foreach ($tareas as $tarea): ?>
			<li>
				<?= $tarea->getId(); ?>
				<?= $tarea->getDescripcion(); ?>
				<?= $tarea->getAsignado(); ?>
				<?= $tarea->getCompletado() ?>
				<?= $tarea->getFecha(); ?>
			</li>
		<?php endforeach; ?>	
	</ul>
		<ul>
			<?php foreach ($asignados as $asignado): ?>
			<li>
				<?=$asignado->getId(); ?>
				<?= $asignado->getNombre(); ?>
				<?= $asignado->getPuesto(); ?>
			</li>
		<?php endforeach; ?>	
	</ul>



</main>

<footer>

</footer>
</body>
</html>
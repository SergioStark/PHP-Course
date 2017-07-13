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
		<h2>Nombres:</h2>
		<ul>
		<?php foreach ($nombres as $nombre) { ?>
			<li><?= $nombre ?></li>
		<?php } ?>
		</ul>	

		<h2>Animales:</h2>
		<ol>
		<?php foreach ($animales as $animal) : ?>
			<li><?= $animal ?></li>
		<?php endforeach ?>		
		</ol>

		<p><?= $dato; ?></p>
		<p>¿Existe Sergio? <?php echo $respuesta2; ?></p>

	</main>

	<footer>
		
	</footer>
</body>
</html>
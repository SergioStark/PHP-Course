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
		
	</style>
</head>
<body>
	<header>

		<h1>
			<?php 
				echo $saludo . ' ' . $nombre;
			?>						
		</h1>
		<br>
		<?php echo $edad; ?>
		<br>
		
		<!-- Short tag -->
		<!--<?php //echo $variable ?> Es igual que escribir: <? //= $variable ?> -->
		<?= $edad; ?>

	</header>
</body>
</html>
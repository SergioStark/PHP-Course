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

		<?php 
			//Variable super global GET
			//http://mini-framework.com/?saludo=Hola&nombre=Sergio&edad=%3Ch1%3E18%3C/h1%3E
			$saludo = $_GET['saludo'];
			$nombre = $_GET['nombre'];
			$edad = $_GET['edad'];
		?>

		<h1>
			<?php 
				echo $saludo . ' ' . $nombre;
			?>						
		</h1>
		<br>
		<?php echo $edad; ?>

	</header>
</body>
</html>
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
			$saludo = "Hola mundo";
		?>

		<h1>
			<?php 
			#'Este es un saludo' no importa el valor de saludo
			echo "Este es un $saludo";

			#Concatenar variables
			echo 'Este es otro saludo' . $saludo;

			echo "Imprimiendo saludo: {$saludo}"
			?>			
		</h1>

	</header>
</body>
</html>
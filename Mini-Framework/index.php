<?php 

			//Variable super global GET
			//http://mini-framework.com/?saludo=Hola&nombre=Sergio&edad=%3Ch1%3E18%3C/h1%3E
			$saludo = $_GET['saludo'];
			$nombre = $_GET['nombre'];
			$edad = $_GET['edad'];


require 'index.view.php';

?>
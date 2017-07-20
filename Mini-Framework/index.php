<?php 

require 'functions.php';

//$pdo = conectarDB();
//$tareas = listaTareasCompletadas($pdo);

class Tarea {
	// Variables - Atributos
	private $id;
	private $descripcion;
	private $asignado;
	private $completado;
	private $fecha;

	//Funciones - Metodos

	public function verAsignado()
	{
		echo "El asignado es: " . $this->asignado;
	}

	public function verFecha()
	{
		echo "La fecha limite es: " . $this->fecha;
	}

	public function setDescripcion($valor)
	{
		$this->descripcion = $valor;
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}

	public function setAsignado($valor)
	{
		$this->asignado = $valor;
	}

	public function getAsignado()
	{
		return $this->asignado;
	}
}

$tarea1 = new Tarea();
$tarea2 = new Tarea();

//echo $tarea1->descripcion . "<br>"; //flechita significa que estoy accediendo a un atributo de una clase
//echo $tarea2->descripcion . "<br>";

echo $tarea1->getDescripcion() . "<br>";
echo $tarea2->getDescripcion() . "<br>";

//$tarea1->descripcion = "Ir al supermercado";
$tarea1->setDescripcion("Ir al supermarket ;)");
$tarea2->setDescripcion("Comprar pan");

//echo $tarea1->descripcion . "<br>";
//echo $tarea2->descripcion;

echo $tarea1->getDescripcion() . "<br>";
echo $tarea2->getDescripcion();

//$tarea1->asignado = "Sergio";
//$tarea2->asignado = "Luis";
$tarea1->setAsignado("Sergio");
$tarea2->setAsignado("Luis");

//echo $tarea1->verAsignado() . "<br>";
//echo $tarea2->verAsignado() . "<br>";

echo $tarea1->getAsignado() . "<br>";
echo $tarea2->getAsignado() . "<br>";

//require 'index.view.php';

?>
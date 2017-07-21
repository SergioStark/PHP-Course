<?php 

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

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setDescripcion($descripcion)
	{
		$this->descripcion = $descripcion;
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}

	public function setAsignado($asignado)
	{
		$this->asignado = $asignado;
	}

	public function getAsignado()
	{
		return $this->asignado;
	}

	public function setCompletado($completado)
	{
		$this->completado = $completado;
	}

	public function getCompletado()
	{
		return $this->completado;
	}

	public function setFecha($fecha)
	{
		$this->fecha = $fecha;
	}

	public function getFecha()
	{
		return $this->fecha;
	}
}

?>
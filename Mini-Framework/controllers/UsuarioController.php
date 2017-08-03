<?php 

class UsuarioController
{
	public function guardar()
	{
		if (isset($_POST)) {

		$parameters = array(
			'nombre' => $_POST['nombre'],
			'edad' => $_POST['edad']
			);

		App::get('db')->insert('usuario',$parameters);

		header('Location: /');

		}		
	}

	public function mostrar()
	{
		$usuarios = App::get('db')->selectAll('usuario');
		require __DIR__ . '/../views/usuario.view.php';
	}
}

?>
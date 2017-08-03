<?php 

class Router
{
	private $routes = array(
		'GET' => array(),
		'POST' => array()
		);


	public static function load($file)
	{
		$router = new static;
		require $file;
		return $router;
	}

	public function direct($uri, $method)
	{
		if(array_key_exists($uri, $this->routes[$method])) {
			$data = explode('@', $this->routes[$method][$uri]); //separa una cadena por un separador de arroba
			return $this->callAction($data[0], $data[1]);
		}
		throw new Exception("No exite la ruta");
	}

	public function get($uri, $controller){
		$this->routes['GET'][$uri] = $controller;

	}

	public function post($uri, $controller){
		$this->routes['POST'][$uri] = $controller;
	}

	private function callAction($controller, $action)
	{
		$controller = new $controller;
		//$controller = new WebController
		if (method_exists($controller, $action)) {
			return $controller->$action();
		}
		throw new Exception("No existe el metodo");
		
	}
}

?>
<?php 

class Router
{
	private $routes = array(
		'GET' => array(),
		'POST' => array()
		);



	public function direct($uri, $method)
	{
		if(array_key_exists($uri, $this->routes[$method])) {
			return $this->routes[$method][$uri];
		}
		throw new Exception("No exite la ruta");
	}

	public function get($uri, $controller){
		$this->routes['GET'][$uri] = $controller;

	}

	public function post($uri, $controller){
		$this->routes['POST'][$uri] = $controller;
	}
}

?>
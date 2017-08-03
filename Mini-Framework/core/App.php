<?php 
	//DEPENDENCY INJECTION / DI
	class App 
	{
		private static $dependency = array();


		public static function bind($key, $value)
		{
			static::$dependency[$key] = $value;
		}

		public static function get($key)
		{
			if (array_key_exists($key, static::$dependency)) {
			return static::$dependency[$key];
			}
			throw new Exception("No existe la llave en el arreglo");
			

		}
	}


 ?>
<?php 

class Connection
{
	public static function make($config) 
	{
		//'mysql:host=127.0.0.1;dbname=tareas','root',''
			try {
				$pdo = new PDO(
					$config['type'] . ':host=' . $config['host'] . ';' . 'dbname=' . $config['name'], 
					$config['user'], 
					$config['pass'],
					array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) 
					);	
				return $pdo;
			} catch (PDOException $e) {
				dd($e->getMessage());
			}
	}
}

?>
<!--
Static 

$conn = new Connection();
$conn->make(); - Objeto

$Connection::make(); - Clase
 -->
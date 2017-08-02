<?php 

class QueryBuilder
{
	private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectALL($table)
	{
		$sentencia = $this->pdo->prepare("SELECT * FROM {$table}");
		$sentencia->execute();
		return $sentencia->fetchAll(PDO::FETCH_CLASS);	
	}

	public function insert($table, $parameters)
	{
		$collumns = implode(', ', array_keys($parameters));
		$values = ':' . implode(', :', array_keys($parameters));
		$sql = sprintf('INSERT INTO %s (%s) VALUES(%s)', $table, $collumns , $values );

		try {
			$sentencia = $this->pdo->prepare($sql);
			$sentencia->execute($parameters);
		} catch (Exception $e) {
			dd($e->getMessage);
		}
	}
}

?>
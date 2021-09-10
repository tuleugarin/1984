<?php
class QueryBuilder{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function getAll($table)
	{
		// 2.Выпол запрос
		$sql = "SELECT * FROM {$table}";
		$statment = $this->pdo->prepare($sql);  //prepare-выбрать
		$statment->execute();//execute-выполнит

		// 3.Получит ассоциативный массив ->$posts
		return $statment->fetchALL(PDO::FETCH_ASSOC);//fetch-получить(ASSOC-ассоциативный)

	}

	public function create($table, $key, $value)
	{
		$sql = "INSERT INTO {$table} ({$key}) VALUES ('{$value}')";
		$statment = $this->pdo->query($sql);
		dd($statment);

	}

}
 ?>
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

	public function create($table, $data)
	{
		$sql = "INSERT INTO {$table} (title) VALUES (:title)";
		$statment = $this->pdo->prepare($sql);
		$statment -> bindValue(':title', "AriGaTo");
		$statment -> execute();
		dd($statment);

	}

}
 ?>
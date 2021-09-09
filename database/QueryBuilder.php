<?php
class QueryBuilder{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	function getAll(){

		// 2.Выпол запрос
		$sql = "SELECT * FROM posts";
		$statment = $this->pdo->prepare($sql);  //prepare-выбрать
		$statment->execute();//execute-выполнит

		// 3.Получит ассоциативный массив ->$posts
		return $statment->fetchALL(PDO::FETCH_ASSOC);//fetch-получить(ASSOC-ассоциативный)

	}
}


 ?>
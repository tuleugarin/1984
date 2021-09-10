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
		$keys = implode(',', array_keys($data)); //array_keys()-из массива получает только ключи
		$tags = ':'.implode(', :', array_keys($data)); //implode(клей, массив)-ключей из массива склейвает как строки
		$sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";
		//"INSERT INTO posts (title,email) VALUES (:title, :email)" результат
		//dd($sql);
		$statment = $this->pdo->prepare($sql);
		//$statment -> bindValue(':title', "AriGaTo");//bindValue()-Связывает параметр с заданным значением
		$statment -> execute($data); //Передаем сюда массив он сам получит значение для каждого из ключей


	}

}
 ?>
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

	public function getOne($table, $id)
	{
		// 2.Выпол запрос
		$sql = "SELECT * FROM {$table} WHERE id=:id";
		$statment = $this->pdo->prepare($sql);  //prepare-выбрать
		//$statment -> bindParam(':id', $id);//bindValue()-Связывает параметр с заданным значением только переменную
		$statment -> execute([
			'id' => $id
		]);//execute-выполнит

		// 3.Получит ассоциативный массив ->$posts
		return $statment -> fetch(PDO::FETCH_ASSOC);
	}

	public function create($table, $data)
	{
		$keys = implode(',', array_keys($data)); //array_keys()-из массива получает только ключи
		$tags = ':'.implode(', :', array_keys($data)); //implode(клей, массив)-ключей из массива склейвает как строки
		$sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";
		//"INSERT INTO posts (title,email) VALUES (:title, :email)" результат
		$statment = $this->pdo->prepare($sql);
		//$statment -> bindValue(':title', "AriGaTo");//bindValue()-Связывает параметр с заданным значением можно голый текст
		$statment -> execute($data); //Передаем сюда массив он сам получит значение для каждого из ключей
	}

	public function update($table, $data, $id)
	{
		//$sql = "UPDATE FROM {$table} 'title=:title, email=:email' WHERE id=:id" - делаем вот так
		$keys = array_keys($data);
		$string = "";
		foreach ($keys as $key)
		{
			$string .= $key . "=:" . $key . ",";
		}

		$keys = rtrim($string, ",");

		$sql = "UPDATE FROM {$table} '{$keys}' WHERE id=:id";
		dd($sql);
	}
}
 ?>
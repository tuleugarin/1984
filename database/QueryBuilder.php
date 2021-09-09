<?php
class QueryBuilder{

	function getAll($pdo){

		// 2.Выпол запрос
		$sql = "SELECT * FROM posts";
		$statment = $pdo->prepare($sql);  //prepare-выбрать
		$statment->execute();//execute-выполнит

		// 3.Получит ассоциативный массив ->$posts
		$posts = $statment->fetchALL(PDO::FETCH_ASSOC);//fetch-получить(ASSOC-ассоциативный)
		return $posts;
	}
}


 ?>
<?php
function dd($data){
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	die;
}

function getAllPosts(){
		// 1.Соедю с БД
	$pdo = new PDO("mysql:host=localhost;dbname=app3;charset=utf8;", "root", "");

	// 2.Выпол запрос
	$sql = "SELECT * FROM posts";
	$statment = $pdo->prepare($sql);  //prepare-выбрать
	$statment->execute();//execute-выполнит

	// 3.Получит ассоциативный массив ->$posts
	$posts = $statment->fetchALL(PDO::FETCH_ASSOC);//fetch-получить(ASSOC-ассоциативный)
	return $posts;
}
 ?>
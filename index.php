<?php
include 'functions.php';
// 1. Настроит сервер, чтобы все запросы шли автоматический на страницу/файл index.php
$routes = [
	'/' =>  'public/index.php',
	'/about' => 'public/about.php'
];
$route = $_SERVER['REQUEST_URI'];

if (array_key_exists($route, $routes)){
	dd($routes[$route]);
}
else{
	dd(404);
}




$db = include 'database/start.php';

$posts = $db->getAll('posts');

// 4.Вывести через foreach;
include 'index.view.php';
 ?>
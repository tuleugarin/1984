<?php
include 'functions.php';
// 1. Настроит сервер, чтобы все запросы шли автоматический на страницу/файл index.php
$routes = [
	'/' =>  'public/homepage.php',
	'/about' => 'public/about.php'
];
$route = $_SERVER['REQUEST_URI'];

if (array_key_exists($route, $routes)){ // array_key_exists()-есть ли значение в этом массиве
	include $routes[$route]; exit;
}
else{
	dd(404);
}




$db = include 'database/start.php';

$posts = $db->getAll('posts');

// 4.Вывести через foreach;
include 'index.view.php';
 ?>
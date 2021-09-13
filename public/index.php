<?php

include __DIR__ . '/../functions.php';
// 1. Настроит сервер, чтобы все запросы шли автоматический на страницу/файл index.php
$routes = [
	'/' =>  'public/homepage.php',
	'/homepage' =>  'public/homepage.php',
	'/about' => 'public/about.php'
];
$route = $_SERVER['REQUEST_URI'];

if (array_key_exists($route, $routes)){ // array_key_exists()-есть ли значение в этом массиве
	include __DIR__ . '/../' . $routes[$route]; exit;
}
else{	dd(404); }

 ?>

 BROWSER -> homepage.php -> index.php //Единый точка входа Front Controller
 							-> Router
 								-> /homepage => '/controllers/homepage.php'
 																-> QueryBuilder -> All()
 																-> return include VIEW
 																->Result
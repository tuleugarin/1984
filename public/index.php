<?php

include __DIR__ . '/../functions.php';
include __DIR__ . '/../database/Router.php';
// 1. Настроит сервер, чтобы все запросы шли автоматический на страницу/файл index.php

Route::page404('../page404.php');
    Route::path('/')->component('../public/homepage.php');
    Route::path('/about')->component('../public/about.php');
Route::start();
 ?>

 BROWSER -> homepage.php -> index.php //Единый точка входа Front Controller
 							-> Router
 								-> /homepage => '/controllers/homepage.php'
 																-> QueryBuilder -> All()
 																-> return include VIEW
 																->Result
<?php

$db = include __DIR__ . '/../database/start.php';


spl_autoload_register(function($class)
{
	require  __DIR__ . "/../classes/$class/$class.php";
});


$clas1 = new Class1;
$clas2 = new Class2;


exit;

$posts = $db->getAll('posts');

// 4.Вывести через foreach;
include __DIR__ . '/../index.view.php';


 ?>
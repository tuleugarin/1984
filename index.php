<?php
include 'functions.php';
$db = include 'database/start.php';

//dd($_SERVER);
$posts = $db->getAll('posts');

// 4.Вывести через foreach;
include 'index.view.php';
 ?>
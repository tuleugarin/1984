<?php
include 'functions.php';
$db = include 'database/start.php';

$posts = $db->getAll('posts');

// 4.Вывести через foreach;
include 'index.view.php';
 ?>
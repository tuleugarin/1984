<?php
include 'functions.php';

$pdo =connectToDB();
$posts = getAllPosts($pdo);

// 4.Вывести через foreach;
include 'index.view.php';
 ?>
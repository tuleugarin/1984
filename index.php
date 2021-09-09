<?php
include 'functions.php';
include 'database/QueryBuilder.php';

$pdo =connectToDB();

$db = new QueryBuilder;
$posts = $db->getAll($pdo);

// 4.Вывести через foreach;
include 'index.view.php';
 ?>
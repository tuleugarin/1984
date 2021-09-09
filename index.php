<?php
include 'functions.php';
include 'database/QueryBuilder.php';
include 'database/Connection.php';

$pdo = Connection::make();

$db = new QueryBuilder($pdo);
$posts = $db->getAll();

// 4.Вывести через foreach;
include 'index.view.php';
 ?>
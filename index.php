<?php
include 'functions.php';
$db = include 'database/start.php';

$posts = $db->getAll();

// 4.Вывести через foreach;
include 'index.view.php';
 ?>
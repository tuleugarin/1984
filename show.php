<?php
include __DIR__ . '../functions.php';
$db = include __DIR__ . '../database/start.php';

$id = $_GET['id'];

$post = $db->getOne('posts', $id);

 ?>

<h1><?php echo $post['title'];  ?></h1>
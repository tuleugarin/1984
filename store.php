<?php
include 'functions.php';
$db = include 'database/start.php';

$db->create('posts', [
	'title' => $_POST['title'],
	//'email' => 'Salom@Aleikum',
	//'description' => "Ola"
]);

header('Location: /index.php');
 ?>
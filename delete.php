<?php

include __DIR__ . '../functions.php';
$db = include __DIR__ . '../database/start.php';

$db->delete('posts', $_GET['id']);

header('Location: /index.php');

?>
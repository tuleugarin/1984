<?php

$db = include __DIR__ . '/../database/start.php';

$posts = $db->getAll('posts');

// 4.Вывести через foreach;
include __DIR__ . '/../index.view.php';


 ?>
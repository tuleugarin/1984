<?php

include 'functions.php';
$db = include 'database/start.php';

$db->update('posts', [

	'title' => "lilo",
	'email' => 'hgsh',
], $_GET['id']);

?>
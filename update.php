<?php

include 'functions.php';
$db = include 'database/start.php';



$db->update('posts', $_POST);

?>
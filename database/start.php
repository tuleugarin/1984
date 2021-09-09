<?php

include 'database/QueryBuilder.php';
include 'database/Connection.php';

$pdo = Connection::make();

$db = new QueryBuilder($pdo);

 ?>
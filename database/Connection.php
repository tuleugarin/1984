<?php

class Connection
{
	public static function make($config){
			// 1.Соедю с БД
	$pdo = new PDO("{$config['connection']};dbname=app3;charset=utf8;", "root", "");
	return $pdo;
}
}

 ?>
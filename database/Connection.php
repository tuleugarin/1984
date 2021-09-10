<?php

class Connection
{
	public static function make($config){
			// 1.Соедю с БД
	$pdo = new PDO(
		"{$config['connection']};dbname={$config['database']};charset={$config['charset']};",
		"{$config['username']}",
		"{$config['password']}"
	);
	return $pdo;
}
}

 ?>
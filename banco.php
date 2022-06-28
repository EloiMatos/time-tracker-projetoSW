<?php
try {
	$db = new PDO('mysql:host=localhost;dbname=time_tracker;charset=utf8mb4', "root", "");
}
catch (PDOException $err)
{
	echo 'Erro ao conectar com o MySQL: ' . $err->getMessage();
	exit;
}
   
<?php
session_start();
try{
	$pdo = new PDO("mysql:dbname=projeto_classificados;host=localhost","root","");
	$pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Erro".$e->getMessage();
	exit;
}
 

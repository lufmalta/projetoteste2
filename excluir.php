<?php
require "config.php";
session_start();
if(!isset($_SESSION['logado'])){
	header("Location: login.php");
	exit;
}
$id = $_GET['titulo'];
//$conexao = new Conexao();
$sql = "DELETE FROM documentos WHERE id = :id";
$sql = $pdo->prepare($sql);
$sql->bindValue(":id",$id);
$sql->execute();
header("Location: index.php");

// if($sql->rowCount() > 0){
// 	$sql = $sql->fetch();
// }
<?php 
include "contato.class.php";
$excluir = new Contato();
if(!empty($_GET['id'])){

	$id = $_GET['id'];
	$excluir->excluir($id);
}
	header("Location: index.php");


?>
<h1>Adicionar documento</h1>
<?php
require "config.php";
session_start();
if(!isset($_SESSION['logado'])){
	header("Location: login.php");
	exit;
}
if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
	$conexao = new Conexao();
	$sql = "INSERT INTO documentos (titulo) VALUES (:titulo)";
	$sql = $conexao->getPDO()->prepare($sql);
	$sql->bindValue(":titulo",$_POST['titulo']);
	$sql->execute();
	header("Location: index.php");
	exit;
}
?>
<form method="POST">
	Documento:<br/>
	<input type="text" name="titulo"/><br/></br>
	<input type="submit" value="Cadastrar"/>
</form>
<a href="index.php"><button>Voltar</button></a>

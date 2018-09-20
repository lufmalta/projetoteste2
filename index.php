

<?php
session_start();
require 'config.php';
if(empty($_SESSION['logado'])){
	header("Location: login.php"); // nesse if ira verificar se esta vazio a sessao, se estiver redireciona para a pagina de login
	exit;
}else {
	$id = $_SESSION['logado']; // aqui no else ele ira pegar o id de quem logou e o seu ip
	$ip = $_SERVER['REMOTE_ADDR'];

	$sql = "SELECT * FROM usuarios WHERE id = :id AND ip = :ip"; // aqui ira verificar se o id e o ip da pessoa do momento é igual ao do banco de dados, caso seja entao continua na pagina, caso nao seja o mesmo ip ele redireciona para a pagina login
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":id",$id);
	$sql->bindValue(":ip", $ip);
	$sql->execute();

	if($sql->rowCount() == 0){
		header("Location: login.php");
		exit;
	}
}
?>
<h1>Conteudo confidencial</h1>

<h2>Algo novo</h2>
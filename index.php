<?php 
require "config.php";

if(isset($_POST['email']) && empty($_POST['email']) == false){
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$config =  new Config();
	$pdo = $config->getPdo();// aqui o pdo esta sendo inserido dentro da variavel pdo
	$sql = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email");//aqui o sql esta com valor do pdo
	$sql->bindValue(":nome",$nome);
	$sql->bindValue(":email",$email);
	$sql->execute();
	$id = $pdo->lastInsertId();
	//header("Location: index.php");

	$md5 = md5($id);
	$link = 'http://www.meusite.com.br/confirmarcadastro/cadastro.php?h='.$md5;

	$assunto = "Confirme seu cadastro";
	$msg = "Clique no link abaixo para confirmar seu cadastro"."\n\n".$link;
	$headers = "From: lufmalta@gmail.com"."\r\n".
			   "X-Mailer: PHP/".phpversion();

	mail($email, $assunto, $msg, $headers);
	


}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirma Email</title>
</head>
<body>
	<form method="POST">
		Nome:<br/>
		<input type="text" name="nome" /><br/><br/>

		E-mail:<br/>
		<input type="email" name="email"/><br/><br/>
		<input type="submit" value="Cadastrar"/>

	</form>
</body>
</html>
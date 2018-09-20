<?php
session_start();
require 'config.php';

$_SESSION['logado'] = "";

if(isset($_POST['email'])){
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":email",$email);
	$sql->bindValue(":senha", $senha);
	$sql->execute();

	if($sql->rowCount()> 0 ){// aqui ele ira verificar se esta correto o email e a senha, caso esteja entrada, guardara o id atual e o ip da pessoa e depois ira entrar no banco de dados e ira alterar o ip para o ip atual, onde o id for igual ao id deste login.

		$sql = $sql->fetch();
		$id = $sql['id'];
		$ip = $_SERVER['REMOTE_ADDR']; //aqui você esta pegando o ip do usuario

		$_SESSION['logado'] = $id;
		

		$sql = "UPDATE usuarios SET ip = :ip WHERE id = :id";// como aqui altera o ip, entao na pagina index ele ira logar normalmente, caso alguem entre nesse mesmo login por outra maquina, entao o ip ira mudar e isso fara com que na pagina index a pessoa que estava na sessao, devera ser redirecionada para o login novamente, pois alguem tera entrado na mesma conta dele.
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":ip", $ip);
		$sql->bindValue(":id",$id);
		$sql->execute();

		header("Location: index.php");
		exit;

	}else {
		echo "Usuario ou senha invalido";
	}

}
?>
<h1>Login</h1>
<form method="POST">
	E-mail:<br/>
	<input type="email" name="email"/><br/><br/>

	Senha:<br/>
	<input type="password" name="senha"/><br/><br/>

	<input type="submit" value="Enviar"/>

</form>
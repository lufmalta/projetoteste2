<?php 


require "config.php";
require "classes/usuarios.class.php";
session_start(); 
if(isset($_POST['email'])){
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	//$conexao = new Conexao();
	$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":email",$email);
	$sql->bindValue(":senha",md5($senha));
	$sql->execute();
	if($sql->rowCount() > 0){
		$sql = $sql->fetch();
		$permissoes = explode(",", $sql['permissoes']);
		$usuarios = new Usuarios( $sql['id'], $sql['email'] , $sql['senha'], $permissoes );
		$_SESSION['logado'] = $sql['id'];
		$_SESSION['permissao'] = $permissoes;
		header("Location: index.php");
		exit;
	}else {
		echo "Email e/ou senha invalido";
	}
	
}
?>	
<form method="POST">
	E-mail:<br/>
	<input type="email" name="email"/><br/><br/>
	Senha:<br/>
	<input type="senha" name="senha"/><br/><br/>
	<input type="submit" value="Logar"/>
</form>
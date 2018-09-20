<?php 
session_start();
require 'config.php';
if(isset($_POST['agencia']) && empty($_POST['agencia']) == false
	&& isset($_POST['conta']) && empty($_POST['conta']) == false
	&& isset($_POST['senha']) && empty($_POST['senha']) == false){
	
	$agencia = addslashes($_POST['agencia']);
	$conta = addslashes($_POST['conta']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = $pdo->prepare("SELECT * FROM contas WHERE agencia = :agencia AND 
		conta = :conta AND senha = :senha");
	$sql->bindValue(":agencia", $agencia);
	$sql->bindValue(":conta", $conta);
	$sql->bindValue(":senha", $senha);
	$sql->execute();
	if($sql->rowCount() > 0){
		$sql = $sql->fetch();
		$_SESSION['caixa_banco'] = $sql['id'];
		header("Location: index.php");
		exit;
	}else {
		echo "Dados invalidos, verifique se algum dado foi digitado incorretamente";

	}
}
?>
<html>
<head>
	<title>Caixa Eletronico</title>
</head>
<body>
	<form method="POST">
		Agencia:</br>
		<input type="text" name="agencia"/></br>
		Conta:</br>
		<input type="text" name="conta"/></br>
		Senha:</br>
		<input type="password" name="senha"/></br></br>
		<input type="submit" value="Entrar"/>
	</form>
</body>
</html>
<?php 
session_start();
require 'config.php';
if(isset($_POST['tipo']) && empty($_POST['valor']) == false ){
	$valor = addslashes($_POST['valor']);
	$tipo = addslashes($_POST['tipo']);

	$sql = $pdo->prepare("INSERT INTO historico (id_conta, tipo, valor, data_operacao ) VALUES (:id_conta, :tipo, :valor, NOW())");
	$sql->bindValue(":id_conta", $_SESSION['caixa_banco']);
	$sql->bindValue(":tipo", $tipo);
	$sql->bindValue(":valor", $valor);
	$sql->execute();

	if($tipo == '0'){
		// Depósito
		$sql = $pdo->prepare("UPDATE contas SET saldo = saldo + :valor
		 WHERE id = :id");
		$sql->bindValue(":valor", $valor);
		$sql->bindValue(":id", $_SESSION['caixa_banco']);
		$sql->execute();
		header("Location: index.php");
		exit;
		
	}else {
		// Saque
		$sql = $pdo->prepare("UPDATE contas SET saldo = saldo - :valor
			WHERE id = :id");
		$sql->bindValue(":valor", $valor);
		$sql->bindValue(":id", $_SESSION['caixa_banco']);
		$sql->execute();
		header("Location: index.php");
		exit;
	}
			
}
?>
<html>
<head>
	<title>Caixa Eletronico</title>
</head>
<body>
	<form method="POST">
		Tipo de Transacao:</br></br>
		<select name="tipo">
			<option value="0">Deposito</option>
			<option value="1">Saque</option>
		</select></br></br>

		Valor:</br>
		<input type="text" name="valor" pattern="[0-9,.]{1,}"/></br></br>
		<input type="submit" value="Enviar"/>
	</form>
</body>
</html>
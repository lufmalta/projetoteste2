<?php 
session_start();
require 'config.php';
if(empty($_SESSION['caixa_banco'])){
	header("Location: login.php");
	exit;
}else {
	
	$id = $_SESSION['caixa_banco'];


	$sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
	$sql->bindValue(":id", $id);
	$sql->execute();
	if($sql->rowCount() > 0){
		$info = $sql->fetch();
		
	}else { 
		header("Location: login.php");
		exit;
	}
}

?>


<html>
<head>
	<title>Caixa Eletronico</title>
</head>
<body>
	<h3>Conta Banco</h3>
	<form method="POST">
		Titular: <?php echo $info['titular']; ?></br>
		Agencia: <?php echo $info['agencia']; ?></br>
		Conta: <?php echo $info['conta']; ?></br>
		Saldo: <?php echo $info['saldo']; ?>
	</form>
	<a style="text-decoration:none;color:#FF0000;" href="sair.php">Sair</a>
	<hr/>
	<h3>Movimentacao/ Extrato</h3>
	<a href="add-transacao.php">Adicionar Transacao</a></br></br>

	<table border="1" width="400">
		<tr>
			<th>Data</th>
			<th>Valor</th>
		</tr>
		<?php 
			$sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
			$sql->bindValue(":id_conta", $id);
			$sql->execute();

			if($sql->rowCount() > 0 ){
				foreach($sql->fetchAll() as $item): ?>
				<tr>
					<td><?php echo date("d/m/Y H:i", strtotime($item["data_operacao"])); ?></td>
					<td>
						<?php 
							if($item['tipo'] == '0'): ?>
							<font color="green" >R$ <?php echo $item['valor']; ?> </font>
							<?php
							else: ?>
							<font color="red" >- R$ <?php echo $item['valor']; ?> </font>
							
					  <?php endif; ?> 						
							

						
						
					</td>
				</tr>
				<?php endforeach;
			}	

		?>
	</table>
</br>
	<a href="limpar.php">Limpar historico</a>
</body>
</html>

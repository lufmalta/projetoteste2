<?php 
require "config.php";
if(!empty($_GET['token'])): //inicia o if
	$hash = addslashes($_GET['token']); //recebe o valor do token

	?>
	<form method="POST">
		Nova Senha:<br/>
		<input type="text" name="senha" /><br/><br/>
		<input type="submit" value="Alterar"/>
		<button><a style="text-decoration:none;color:black;" href="index.php">Voltar</a></button>
	</form>

	<?php

	$sql = "SELECT * FROM usuarios_token WHERE hash = :hash AND used = 0 AND expirado_em > NOW()";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":hash", $hash);
	$sql->execute();

	if($sql->rowCount() > 0){
		$sql = $sql->fetch();
		$id = $sql['id_usuario'];

		if(isset($_POST['senha']) && !empty($_POST['senha'])){
		$senha = addslashes($_POST['senha']);

		$sql = "UPDATE usuarios SET senha = :senha WHERE id = :id";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":senha", md5($senha));
		$sql->bindValue(":id", $id);
		$sql->execute();

		$sql = "UPDATE usuarios_token SET used = 1 WHERE hash = :hash";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":hash", $hash);
		$sql->execute();

		echo "Senha alterada com sucesso";



	}

	}else {
		echo "Alguma dessas opcoes ocorreu: Token Invalido/Senha ja foi alterada/Token ja expirado";
	}
// end if rowCount()

	


endif;// encerra o  primeiro if deste codigo
?>
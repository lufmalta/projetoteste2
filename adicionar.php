<?php 
	require 'config.php';
?>
<form method="POST">
	Nome: </br>
	<input type="text" name="nome" placeholder="Digite aqui..." autofocus></br>
	Email: </br>
	<input type="email" name="email" placeholder="Digite aqui..."></br>
	Senha: </br>
	<input type="password" name="senha" placeholder="Digite aqui..."></br></br>
	<input type="submit" value="Cadastrar">
	<a href="index.php">Voltar</a>
</form>
<?php 
	if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
		if(isset($_POST['email']) && empty($_POST['email']) == false){
			if(isset($_POST['senha']) && empty($_POST['senha']) == false){
				$nome  = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']) ;
				$senha = md5(addslashes($_POST['senha'])) ;
				$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
				$pdo->query($sql);
				header("Location: index.php");
			}
		}
	}


?>
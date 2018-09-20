<?php 
	require "contato.class.php";
	$voltar = new Contato();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Adicionar contato</title>
</head>
<body>
	<h1>Adicionar</h1>
	<form method="POST">
		Email:</br>
		<input type="email" name="email"/></br>
		Nome:</br>
		<input type="text" name="nome"/></br></br>
		<input type="submit" value="Adicionar"/>
		<button><a style="text-decoration:none;color:#000000;"href="index.php">Voltar</a></button>
	</form>
	
</body>
</html>
<?php


	if(isset($_POST['email']) && empty($_POST['email']) == false){
		$email = addslashes($_POST['email']);
		$nome = addslashes($_POST['nome']);
		$add = new Contato();
		$add->adicionar($email, $nome);
		$_POST['email'] = "";
		$_POST['nome'] = "";
		header("Location: index.php");
	}
 ?>
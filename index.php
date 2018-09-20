<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 
require "contato.class.php";
if(isset($_POST['email']) && empty($_POST['email']) == false){
	$contato = new Contato();
	$email = addslashes($_POST['email']);
	$nome = addslashes($_POST['nome']);
	//$contato->adicionar($email, $nome);
	//$contato->editar($nome, $email);
	//$contato->excluir($email);
	//$contato->getNome($email);
	//$tudo = $contato->getAll();
	//print_r($tudo);
	
	

}

?>
<html>
	<head>
		<title>Usando o CRUD</title>
	</head>
	<body>
		<form method="POST">
			E-mail:</br>
			<input type="email" name="email"/></br>
			Nome:</br>
			<input type="text" name="nome"/></br></br>
			<input type="submit" value="Enviar"/></br>
		</form>
	</body>
</html>
	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
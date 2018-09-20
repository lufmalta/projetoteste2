<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<h1>Digite aqui o seu email ou cpf</h1>
<form method="POST">
	<input type="text" name="conta"/>
	<input type="submit" value="Pesquisar"/>
</form>
<hr/>
<?php 
if(!empty($_POST['conta'])){
	$dado = addslashes($_POST['conta']);
	try{
		$pdo = new PDO("mysql:dbname=projeto_pesquisacolunas","root","");
		$pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Erro: ".$e->getMessage();
	}

	$sql = "SELECT * FROM usuarios WHERE (email = :email) OR (cpf = :cpf)";// o OR é no caso de ser alguma das duas opcoes, se quiser que ambas sejam validas, coloca-se o AND
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":email", $dado);
	$sql->bindValue(":cpf", $dado);
	$sql->execute();
	if($sql->rowCount() > 0){
		$sql = $sql->fetch();
		echo $sql['nome'];
	}

}
?>
	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
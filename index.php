<?php 
	$dsn = "mysql:dbname=projeto_comentarios;host=localhost";
	$dbuser = "root";
	$dbpass = "";
try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	$pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo "Erro Banco".$e->getMessage();
	exit;
}
?>
<fieldset>
	<form method="POST">
		Nome:</br>
		<input type="text" name="nome"/></br></br>
		Mensagem:</br>
		<textarea name="mensagem"></textarea></br></br>
		<input type="submit" value="Enviar"/>

	</form>

</fieldset></br>
<?php 
	if(isset($_POST['nome']) && empty($_POST['nome']) == false){
		if(isset($_POST['mensagem']) && empty($_POST['mensagem']) == false){
			$nome = $_POST['nome'];
			$mensagem = $_POST['mensagem'];
			$sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :msg, data_msg = NOW()");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":msg", $mensagem);
			$sql->execute();
			header("Location: index.php");// envia de volta para a página index, assim não reeenvia os dados de novo.
		}
	
}
	$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0){
		foreach($sql->fetchAll() as $mensagens):
		?>
		<strong><?php echo $mensagens['nome']; ?></strong></br>
			<?php echo $mensagens['msg']; ?>
		<hr/>

		<?php
		endforeach;	
	}else {
		echo "Nao possui mensagens";
	}


?>

<?php 
	$dsn = "mysql:dbname=projeto_ordenar;host=localhost";
	$dbuser = "root";
	$dbpass = "";
try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	$pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

} catch(PDOExcepetion $e){
	echo "Erro banco".$e->getMessage();
}	
	if(isset($_GET['ordem']) && empty($_GET['ordem']) == false){
		$ordem = addslashes($_GET['ordem']);
		$sql = "SELECT * FROM usuarios ORDER BY ".$ordem;
	}else {
		$ordem = '';
		$sql = "SELECT * FROM usuarios"; 
	}
?>
<form method = "GET">
	<select name="ordem" onchange="this.form.submit()">
		<option></option>
		<option value="nome" <?php echo($ordem=="nome")?'selected="selected"':'' ?>>Por nome</option>
		<option value="idade" <?php echo($ordem=="idade")?'selected="selected"':'' ?>>Por idade</option>
	</select>

</form>
<table border="1" width="400">
	<tr>
		<th colspan="2">Usuarios</th>

	</tr>
	<tr>
		<th>Nome</th>
		<th>Idade</th>
	</tr>
	<?php
		$sql = $pdo->query($sql);
		if($sql->rowCount() > 0){
			foreach($sql->fetchAll() as $usuario):
			?>
				<tr>
					<td><?php echo $usuario['nome'] ?></td>
					<td><?php echo $usuario['idade'] ?></td>
				</tr>
			<?php
			endforeach;	

		}



	 ?>
</table>
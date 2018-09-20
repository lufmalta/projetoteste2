<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 
require "config.php";
$conecta = new Banco();
if(empty($_POST['idade'])){
	$idade = '';
}


if(isset($_POST['idade'])){
	$idade = $_POST['idade'];
	if($idade == 1){
		$sql = "SELECT * FROM usuarios ORDER BY idade DESC";
		$sql = $conecta->getPdo()->query($sql);
	}else if($idade == 2){
		$sql = "SELECT * FROM usuarios ORDER BY idade ASC";
		$sql = $conecta->getPdo()->query($sql);
	}else {
		$sql = "SELECT * FROM usuarios";
		$sql = $conecta->getPdo()->query($sql);
	}
}else {
	$idade = '';
	$sql = "SELECT * FROM usuarios";
	$sql = $conecta->getPdo()->query($sql);
} 
			


?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabela de Usuarios</title>
</head>
<body>
	<form method="POST">
		<select name="idade">
			<option></option>
			<option value="1" <?php echo ($idade == 1)?'selected = "selected"':''; ?>>Por idade Maior</option>
			<option value="2" <?php echo ($idade == 2)?'selected = "selected"':''; ?>>Por idade Menor</option>
		</select>
		<input type="submit" value="Filtrar" />
	</form>
	<br/>
	<table border="1" width="100%">
		<tr>
			<th>Nome</th>
			<th>Sexo</th>
			<th>Idade</th>
		</tr>
	
	<?php
		$sexos = array(
			'0' => 'Feminino',
			'1' => 'Masculino'
		);
		
		if($sql->rowCount() > 0){
			foreach($sql->fetchAll() as $usuario):
			?>
			<tr>
				<td><?php echo $usuario['nome']; ?></td>
				<td><?php echo $sexos[$usuario['sexo']]; ?></td>
				<td><?php echo $usuario['idade']; ?></td>
			</tr>
			<?php
			endforeach; 	
		}
		

	 ?>
	 </table>
</body>
</html>
	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
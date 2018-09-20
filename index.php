<?php 
	try{
		$pdo = new PDO("mysql:dbname=projeto_filtrotabela;host=localhost","root","");
		$pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Erro: ".$e->getMessage();
	}
	if(isset($_POST['sexo']) && $_POST['sexo'] != ''){
			$sexo = $_POST['sexo'];
			$sql = "SELECT * FROM usuarios WHERE sexo = :sexo";
			$sql = $pdo->prepare($sql);
			$sql->bindParam(":sexo",$sexo);
			$sql->execute();

		}else {
			$sexo = '';
			$sql = "SELECT * FROM usuarios";
			$sql = $pdo->query($sql);
		}
?>
<form method="POST">
	<select name="sexo">
		<option></option>
		<option value="1" <?php echo ($sexo=='1')?'selected = "selected"':''; ?>>Masculino</option>
		<option value="0" <?php echo ($sexo=='0')?'selected = "selected"':''; ?>>Feminino</option>
	</select>
	<input type="submit" value="Filtar"/>	
</form>


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
					<td style="text-align:center;"><?php echo $usuario['nome'] ?></td>
					<td style="text-align:center;"><?php echo $sexos[$usuario['sexo']]?></td>
					<td style="text-align:center;"><?php echo $usuario['idade']?></td>
				</tr>

			<?php
			endforeach;	
		}
	?>
</table>

<?php 

//echo ($sexo == '2')?'faça isso':'caso contrario faça isso';// assim é a condiçao

?>
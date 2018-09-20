<?php
	require 'config.php';
		if(isset($_GET['id']) && empty($_GET['id']) == false){
			$id = addslashes($_GET['id']);
			$sql = "SELECT * FROM usuarios WHERE id ='$id'";
			$sql = $pdo->query($sql);
			if($sql->rowCount() > 0){
				$dado = $sql->fetch();
			}else {
				header("Location: index.php");
			}
			
		}else {
			header("Location: index.php");
		}
		if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
			if(isset($_POST['email']) && empty($_POST['email']) == false){
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$id = addslashes($_GET['id']);
			$sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id' ";
			$pdo->query($sql);
			header("Location: index.php");
		}
	}						
 ?>
 <form method="POST">
	Nome:</br>
	<input type="text" name="nome" value="<?php echo $dado['nome']; ?>"></br>
	Email: </br>
	<input type="email" name="email" value="<?php echo $dado['email']; ?>"></br></br>
	<input type="submit" value="Alterar">
	<a href="index.php">Voltar</a>
 </form>
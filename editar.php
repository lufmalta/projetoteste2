<?php 
require "contato.class.php";
$consulta = new Contato();

	if(!empty($_GET['id'])){
		$id = $_GET['id'];
		$info = $consulta->getInfo($id);
		if(empty($info['email'])){
			header("Location: index.php");
			exit;
		}
		//$nomeAtual = $_GET['nome'];
		//$emailAtual = $_GET['email'];
	}else {
		header("Location: index.php");
		exit;
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar contato</title>
</head>
<body>
	<h1>Editar</h1>
	<form method="POST">

		<!-- <input style="display:none;"type="email" name="email" value="<?php echo $emailAtual; ?>"  /></br> -->
		Nome:</br>
		<input type="text" name="nome" value="<?php echo $info['nome']; ?>"/><br/><br/>
		E-mail:<br/>
		<input type="email" name="email" value="<?php echo $info['email']; ?>" disabled />
		<br/><br/>
		<input type="submit" value="Editar"/>
		<button><a style="text-decoration:none;color:#000000;"href="index.php">Voltar</a></button>
	</form>
</body>
</html>
<?php 
	

	if(isset($_POST['nome']) && empty($_POST['nome']) == false){
		$nome = addslashes($_POST['nome']);
		//$email = addslashes($_POST['email']);
		$editar = new Contato();
		$editar->editar($id, $nome);
		//$_POST['email'] = "";
		//$_POST['nome'] = "";
		header("Location: index.php");
	}
?>
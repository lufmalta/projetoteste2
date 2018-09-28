<h1>Editar documento</h1>
<?php 
require "config.php";
session_start();
if(!isset($_SESSION['logado'])){
	header("Location: login.php");
	exit;
}
$id = $_GET['titulo'];
//$conexao = new Conexao();
$sql = "SELECT * FROM documentos WHERE id = :id";
$sql = $pdo->prepare($sql);
$sql->bindValue(":id",$id);
$sql->execute();
if($sql->rowCount() > 0){
	$sql = $sql->fetch();
}
?>
<form method="POST">
	ID:<br/>
	<input type="number" name="id" disabled value="<?php echo $sql['id'] ?>"/><br/>
	Titulo:<br/>
	<input type="text" name="titulo" value="<?php echo $sql['titulo'] ?>"/><br/><br/>
	<input type="submit" value="Alterar"/>

</form>
<a href="index.php"><button>Voltar</button></a>
<?php 
if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
	$sql = "UPDATE documentos SET titulo = :titulo WHERE id = :id";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":id",$id);
	$sql->bindValue(":titulo",$_POST['titulo']);
	$sql->execute();
	if($sql->rowCount() > 0){
		header("Location: index.php");
		exit;
	}
}
?>
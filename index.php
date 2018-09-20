<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php
session_start(); 
require "config.php";
require "classes/documentos.class.php";
if(!isset($_SESSION['logado'])){
	header("Location: login.php");
	exit;
}





$id = $_SESSION['logado'];;
$permissao = $_SESSION['permissao'];


//$conexao = new Conexao();
$sql = "SELECT * FROM documentos";
$sql = $pdo->query($sql);

?>

<h1>Sistema</h1><br/>
<?php if(in_array('ADD',$permissao)):
	?>
<a href="adicionar.php">Adicionar Documento</a><br/>
	<?php 
	endif; ?>
<table border="1" width="100%">
	<tr>
		<th>Titulo</th>
		<th>Acoes</th>
	</tr>

<?php

$documentos = new Documentos($pdo);
if($sql->rowCount() > 0){
	foreach($sql->fetchAll() as $docs):
		?>
			<tr>
				<td><?php echo $docs['titulo'] ?></td><br/>
					<?php $idTitulo = $docs['id']; ?>
				<td>
				<?php if(in_array('EDIT', $permissao)): ?>
					
						<?php echo "<a href='editar.php?titulo=$idTitulo' >Editar</a>" ?>
						
					<?php
						endif;
					  if(in_array('DEL', $permissao)): ?>

					  	<?php echo "<a href='excluir.php?titulo=$idTitulo' style='float:right;'>Excluir</a>" ?>
					  <?php
						endif;	 
				 ?>
				</td>
			</tr>
		<?php 
		endforeach;
	
}

?>
</table><br/>
<a href="sair.php"><button>Sair</button></a>

	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 
include "contato.class.php";

$contato = new Contato();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabela Contatos</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="topo">
		<div class="topoint">
			<div class="topoleft">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Contato</a></li>
					<li><a href="#">Sobre</a></li>
				</ul>
			</div>
			<div class='toporight'>
				<ul>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Instagram</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div style="margin:1px;background-color:black;width:100%;height:1px;"></div>
		<h2 style="text-align:center;margin:0px;">Contatos</h2>
		
		<div class="containerint">
			<button class="botaoadd" ><a style="text-decoration:none;color:#000000;"href="adicionar.php">Adicionar</a></button></br><br/>
			<div class="conteudo">
				
		<table border="1" width="500" style="background-color:#CCC;color:#0053FF;">
			<tr>	
				<th style="color:green;">ID</th>
				<th style="color:green;">E-MAIL</th>
				<th style="color:green;">NOME</th>
				<th style="width:140px;color:green;">Acoes</th>
			</tr>	
		<?php 
			$lista = $contato->getAll();
			foreach($lista as $contatos):
				?>
				<tr>
					<td style="text-align:center;color:black;"><?php echo $contatos['id'] ?></td>
					<td style="text-align:center;color:black;"><?php echo $contatos['email'] ?></td>
					<td style="text-align:center;color:black;"><?php echo $contatos['nome'] ?></td>
					<td style="text-align:center;color:black;">
						<div style="float:left;">
							<button style="text-align:center;"><a style="text-decoration:none;color:blue;" href="editar.php?id=<?php echo $contatos['id']; ?>">Editar     </a></button>
						</div>
							
						
						<div style="float:right;">
							<button style="text-align:center;"><a style="text-decoration:none;color:red;;" href="excluir.php?id=<?php echo $contatos['id']; ?>">  Excluir</a></button>
						</div>
						
					</td>
					
				</tr>
				<?php endforeach;
				

		
				?>	
		</table>
			</div>
			

		
		</div>
	</div>
	
</body>
</html>
	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
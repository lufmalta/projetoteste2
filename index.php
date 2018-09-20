<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 

if(isset($_POST['nome']) && !empty($_POST['nome'])
 &&(isset($_POST['idade'])) && !empty($_POST['idade'])){

require "Personagem.php";
$nome = addslashes($_POST['nome']);
$idade = addslashes($_POST['idade']);
$personagem = new Personagem($nome,$idade);

}
?>
<html>
	<head>
		<title>Teste Inserindo dados</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<div class="topo">
			<div class="topoint">
				<div class="toporight">
					<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Youtube</a></li>
					</ul>
				</div>
				<div class="topoleft">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Encontre-nos</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
					<h3>Charlotte Casa de Dança</h3>
				</div>
			</div>
		</div>
		
		<div class="formulario">

			<form  method="POST">
				<span style="color:white;">Nome:</span></br>
				<input type="text" name="nome"/></br>
				<span style="color:white;">Idade:</span></br>
				<input type="number" name="idade"/></br></br>
				<input type="submit" value="Enviar"/>
			</form>
		</div>
	</body>
</html>
	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
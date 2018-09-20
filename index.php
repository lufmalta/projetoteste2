<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Bootstrap</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap3-css/bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap3-js/bootstrap.min.js"> </script>
	</head>
	<body>
		<div class="container" >
			<h1>Meu primeiro site bootstrap</h1>
			<p>Aqui esta o conteudo do site</p>
			
			<hr/>
			<p>Qual a empresa você prefere?</p>
			<div class="btn-group-vertical">
				<a class="btn btn-primary">Apple</a>
				<a class="btn btn-primary">Samsung</a>
				<a class="btn btn-primary">Iphone</a>
			</div>
			<p></p>
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Escolha
					<span class="caret"></span>
				</button>
					<ul class="dropdown-menu">
						<li class="dropdown-header">Cabeçalho</li>
						<li><a href="#"><button class="btn btn-primary">HTML</button></a></li>
						<li><a href="#">PHP</a></li>
						<li><a href="#"><button class="btn btn-primary">CSS</button></a></li>
						<li class="divider"></li>
						<li><a href="#"><button class="btn btn-primary disabled">Javascript</button></a></li>		
					</ul>
					<p></p>
					<div class="jumbotron">
						<h1>Curso Bootstrap</h1>
						<p>Aqui tem o curso de html, css, php, e isso tudo aprende
							por meio do bootstrap</p>
					</div>
					<p></p>
					<div class="alert alert-danger fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">
							&times;
						</a>
						Senha alterada com sucesso
					</div>
			</div>
			<button class="btn btn-primary">Mensagens <span style="color:yellow;" class="label label-warning">Novo</span></button>
			<?php 
				$aleatorio = round(rand(1, 200));

			?>
			<button class="btn btn-primary">Mensagens <span style="background-color:yellow;" class="badge"><?php echo $aleatorio; ?></span></button>
			<p></p>
			<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-success">
						<div class="panel panel-heading">Esportes</div>
						<div class="panel panel-body">Aqui esta meu contéudo do site</div>
					</div>
				</div>
				<div class="col-sm-6">
						<div class="panel panel-warning">
							<div class="panel panel-heading">Política</div>
							<div class="panel panel-body">Assunto sobre a política do Brasil</div>
						</div>
					</div>
			</div>
			
			
		</div>

	</body>

</html>


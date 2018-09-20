<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css">
	<title>Projeto Bootstrap 4</title>
	<style type="text/css">		
		.container {
			margin-top:20px;
		}	


	</style>
</head>
<body>
	
	<div class="container" style="margin-bottom:200px;">
		
		<div class="list-group">
			<div class="list-group-item active">Item 1</div>
			<div class="list-group-item">Item 2</div>
			<div class="list-group-item disabled">Item 3</div>
		</div>
		<hr/>
		<div class="list-group list-group-flush">
			<a href="#" class="list-group-item list-group-item-action list-group-item-success">Link para item 1</a>
			<a href="#" class="list-group-item list-group-item-action ">Link para item 2</a>
			<a href="#" class="list-group-item list-group-item-action list-group-item-danger">Link para item 3</a>
		</div>
		<hr/>
		<ul class="list-group"> <!-- isso aqui nao sei como ficou assim, por causa do botao criado, mas ficou legal -->
			<li class="list-group-item btn btn-primary">Aqui tem 1</li>
			<li class="list-group-item btn btn-primary">Aqui tem 2</li>
			<li class="list-group-item btn btn-primary">Aqui tem 3</li>

		</ul>
		<hr/>
		<ul class="list-group">
			<li class="list-group-item d-flex justify-content-between align-items-center">
				Teste 1
				<span class="badge badge-primary badge-pill">15</span>
			</li>
			<li class="list-group-item">Teste 2</li>
			<li class="list-group-item">Teste 3</li>

		</ul>
		<hr/>
		<ul class="list-group">
			<li class="list-group-item list-group-item-action">
				<div class="d-flex justify-content-between align-items-center">
					<h3>Noticia 1</h3>
					<h5 class="badge badge-primary badge-pill">2 dias atras</h5>
				</div>
					<p>Aqui tem o conteudo da noticia que aconteceu por volta das 15:00 da tarde</p>
				
			</li>
			<li class="list-group-item list-group-item-action">
				<div class="d-flex justify-content-between align-items-center">
					<h3>Noticia 2</h3>
					<h5 class="badge badge-primary badge-pill">3 dias atras</h5>
				</div>
				<p>Aqui esta a noticia que aconteceu por causa do homem que morreu na praia</p>
			</li>
			<li class="list-group-item list-group-item-action">
				<div class="d-flex justify-content-between align-items-center">
					<h3>Noticia 3</h3>
					<h5 class="badge badge-primary badge-pill">4 dias atras</h5>
				</div>
				<p>Aqui tem a noticia da pessoa que comeu goiaba no almoço e infartou</p>
			</li>
		</ul>
	</div>

			

			
		
	
	
	




	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script>
</body>
</html>
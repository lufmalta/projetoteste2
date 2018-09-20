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
	
	<div class="container">

		<nav class="navbar navbar-expand-sm navbar-light bg-light"> <!-- esse expand serve para fazer o botao aparecer s󠱵ando estiver no tamanho small -->

			<a class="navbar-brand" href="#">Empresa XYZ</a>

			<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu"> <!-- esse botao s󠡰arece quando o tamanho estiver em formato celular -->
				<span class="navbar-toggler-icon"></span> <!-- esse 顯 icone de menu que vai aparecer no botao -->
			</button>
			<div class="navbar-collapse collapse" id="navbarMenu">
				<div class="navbar-nav"> <!-- esse conteudo aqui dentro aparece normalmente, todavia quando ficar do tamanho small ele some, e so aparece novamente se apertar o botao do menu -->
					<a href="" class="nav-item nav-link">Link 1</a>
					<a href="" class="nav-item nav-link">Link 2</a>
					<a href="" class="nav-item nav-link">Link 3</a>
					<a href="" class="nav-item nav-link">Link 4</a>
				</div>
			</div>
			<form method="POST" class="form-inline"> <!-- esse inline serve para a pesquisa ficar na mesma linha -->

				<input type="text" class="form-control" placeholder="Pesquisar"/>
			</form>
			
		</nav>	
	</div>
			

			
		
	
	
	




	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script>
</body>
</html>
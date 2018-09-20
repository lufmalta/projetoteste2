<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<!-- Traduzindo este meta: O width=device-width faz com que a width do site seja igual a width do dispositivo. O initial-scale=1 fala que o zoom inicial da pagina sera de 1 e não devera ser alterado pelo navegador, porque o bootstrap ja vai fazer essa função. E o shrink-to-fit=no, serve para o navegador não encolher os conteudos da pagina, no caso da pagina ficar melhor, e deixar que o bootstrap faça isso. --> 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css">
	<title>Projeto Bootstrap 4</title>
	<style type="text/css">
		.row [class^=col-], .row .col { /*esse comando class^=col-, faz pegar todas as classes que tiverem pelo menos a palavra col-, ou seja é como o like do banco de dados, like col-%;*/
			background-color:#DDD;
			border:1px solid #CCC;
		}


	</style>
</head>
<body>
	
	<!-- <section style="background-color:red;height:50px;"> -->
		<div class="container" style="background-color: blue;">
			<div class="row justify-content-center" style="padding:10px;">
				<div class="col-3" ">Primeira</div>
				<div class="col-3 ">Segunda</div>
				<div class="col-3">Terceira</div>
			</div>
		</div>
	<!-- </section> -->
	
	




	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script>
</body>
</html>
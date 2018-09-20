<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<!-- Traduzindo este meta: O width=device-width faz com que a width do site seja igual a width do dispositivo. O initial-scale=1 fala que o zoom inicial da pagina sera de 1 e n䯠devera ser alterado pelo navegador, porque o bootstrap ja vai fazer essa fun褯. E o shrink-to-fit=no, serve para o navegador n䯠encolher os conteudos da pagina, no caso da pagina ficar melhor, e deixar que o bootstrap fa衠isso. --> 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css">
	<title>Projeto Bootstrap 4</title>
	<style type="text/css">
		.row [class^=col-], .row .col { /*esse comando class^=col-, faz pegar todas as classes que tiverem pelo menos a palavra col-, ou seja 顣omo o like do banco de dados, like col-%;*/
			background-color:#DDD;
			border:1px solid #CCC;
		}
	</style>
</head>
<body>
	<div class="container" ">
		<div class="row">
			<div class="col-sm-1">Home</div>
			<div class="col-sm-1">Contato</div>
			<div class="col-sm-10">Visite-nos</div>
			<!-- <div class="w-100"></div> assim vocꡦaz uma nova linha e coloca as outras colunas que sobraram nela, a outra maneira 顣riando uma nova linha -->
		</div>	
		<div class="row">
			<div class="col-sm">...</div>
			<div class="col-sm">...</div>
			<div class="col-sm">...</div>
		</div>
	</div>
	




	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script>
</body>
</html>
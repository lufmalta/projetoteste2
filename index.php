<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css">
	<title>Projeto Bootstrap 4</title>
	<style type="text/css">		
		.containere{
			display:flex;
			flex-direction:column;
			background-color:#DDD;
			margin-bottom:5px;
		}
		.container2{
			display:flex;
			flex-direction:row;
			background-color:#DDD;
		}

		.containere div,
		.container2 div {
			flex:1; /* quando coloca isso, fala que é do grupo 1, entao todas as div irao se dividir dentro do grupo 1, caso tenha uma div com flex:2 entao o grupo 2 vai ter o dobro do flex: 1*/
			background-color:red;
			margin:10px;
			padding:10px;
			font-size:18px;
			font-family: Arial;
		}

	</style>
</head>
<body style="margin-top:30px;">
	
	<div class="containere">
		<div>1</div>
		<div>2</div>
		<div>3</div>
	</div>
	<div class="container2">
		<div>1</div>
		<div>2</div>
		<div>3</div>
	</div>
			

			
		
	
	
	




	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script>
	
</body>
</html>
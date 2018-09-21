
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<!-- <link 	rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"/> -->
	<style type="text/css">
		.placar {
			width:150px;
			height:150px;
			position:fixed;
			left:0;
			top:0;
			background-color:#DDD;
			border:1px solid #999;
			text-align:center;
		}
		#placar {
			padding: 0px 5px;
			font-size:50px;
			border:1px solid #CCC;
		}
		.button {
			background-color:#FFF;
		}
		.bola {
			width:50px;
			height:50px;
			border-radius:25px;
			position:absolute;
		}
		
	</style>

</head>
<body >
	<div class="placar">
		Bolas estouradas:<br/>
		<span id="placar">0</span><br/><br/>
		<button class="button" id="comecar">Começar o Jogo</button>
		<button class="button" id="parar">Parar o Jogo</button>
	</div>		
	

	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>

	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>

	
</body>
</html>
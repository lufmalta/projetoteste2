<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css">
	<title>Projeto Bootstrap 4</title>
	<style type="text/css">		
		.containere {
			display:flex;
			height:500px;
			flex-direction:row;
			justify-content: center;
			align-items: flex-start;
			background-color:#DDD;
		
		}
		.containere div {
			width:100px;
			height:100px;
			background-color:#FF0000;
			margin:10px;
			padding:10px;
			font-size:18px;
			
		}
		.div10 {
			order:-1; <?php //assim o div vai ficar atras de todas as outras que sao order 0 no padrao?>
			align-self: flex-start;
			
			<?php //O align-self serve para alinhar especificamente essa div, e ignorar o alinhamento que esta na div container, meio que sobrescreve para alinhamento nele mesmo?>
		}
		.div5 {
			order:1; <?php // todas as divs estao automaticamente na ordem 0, caso coloque order 1 a div 15 ira ficar depois de todas as outras divs, porque primeiro vem as divs order 0 e depois a 1, depois a 2 e por assim vai... ?>
		}

	</style>
</head>
<body style="margin-top:30px;">
	
	<div class="containere">
		<div>1</div>
		<div>2</div>
		<div>3</div>
		<div>4</div>
		<div class="div5">5</div>
		<div>6</div>
		<div>7</div>
		<div>8</div>
		<div>9</div>
		<div class="div10">10</div>
		<div>11</div>
		<div>12</div>
		<div>13</div>
		<div>14</div>
		<div>15</div>
	</div>
			

			
		
	
	
	




	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script>
	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css">
	<title>Projeto Bootstrap 4</title>
	<style type="text/css">		
		#active {
			background-color:#39aae1;
			color:#FFF;
		}
		
		.li {
			float:left;
			margin-left:20px;
			
		}
		.li a {
			padding:15px;
			font-size:20px;
			height:100px;
			color:#000;
			text-decoration:none;
		}
		.li a:hover {
			background-color:#39aae1;
			color:#FFF;
		}
		.carousel-item img{
			
			height:650px;
		}

	</style>
</head>
<body style="margin-top:30px;">
	
	<header>
 		<div class="container d-flex justify-content-around" style="">
 			<div class="banner" style="width:300px;">
 				<img src="assets/images/cruz.png" width="300" height="110">
 			</div>
 			<div class="menu" style="height:100px;line-height:50px;">
 				<div class="ul">
 					<div class="li"><a href="#" id="active">Home</a></div>
 					<div class="li"><a href="#">Sobre</a></div>
 					<div class="li"><a href="#">Contato</a></div>
 					<div class="li"><a href="#">Perfil</a></div>
 				</div>
 			</div>
 		</div>
 	</header>
 	<section>
 		<div class="container">
 			<div class="carousel slide" id="slideShow">
 				<ol class="carousel-indicators">
 					<li data-target="#slideShow" data-slide-to="0"></li>
 					<li data-target="#slideShow" data-slide-to="1"></li>
 					<li data-target="#slideShow" data-slide-to="2"></li>
 					<li data-target="#slideShow" data-slide-to="3"></li>
 				</ol>
 				<div class="carousel-inner">
 					<div class="carousel-item active">
 						<img src="assets/images/foto1.jpg" class="w-100" >
 					</div>
 					<div class="carousel-item">
 						<img src="assets/images/foto2.jpg" class="w-100">
 					</div>
 					<div class="carousel-item">
 						<img src="assets/images/foto3.jpg" class="w-100">
 					</div>
 					<div class="carousel-item">
 						<img src="assets/images/foto2.jpg" class="w-100">
 					</div>
 				</div>
 				<a class="carousel-control-prev" href="#slideShow" data-slide="prev">
 					<span class="carousel-control-prev-icon"></span>
 				</a>
 				<a class="carousel-control-next" href="#slideShow" data-slide="next">
 					<span class="carousel-control-next-icon"></span>
 				</a>
 			</div>
 		</div>
 	</section>
			

			
		
	
	
	




	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script>
	
</body>
</html>
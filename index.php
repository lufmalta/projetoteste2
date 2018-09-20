<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css">
	<title>Projeto Bootstrap 4</title>
	<style type="text/css">		
		.carousel-item img {
			height:650px;
		}


	</style>
</head>
<body>
	
	<div class="container">
		<div id="slideShow" class="carousel slide">
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
					<img src="assets/images/foto2.jpg" class="w-100" >
				</div>
				<div class="carousel-item">
					<img src="assets/images/foto3.jpg" class="w-100" >
				</div>
				<div class="carousel-item">
					<img src="assets/images/foto4.jpg" class="w-100" >
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

			

			
		
	
	
	




	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script>
</body>
</html>
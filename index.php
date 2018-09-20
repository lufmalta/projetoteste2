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
	
	<div class="container" >
		<button class="btn btn-primary" data-toggle="modal" data-target="#janela">Clique aqui para abrir a janela</button>
		<div class="modal fade modal-dismissible" id="janela" role="modal">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header d-flex align-items-center">
						<h3 style="flex:12;text-align: center;">Carro novo</h3>
						<button style="flex:1;" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<img src="assets/images/foto1.jpg" class="w-100"  >
							</div>							
						</div>
						<hr/>
						<div class="row">
							<div class="col">
								<img src="assets/images/foto2.jpg"class="w-100"  >
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						<button class="btn btn-danger" data-dismiss="modal">Fechar Janela</button>
					</div>
				</div>
			</div>
		</div>
	</div>

			

			
		
	
	
	




	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script>
</body>
</html>
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
		<button class="btn btn-link" data-toggle="modal" data-target="#janela">Fazer Login</button>  
		<div class="modal fade modal-dismissible" id="janela" role="modal">
			<div class="modal-dialog  modal-lg">
				<div class="modal-content">
					<div class="modal-header d-flex align-items-center">
						<h3 style="flex:12;text-align: center;color:#CCC">Efetuar Login</h3>
						<button style="flex:1;" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST">
							<div class="form-group">								
								<label style="color:#CCC;" for="email" >Email:</label>
								<input class="form-control" id="email" type="email" name="email"/>
							</div>
							<div class="form-group">								
								<label style="color:#CCC;" for="senha" >Senha:</label>
								<input class="form-control" id="senha" type="password" name="senha"/>
							</div>
							<div class="form-group">
								<input class="btn btn-primary form-control" type="submit" value="Login"/>
							</div>
						</form>
										
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
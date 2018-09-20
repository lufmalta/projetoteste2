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
		<form method="POST">
			E-mail:<br/>
			<input type="email" name="email"/><br/>

			Senha:<br/>
			<input type="password" name="senha"/><br/><br/>

			<input type="submit" value="Entrar"/>
		</form>
		<hr/>

		<form method="POST">
			<div class="form-group"> <!-- se colocar aqui form-inline, os campos irao ficar um do lado do outro e n䯠um embaixo do outro -->
				<label for="email">Email:</label>
				<input id="email" type="email" name="email" class="form-control" />
			</div>
			<div class="form-group">
				
				<input type="password" name="senha" class="form-control" placeholder="Senha"  />
			</div>
			<div class="form-group">
				<input class="btn btn-danger" type="submit" value="Entrar">
			</div>
			
			
			
		</form>
		<hr/>
		<form method="POST">
			<div class="form-row">
				<div class="col">
					<div class="form-group"> <!-- se colocar aqui form-inline, os campos irao ficar um do lado do outro e n䯠um embaixo do outro -->
						<input id="name" type="text" name="name" class="form-control" placeholder="Nome Completo:"/>
					</div>
				</div>
				<div class="col">					
					<div class="form-group"> <!-- se colocar aqui form-inline, os campos irao ficar um do lado do outro e n䯠um embaixo do outro -->
						<input id="email" type="email" name="email" class="form-control" placeholder="Email:"/>
					</div>
				</div>
				<div class="col">
					<div class="form-group">				
						<input type="password" name="senha" class="form-control" placeholder="Senha:"  />
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="col">
					<div class="form-group">
						<input class="btn btn-success" type="submit" value="Entrar">
					</div>
				</div>
			</div>
		</form>
		
	</div>	

			

			
		
	
	
	




	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script>
</body>
</html>
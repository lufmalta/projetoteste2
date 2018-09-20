<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css">
	<title>Projeto Bootstrap 4</title>
	<style type="text/css">
		.caixa{
			width:300px;
			height:300px;
			border:1px solid #CCC;
		}


	</style>
</head>
<body>
	
		<div class="container">
		<div class="table-responsive"> <!-- isso aqui serve para fazer uma barra de rolagem na tabela, quando n䯠couber mais na tela, evitando de n䯠aparecer todos os dados -->
				
			
			<table class="table table-striped"> <!-- existe tambꭠtable-dark(deixa invertido a cor, o branco se torna preto e o preto se torna branco), existe tambꭠtable-bordered, que faz colocar bordas entre as colunas e linhas. Existe tambꭠo table-striped que coloca uma linha sim e uma linha n䯠de cor de fundo. Existe tambꭠo table-hover, que quando passar por cima da linha ou coluna, ira ficar com uma cor de fundo. Existe tambꭠ table-sm que diminui o tamanho da tabela para small, pode usar o md, mas este ja 顯 padrao que vem na tabela -->
				<thead class="thead-light">
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>Sobrenome</th>
						<th>Idade</th>
					</tr>
				</thead>	
				<tbody class="">
					<tr>
						<td>1</td>
						<td>Luiz Fernando</td>
						<td>Malta Martins</td>
						<td>28</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Lanna</td>
						<td>Borges dos Santos Martins</td>
						<td>27</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Fulano</td>
						<td>de Tal</td>
						<td>25</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Ciclano</td>
						<td>de Tal</td>
						<td>22</td>
					</tr>
				</tbody>
				
			</table>
		</div>
	</div>

			

			
		
	
	
	




	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script>
</body>
</html>
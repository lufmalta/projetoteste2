<?php 
	require 'config.php';

?>
<html>
<head>
	<title>Usuarios</title>
	<meta charset="utf-8">
</head>
<body>
	<a style="margin-left:500px;" href="adicionar.php">Adicionar Usuário</a></br></br>
	<table border="0" width="100%">
		<tr>

			<th>Nome</th>
			<th>Email</th>
			<th>Ações</th>

		</tr>
		<?php
			$sql = "SELECT * FROM usuarios";
			$sql = $pdo->query($sql);
			if($sql->rowCount() > 0 ){
				foreach($sql->fetchAll() as $usuarios){
					echo '<tr>';
					echo '<td>'.$usuarios['nome'].'</td>';
					echo '<td>'.$usuarios['email'].'</td>';
					echo '<td><a href="editar.php?id='.$usuarios['id'].'">Editar</a></td>';
					echo '<td><a href="excluir.php?id='.$usuarios['id'].'">Excluir</a></td>';
					echo '</tr>'; 
				}
			}

		 ?>

	</table>
	

</body>
</html>
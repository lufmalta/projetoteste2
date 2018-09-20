<?php 
	$dsn = "mysql:dbname=testebanco;host=localhost";
	$dbuser = "root";
	$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$sql = "SELECT * FROM usuarios WHERE endereco = 'av 136'";
	$sql = $pdo->query($sql);

	if($sql->RowCount() > 0){ // RowCount é uma função q conta as linhas

		foreach($sql->fetchAll() as $usuarios) // fetchAll é uma função que pega todos os dados e coloca
		//em um array
			echo "Nome: ".$usuarios['nome']." - "."Endereço: ".$usuarios['endereco']."</br>";
	}else {
		echo "Não possui usuarios cadastrados";
	}
	
} catch(PDOException $e){
	echo "Conexão Falhou:".$e->getMessage();
}	

?>
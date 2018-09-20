<?php

class Banco{
	private $dsn;
	private $dbuser;
	private $dbpass;

	public function __construct($nome, $idade){
		$this->dsn = "mysql:dbname=projeto_oo_formulario;host=localhost";
		$this->dbuser = "root";
		$this->dbpass = "";
		$this->conectar($nome, $idade);
	}
	
	private function conectar($n, $i){
		try{

			$pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = $pdo->prepare("INSERT INTO usuarios SET nome = :nome,  idade = :idade");
			$sql->bindValue(":nome", $n);
			$sql->bindValue(":idade", $i);
			$sql->execute();
			$_POST['nome'] = "";
			$_POST['idade'] = "";
			header("Location: index.php");

		}catch (PDOException $e){
			echo "Erro conexao: ".$e->getMessage();
		}
	}
}



?>

<?php 
class Historico{
	private $pdo;
	private $dsn;
	private $dbuser;
	private $dbpass;

	public function __construct(){
		try{
			$this->dbuser = "root";
			$this->dbpass = "";
			$this->dsn = "mysql:dbname=projeto_logeventos;host=localhost";
			$this->pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
			$this->pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo "Falhou:".$e->getMessage();
		}
	}

	public function registrar($acao){
		$ip = $_SERVER['REMOTE_ADDR'];
		$sql = "INSERT INTO historico (ip, data_acao, acao) VALUES (:ip, NOW(), :acao)";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":ip", $ip);
		$sql->bindValue(":acao", $acao);
		$sql->execute();
		echo "Registro inserido com sucesso";
	}
}

?>
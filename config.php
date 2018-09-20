<?php 
class Banco{
	private $dsn;
	private $dbuser;
	private $dbpass;
	private $pdo;

	public function __construct(){
		$this->dsn = "mysql:dbname=projeto_filtrotabela;host=localhost";
	 	$this->dbuser = "root";
	 	$this->dbpass = "";
	 	try{
	 		$this->pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
	 		$this->pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
	 	}catch(PDOException $e){
	 		die($e->getMessage());
	 	}
	}
	public function getPdo(){
		return $this->pdo;
	}
}


	 

?>
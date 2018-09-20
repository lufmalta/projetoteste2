<?php

class  Config{
	private $dsn;
	private $dbuser;
	private $dbpass;
	private $pdo;

	public function __construct(){
		$this->dsn = "mysql:dbname=cadastros;host=localhost";
		$this->dbuser = "root";
		$this->dbpass = "";

		try{
			$this->pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
			$this->pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);			

		}catch(PDOException $e){
			echo "Erro: ".$e->getMessage();
		}

	}
	public function getPdo(){
		return $this->pdo;
	}
}


	
?>
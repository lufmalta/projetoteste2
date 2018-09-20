<?php 
/*
* Classe Config
* Nesta classe realiza a conexao com o banco de dados
*
* 
* @package ProjetoTeste2
* @author Luiz Fernando <lufmalta@gmail.com>
*/

class Config{
	private $dsn;
	private $dbuser;
	private $dbpass;
	private $pdo;

	public function __construct(){
		$this->dsn = "mysql:dbname=blog;host=localhost";
		$this->dbuser = "root";
		$this->dbpass = "";
		$this->createPdo();
	}

	private function createPdo(){
		$this->pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
		$this->pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
	}
	public function getPdo(){
		return $this->pdo;
	}

}

?>
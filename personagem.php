<?php 
require "conectaBanco.php";
class Personagem{
	private $nome;
	private $idade;

	public function __construct($nome, $idade){
		$this->nome = $nome;
		$this->idade = $idade;
		$this->inserirDados($this->getNome(), $this->getIdade());
	}
	public function getNome(){
		return $this->nome;
	}
		
	public function getIdade(){
		return $this->idade;
	}
	private function inserirDados($nome, $idade){
		$banco = new Banco($nome, $idade);
		//$banco->conectar($nome, $idade);
	}

}


?>
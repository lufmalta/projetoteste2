<?php 
require "config.php";
class Documentos{
	private $pdo;
	private $titulo;
	private $id;

	public function __construct($pdo){
		$this->pdo = $pdo;
	}
	public function getDocumentos(){
		$array = array();

		$sql = "SELECT * FROM documentos";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();

		}
		return $array;
	}

	public function adicionarDoc($new_titulo){

	}
	public function deletarDoc($id){

	}
	public function editarDoc($id){

	}
}
?>
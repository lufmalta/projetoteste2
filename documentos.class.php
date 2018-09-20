<?php 
class Documentos{
	private $id;
	private $titulo;
	private $lista;

	public function InserirDados($new_id, $new_titulo){
		$this->id  = $new_id;
		$this->titulo  = $new_titulo;
		
		//$this->lista = $new_id;

	}

	public function getDados(){
		return $this->lista;
	}
}
?>
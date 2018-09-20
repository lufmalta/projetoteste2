<?php 
 class Usuarios {
 	private $db;

 	public function __construct(){
 		try{
 			$this->db = new PDO("mysql:dbname=blog;host=localhost;", "root", "");
 			$this->db->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
 			echo "Conectou ao banco";
 		}catch(PDOException $e){
 			echo "Erro: ".$e->getMessage();
 		}
 	}

 	public function selecionar($id){ 
 		$sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
 		$sql->bindValue(":id", $id);// o value pega somente o valor de $id e coloca em :id
 		$sql->execute();

 		$array = array();
 		if($sql->rowCount() > 0 ){
 			$array = $sql->fetch();
 		}
 		return $array;

	}

	public function inserir($nome, $email, $senha){
		$sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha");
		$sql->bindParam(":nome",$nome);
		$sql->bindParam(":email",$email);// o param pega a variavel $email e coloca no :email
		$sql->bindValue(":senha",md5($senha));
		$sql->execute();
	}

	public function atualizar($nome, $email, $senha, $id){
		$sql = $this->db->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ?
		 WHERE id = ?");
		$sql->execute(array($nome, $email, md5($senha), $id));

	}

	public function excluir($id){
		$sql = $this->db->prepare("DELETE FROM usuarios WHERE id = ?");
		$sql->bindValue(1,$id);// o numero 1 significa que é a primeira interrogação da consulta
		// se colocar 2 por exemplo, sera a segunda interrogação que estiver dentro da consulta
		$sql->execute();
	}

 }
 	

?>
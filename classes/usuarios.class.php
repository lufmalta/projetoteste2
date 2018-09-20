<?php 
require "config.php";
class Usuarios{
	private $pdo;
	private $id;
	private $permissoes;

	public function __construct($pdo){
		$this->pdo = $pdo;
	}

	public function fazerLogin($email, $senha){

		$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":email",$email);
		$sql->bindValue(":senha",md5($senha));
		$sql->execute();

	if($sql->rowCount() > 0){
		$info = $sql->fetch();
		$_SESSION['logado'] = $info['id'];
		return true;
		exit;

	}
		return false;

  }// fim da funcao fazerLogin

  public function setUsuario($id){
  		$this->id = $id;

  		$sql = "SELECT * FROM usuarios WHERE id = ?";
  		$sql = $this->pdo->prepare($sql);
  		$sql->execute(array($id));

  		if($sql->rowCount() > 0){
  			$sql = $sql->fetch();
  			$this->permissoes = explode(',', $sql['permissoes']);
  			
  		}else {
  			header("Location: index.php");
  		}
  }

  

  public function temPermissao($p){
  	if(in_array($p, $this->permissoes)){
  		return true;
  	}else {
  		return false;
  	}
  }

}
?>
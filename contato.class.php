<?php 
class Contato{
	private $pdo;

	public function __construct(){
		try {

			$this->pdo = new PDO("mysql:dbname=crudoo;host=localhost", "root","");
			$this->pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
			
		}catch (PDOException $e){
			echo "Erro: ".$e->getMessage();
		}
		
	}
	public function adicionar($email, $nome = ''){
		if($this->existeEmail($email) == false){
			$sql = "INSERT INTO contatos (email, nome) VALUES (:email, :nome)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":email",$email);
			$sql->bindValue(":nome",$nome);
			$sql->execute();
			$_POST['email'] = "";
			$_POST['nome'] = "";
			header("Location:index.php");
		}else {
			return false;
		}
	}

	public function editar($nome, $email){
		if($this->existeEmail($email)){
			$sql = "UPDATE contatos SET nome = :nome WHERE email = :email";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":nome",$nome);
			$sql->bindValue(":email",$email);
			$sql->execute();
			return true;
		}else {
			return false;
		}
	}

	public function excluir($email){
		if($this->existeEmail($email)){
			$sql = "DELETE FROM contatos WHERE email = :email";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":email", $email);
			$sql->execute();

			return true;
		}else {
			return false;
		}
	}

	private function existeEmail($email){
		$sql = "SELECT email FROM contatos WHERE email = :email";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() > 0){
			return true;
		}else {
			return false;
		}
	}

	public function getNome($email){
		$sql = "SELECT nome FROM contatos WHERE email = :email";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() > 0){
			$info = $sql->fetch();
			echo $info['nome'];
		}else {
			return "";
		}
	}

	public function getAll(){
		$sql = "SELECT * FROM contatos";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0){

			return $sql->fetchAll();
			
		}else {
			return array();
		}
	}
}
?>
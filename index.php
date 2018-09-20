<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 

	class Humano{

		private $nome;
		private $carac;
		private $cidade;

	public function Adicionar($n, $carac, $cidade){
		$this->nome = $n;
		$this->carac = $carac;
		$this->cidade = $cidade;
	}

	public function Resposta(){
		echo $this->nome."</br>";
		echo $this->carac."</br>";
		echo $this->cidade;
	}	

}

$pessoa = new Humano();
$pessoa->Adicionar("Luiz", "Bonito", "Goiania");
//$pessoa->setNome("Fernando");
$pessoa->Resposta();

?>

	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
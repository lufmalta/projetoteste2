<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 
	abstract class Animal {
		private $nome;// é necessario iniciar a classe com abstract
		private $idade;

		abstract protected function andar();// quando cria essa funcao abstrata, obrigatoriamente deve-se criar essa funcao dentro das classes herdeiras.

		public function setNome($n){
			$this->nome = $n;
		}
		public function getNome(){
			return $this->nome;
		}
	}

	class Cavalo extends Animal{
		private $quantidade_patas;
		private $tipo_pelo;

		public function andar(){ //aqui esta a funcao que é obrigatoria fazer na classe herança

		}
	}
	class Gato extends Animal{
		private $quantidade_de_patas;
		private $miado;

		public function andar(){ //aqui esta a funcao que é obrigatoria fazer na classe herança

		}
	}

$cavalo = new Cavalo();
$gato = new Gato();
$gato->setNome("Gato 1");
$cavalo->setNome("Cavalo 1");

echo "O cavalo eh: ".$cavalo->getNome();	
echo "</br>O gato eh: ".$gato->getNome();

?>
	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
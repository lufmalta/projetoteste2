<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 
	class Personagem{
		private $nome;
		private $caracteristica;
	}
	class Guerreiro extends Personagem{
		private $atributos;
		private $classe;
		private $forca;
	}
	class Druida extends Personagem{
		private $atributos;
		private $classe;
		private $stamina;
	}
	class Mago  extends Personagem{
		private $atributos;
		private $classe;
		private $inteligencia;
	}

$warrior = new Guerreiro();
$warrior->nome = "Argoven";
echo $warrior->nome;


?>
	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
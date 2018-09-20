<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 
interface Personagem{

	public function andar();// pode colocar também os parâmetros se houver, exemplo: $x, $y.

}

class Guerreiro implements Personagem {

	public function andar(){
		echo "Estou andando....";
	}
}

$guerreiro = new Guerreiro();
$guerreiro->andar();

?>
	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
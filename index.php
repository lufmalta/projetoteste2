<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php

 class Cachorro {


 	public function latir(){
 		echo "Au au";
 	}
}

$cachorro = new Cachorro();
$cachorro->latir();


// se eu quiser usar a funcao sem criar uma instancia, é só usar este comando:
// Cachorro::latir(); -- todavia ele n tera nenhum objeto, apenas ira usar o método latir.

 ?>

	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
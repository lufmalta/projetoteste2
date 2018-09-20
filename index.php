<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 
 class Calculadora{
 	private $valor;

 	public function __construct($new_valor){
 		$this->valor = $new_valor;
 	}

 	public function Somar($new_valor){
 		$this->valor += $new_valor;
 		return $this; 
 	}
 	public function Subtrair($new_valor){
 		$this->valor -= $new_valor;
 		return $this;
 	}
 	public function Multiplicar($new_valor){
 		$this->valor *= $new_valor;
 		return $this;
 	}
 	public function Dividir($new_valor){
 		$this->valor /= $new_valor;
 		return $this;// esse comando deve usar para funcionar aquele comando la embaixo
 		//o  $calculadora->Somar(2)->Subtrair(3)->Multiplicar(5)->Dividir(2);, porque assim ele devolve o proprio objeto para ser usado para outro metodo.
 	}
 	public function Resultado(){
 		return $this->valor;
 	}
 	
 }

 $calculadora = new Calculadora(10);
 $calculadora->Somar(2)->Subtrair(3)->Multiplicar(5)->Dividir(2);
 $resultado = $calculadora->resultado();
 echo $resultado;

?>
	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
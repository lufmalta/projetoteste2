<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 
 class Personagem {
 	private $nome;

 	public function getNome(){
 		echo "Avante e ataque";// aqui tem o getNome da classe que o guerreiro ira herdar, quando usar o getNome, ele ira usar a funcao da classe que foi herdada
 	}
 }

 class Guerreiro extends Personagem{
 	
 	public function getNome(){
 		echo "Recue e Defenda";// agora se for criado uma funcao com o mesmo nome da classe que foi herdada, entao quando chamar o método getNome ira chamar o metodo da classe herdeira, que no caso é a classe guerreiro. isso se chama polimorfismo, quando um metodo da classe herdeira substitui um da classe herdada.
 	}

 }

$guerreiro = new Guerreiro();
echo $guerreiro->getNome();


?>
	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
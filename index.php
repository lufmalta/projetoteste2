<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 

class Humano {
  
  public function trocarSenha($senhaAtual, $novaSenha){
    // conectar ao banco de dados
    // verificar se a senha atual esta correta
    // trocar a senha
  
  }
  
  private function ConectarBanco() {
    //apenas pode ser acessada por outras funcoes que estao nesta class Humano.
  }
  
  protected function algumaCoisa() {
    //pode ser acessada por funcoes dentro dessa class ou pelas class extendidas(herança) de Humano
  }
}

?>

	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
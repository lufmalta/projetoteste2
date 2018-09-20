<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 
	class Post{
		private $titulo;
		private $data;
		private $corpo;
		private $comentarios;
		private $qtComentarios;	

	public function addComentarios($msg){
		$this->comentarios[] = $msg; 
		$this->ContarComentarios();
	}

	public function getQtComentarios(){
		return $this->qtComentarios;
	}
	private function ContarComentarios(){
		$this->qtComentarios = count($this->comentarios);
	}
}

$post = new Post();
$post->addComentarios("Teste 1");
$post->addComentarios("Teste 2");
$post->addComentarios("Teste 3");
$post->addComentarios("Teste 4");
$post->addComentarios("Novo comentario");

echo "Quantidade de comentarios: ".$post->getQtComentarios();

?>

	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
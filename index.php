<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 
	class Post{
		private $titulo;
		private $data;
		private $corpo;
		private $comentarios;

	public function __construct(){
		$this->titulo = "Titulo nao definido";
		$this->data = "Data nao definida";
		$this->corpo = "Corpo nao definido";
		$this->comentarios =  "Corpo nao definido";
	}	

	public function setTitulo($t){
		if(is_string()){
			$this->titulo = $t;
		}
		 
	}	
	public function getTitulo(){
		return $this->titulo;
	}
}

$post = new Post();
echo $post->getTitulo();

?>

	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
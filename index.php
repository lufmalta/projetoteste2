<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Orientado a objetos</title>
	</head>
	<body>
		
	</body>
</html>
<?php 
	class Post {
		private $titulo;
		private $data;
		private $corpo;
		private $comentarios;

	public function getTitulo(){
		return $this->titulo;
	}

	public function getData(){
		return $this->data;
	}

	public function getCorpo(){
		return $this->corpo;
	}

	public function getComentarios(){
		return $this->comentarios;
	}

	public function setTitulo($t){
		$this->titulo = $t;
	}

	public function setData($dt){
		$this->data = $dt;
	}

	public function setCorpo($corp){
		$this->corpo = $corp;
	}

	public function setComentarios($coment){
		$this->comentarios = $coment;
	}

	}

$post = new Post();
$post->setTitulo("novo titulo");
$post->setData("11/07/1990");
$post->setCorpo("Este é espaço");
$post->setComentarios("Nao tem nada aqui");

echo "Titulo: ".$post->getTitulo()."</br> Data: ".$post->getData()."</br> Corpo: ".$post->getCorpo().
"</br> Comentarios: ".$post->getComentarios();	


?>

	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
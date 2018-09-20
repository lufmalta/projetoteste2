<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4-css/bootstrap.min.css"> -->

<?php 
require "paginacao.class.php";

if(!empty($_GET['limit']) && !empty($_GET['pgAtual']) ){
	$limit =  addslashes($_GET['limit']);
	$pgAtual = addslashes($_GET['pgAtual']);
	$paginacao = new Paginacao($limit, $pgAtual);

}else {
	$paginacao = new Paginacao();
}


?>
	<!-- <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap4-js/bootstrap.bundle.min.js"></script> -->
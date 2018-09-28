<?php 
if(isset($_POST['somar'])){
	$tipo = "Somar";
	//$_POST['tipo'] = $tipo;
}else if(isset($_POST['subtrair'])){
	$tipo = "Subtrair";
}else if(isset($_POST['multiplicar'])){
	$tipo = "Multiplicar";
}else if(isset($_POST['dividir'])){
	$tipo = "Dividir";
}

?>

<?php 
	require "classes/calculadora.class.php";
	//exit;


	//$tipo = $_POST['tipo'];

	$v1 = $_POST['valor1'];// pega o valor de v1
	$v2 = $_POST['valor2'];// pega o valor de v2
	//$tipo = addslashes($_GET['tipo']); // guarda o tipo de calculo
	//echo $tipo;
	$calcular = new Calculadora(); // instancia um objeto na calculadora
	$calcular->$tipo($v1, $v2); // executa o metodo do tipo selecionado, enviando os valores
	echo $calcular->getResul(); // mostra na tela a resposta do calculo



?>
<br/>
<a href="index.php">Voltar</a>
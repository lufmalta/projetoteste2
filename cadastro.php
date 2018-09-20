<?php 
require "config.php";
$h = $_GET['h'];

$sql = $pdo->query("UPDATE usuarios SET status = '1' WHERE MD5(id) = '$h'");

echo '<h2>Confirmado com sucesso</h2>';

?>
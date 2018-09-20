<?php 
session_start();
require 'config.php';


$sql = $pdo->prepare("DELETE FROM historico WHERE id_conta = :id_conta");
$sql->bindValue("id_conta", $_SESSION['caixa_banco']);
$sql->execute();
header("Location: index.php");
exit;
?>
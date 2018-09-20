<?php 
session_start();
unset($_SESSION['caixa_banco']);
header("Location: index.php");
exit;
?>

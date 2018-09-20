<?php 
session_start();
unset($_SESSION['logado']);
unset($_SESSION['permissao']);
header("Location: index.php");
exit;
?>
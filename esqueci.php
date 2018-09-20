<?php 
require "config.php";

if(!empty($_POST['email'])){
	$email = addslashes($_POST['email']);
	$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
	$sql->execute(array($email));
	if($sql->rowCount() > 0 ){
		$sql = $sql->fetch();
		$id = $sql['id'];

		$token = md5(time().rand(0, 99999).rand(0, 99999));

		$sql = "INSERT INTO usuarios_token (id_usuario, hash, expirado_em ) VALUES (:id_usuario, :hash, :expirado_em)";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":id_usuario", $id);
		$sql->bindValue(":hash", $token);
		$sql->bindValue(":expirado_em", date('Y-m-d H:i', strtotime('+ 2 months')));
		$sql->execute();

		$link = "<a href='redefinir.php?token=$token'>".'http://localhost/projetoteste2/redefinir.php?token='.$token."</a>"; //definindo o link

		$mensagem = "Clique no link abaixo para redefinir a senha:<br/>".$link;//definindo a mensagem do email

		$assunto = "Redefinicao de Senha";
		$headers = "From: seuemail@hotmail.com"."\r\n".
				   "X-Mailer: PHP / ".phpversion();

		//mail($email, $assunto, $mensagem, $headers);
		//exit;	

		echo $mensagem;
		exit;	   

	}
}

?>
<form method="POST">
	Informe o seu Email:<br/>
	<input type="email" name="email"/><br/><br/>
	<input type="submit" value="Enviar"/>
</form>
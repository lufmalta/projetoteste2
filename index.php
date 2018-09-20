<?php 
	
	if(isset($_POST['nome']) && !empty($_POST['nome'])){

		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$msg = addslashes($_POST['msg']);

		$para = "lufmalta@gmail.com";
		$assunto = "Pergunta do Contato";
		$corpo = "Nome: ".$nome." - Email: ".$email." - Mensagem: ".$msg;
		$cabecalho = "From: palavradevidajesusnocentro@gmail.com"."\r\n".
					 "Reply-To: ".$email."\r\n".
					 "X-Mailer: PHP/".phpversion(); //é necessário usar  esses parâmetros, para
					 // o email não cair no spam ou no lixo eletrônico do email.
					 //a resposta para a pessoa, será baseada nesse cabecalho.

		mail($para, $assunto, $corpo, $cabecalho);

		echo "<h2>Email Enviado com Sucesso</h2>";
		exit;			 	
	}

?>




<html>
	<head>
		<title>Enviando E-mails</title>	
	</head>
	<body>
				
			<form method="POST" >
				
				Nome:</br>
				<input type="text" name="nome" /></br></br>
			
				E-mail:</br>
				<input type="email" name="email"  /></br></br>
			
				Mensagem:</br>
				<textarea name="msg"></textarea></br></br>

				<input type="submit" value="Enviar"/>

			</form>

	</body>
</html>
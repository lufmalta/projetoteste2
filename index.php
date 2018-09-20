<?php 

	$imagem = "fotocanal.png";


	list($largura_original, $altura_original) = getimagesize($imagem);
	list($largura_mini, $altura_mini) = getimagesize("cruz.png");

	$imagem_final = imagecreatetruecolor($largura_original, $altura_original);

	$imagem_original = imagecreatefrompng("fotocanal.png");
	$imagem_mini = imagecreatefrompng("cruz.png");

	imagecopy($imagem_final, $imagem_original, 0, 0, 0, 0,
	 $largura_original, $altura_original);

	imagecopy($imagem_final, $imagem_mini, 1200, 400, 0, 0,
		$largura_mini, $altura_mini);

	//header("Content-Type: image/png");
	//imagepng($imagem_final, "imagem_nova_tamanho.png"); Cria a imagem com o nome, 
	//neste caso a imagem tem duas imagem na mesma, sendo uma a marca d'agua.

	echo "Imagem criada com sucesso!";
?>
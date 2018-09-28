var vez = '3';
var marcacao = '3';
var campo;



$(function(){

	
	$('.placar img').attr('src', 'assets/images/foto'+vez+'.jpg');
	var img = $(this).find('img').attr('src');
	$('#reiniciar').attr('disabled','');


	$('.campo').bind('click', function(){
		var selecionado = $(this).attr('data-marcado');
		if(selecionado == ''){

			$(this).html('<img/>');			
			$(this).find('img').attr('style', 'padding:15px;width:100px;border:0px;');
			$(this).find('img').attr('src', img);
			$(this).attr('data-marcado', vez);

			if(vez == 3){
				$(this).find('img').attr('src', 'assets/images/foto'+vez+'.jpg' );
				vez = 4;
				
			}else if(vez == 4) {
				$(this).find('img').attr('src', 'assets/images/foto'+vez+'.jpg' );
				vez = 3;
				
			}
			for($i = 0; $i <= 1; $i ++ ){
				
				if($('.a1').attr('data-marcado') == marcacao && $('.a2').attr('data-marcado') == marcacao &&
				 $('.a3').attr('data-marcado') == marcacao  ){
					if(marcacao == '3'){
						alert("Carro Laranja ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						//campo = '';						
						//$('.campo').html(campo);
					}else if(marcacao == '4'){
						alert("Carro Prata ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}
					
				}else if($('.b1').attr('data-marcado') == marcacao && $('.b2').attr('data-marcado') == marcacao &&
				 $('.b3').attr('data-marcado') == marcacao  ){
					if(marcacao == '3'){
						alert("Carro Laranja ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}else if(marcacao == '4'){
						alert("Carro Prata ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}
				}else if($('.c1').attr('data-marcado') == marcacao && $('.c2').attr('data-marcado') == marcacao &&
				 $('.c3').attr('data-marcado') == marcacao  ){
					if(marcacao == '3'){
						alert("Carro Laranja ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}else if(marcacao == '4'){
						alert("Carro Prata ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}
				}else if($('.a1').attr('data-marcado') == marcacao && $('.b2').attr('data-marcado') == marcacao &&
				 $('.c3').attr('data-marcado') == marcacao  ){
					if(marcacao == '3'){
						alert("Carro Laranja ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}else if(marcacao == '4'){
						alert("Carro Prata ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}
				}else if($('.a3').attr('data-marcado') == marcacao && $('.b2').attr('data-marcado') == marcacao &&
				 $('.c1').attr('data-marcado') == marcacao  ){
					if(marcacao == '3'){
						alert("Carro Laranja ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}else if(marcacao == '4'){
						alert("Carro Prata ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}
				}else if($('.a1').attr('data-marcado') == marcacao && $('.b1').attr('data-marcado') == marcacao &&
				 $('.c1').attr('data-marcado') == marcacao  ){
					if(marcacao == '3'){
						alert("Carro Laranja ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}else if(marcacao == '4'){
						alert("Carro Prata ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}
				}else if($('.a2').attr('data-marcado') == marcacao && $('.b2').attr('data-marcado') == marcacao &&
				 $('.c2').attr('data-marcado') == marcacao  ){
					if(marcacao == '3'){
						alert("Carro Laranja ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}else if(marcacao == '4'){
						alert("Carro Prata ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}
				}else if($('.a3').attr('data-marcado') == marcacao && $('.b3').attr('data-marcado') == marcacao &&
				 $('.c3').attr('data-marcado') == marcacao  ){
					if(marcacao == '3'){
						alert("Carro Laranja ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}else if(marcacao == '4'){
						alert("Carro Prata ganhou!!!");
						window.location.href="index.php";
						$i = 1;
						// campo = '';						
						// $('.campo').html(campo);
					}
				}else if($('.a1').attr('data-marcado') != '' && $('.a2').attr('data-marcado') != '' &&
				 $('.a3').attr('data-marcado') != '' && $('.b1').attr('data-marcado') != ''
				 && $('.b2').attr('data-marcado') != '' && $('.b3').attr('data-marcado') != ''
				 && $('.c1').attr('data-marcado') != ''  && $('.c2').attr('data-marcado') != ''
				 && $('.c3').attr('data-marcado') != ''){
					alert('Deu velha!!!');
					window.location.href="index.php";
					$i = 1;
				}

				if(marcacao == '3'){
					marcacao = '4';
				}else {
					marcacao = '3';
				}

			}
			
		}
		$('.placar img').attr('src', 'assets/images/foto'+vez+'.jpg');
	
	});

});




























$(function(){

	$('#senha').bind('keyup', function(){

		var txt = $(this).val();
		var forca = 0;
		
		//$('#forca').html(txt); 

		//letras
		//numeros
		//caracteres especiais
		//min de caracteres
		if(txt.length > 15){
			forca += 20;
		}
		if(txt.length > 6){
			forca += 20;
		}

		var reg = new RegExp(/[a-z]/i);

		if(reg.test(txt)){
			forca += 20;
		}

		var reg = new RegExp(/[0-9]/i);

		if(reg.test(txt)){
			forca += 20;
		}

		var reg = new RegExp(/[^a-z0-9]/i);
		if(reg.test(txt)){
			forca += 20;
		}
		if(forca == 0){

		}else if(forca == 20){
			$('#forca').html('Senha: '+'<span style="color:red;">Muito fraca</span> ' + ' - <span style="color:red;"> Nao Aceita</span>');
		}else if(forca == 40){
			$('#forca').html('Senha: '+'<span style="color:red;">Fraca</span> ' + '- <span style="color:red;"> Nao Aceita</span>');
		}else if(forca == 60){
			$('#forca').html('Senha: '+'<span style="color:green;"> Media</span> ' + '- <span style="color:green;"> Aceita</span>');
		}else if(forca == 80){
			$('#forca').html('Senha: '+'<span style="color:green;"> Forte</span> ' + '- <span style="color:green;"> Aceita</span>');
		}else if(forca == 100){
			$('#forca').html('Senha: '+'<span style="color:green;"> Muito forte</span> ' + '- <span style="color:green;"> Aceita</span>');
		}

	});

});
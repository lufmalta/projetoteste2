$(function(){

	$('a.galeria').bind('click', function(){
		var caminho = $(this).find('img').attr('src');
		$('.divbox img').attr('src', caminho);

		$('.bgbox, .divbox').fadeIn('fast');	

	});

	$('.bgbox, .divbox button').bind('click', function(){

			$('.bgbox, .divbox').fadeOut('fast');


	});
});



























// $(function(){

// 	$('#objeto').bind('mousedown', function(){

// 		$('#objeto').bind('mousemove', function(e){

// 		var x = e.originalEvent.pageX;	
// 		var y = e.originalEvent.pageY;


// 		var width = $(this).width();
// 		var height = $(this).height();

					
// 			//console.log(e.originalEvent.pageY);// para olhar isso é só mandar aparecer no
// 			// console.log o 'e' e depois entrar nele e descobrir a pagex e pagey
// 			$(this).css('left', (x - (width/2)) +'px' );
// 			$(this).css('top', (y - (height/2)) +'px');
// 		});

// 	});

// 	$('#objeto').bind('mouseup', function(){

// 		$('#objeto').unbind('mousemove');
// 	});

// });
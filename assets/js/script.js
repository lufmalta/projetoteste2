$(function(){

	$('#objeto').bind('mousedown', function(){

	 $('#objeto').bind('mousemove', function(e){

	 	var x = e.originalEvent.pageX;
	 	var y = e.originalEvent.pageY;

	 	var width = $(this).width();
	 	var height = $(this).height();

	 	$('#objeto').css('left', (x -(width/2)) + 'px');
	 	$('#objeto').css('top', (y -(height/2) )+ 'px');

	 });

	});

	$('#objeto').bind('mouseup', function(){

		$('#objeto').unbind('mousemove');

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
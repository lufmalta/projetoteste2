// $(function(){

// 	$('.icone').hover(function(){
// 		$(this).width(100);
// 		$(this).height(100);
// 		$(this).attr('style','margin-top:-30px;');

// 	}, function(){
// 		$(this).height(70);
// 		$(this).attr('style','margin-top:0px;');
// 	});

// }); //ambos funcionam, mas esse nao faz um efeito legal igual o animate

$(function(){

	$('.icone').hover(function(){
		$(this).animate({
			"width":100,
			"height":100,
			"margin-top":-30
		}, 200);
	}, function(){
		$(this).animate({
			"width":70,
			"height":70,
			"margin-top":0
		}, 200);
	});
});
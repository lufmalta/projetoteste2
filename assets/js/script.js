
function addBola(){

	var x = Math.floor(Math.random()*800);
	var y = Math.floor(Math.random()*500);
	var cores = ['A','B','C','D','E','F','1','2','3','4','5','6','7','8','9'];
	var numCor;
	var cor = '#';
	for($i=0;$i <= 5; $i++ ){
		numCor = (Math.floor(Math.random()*14));
		cor = cor + cores[numCor];

	}	


	var bola = $('<div class="bola"></div>');
	bola.css('left',x+'px');
	bola.css('top',y+'px');
	bola.css('background-color',cor);

	bola.bind('click', function(){

		$(this).fadeOut('fast');
		placar++;
		updatePlacar();


	});

	$(document.body).append(bola);

}

var placar = 0;
var comecar;
var parar;
$(function(){
	$('#comecar').bind('click', function(){
		comecar = setInterval(addBola, 1000);
		$('#comecar').attr('disabled', 'disabled');
		$('#parar').removeAttr('disabled');

	});

	$('#parar').bind('click', function(){

		parar = clearInterval(comecar);
		$('#parar').attr('disabled', 'disabled');
		$('#comecar').removeAttr('disabled');

	});

});
function updatePlacar(){
	$('#placar').html(placar);
}
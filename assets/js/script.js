function clicouTeclado(event){
	console.log("Clicou tecla: " +event.keyCode);
}
function soltouTecla(event){
	console.log("Soltou Tecla"+event.keyCode);
}
function apertouTecla(event){
	console.log("Apertou tecla" +event.keyCode);
	if(event.shiftKey == true && event.keyCode == 69){
		console.log("Clicou o botao shift + o E");
	}
}
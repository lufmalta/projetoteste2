
var intervalo = setInterval(addBola, 1000);

function parar(){
	clearInterval(intervalo);
}
function addBola(){
	var bola = document.createElement("div");
	bola.setAttribute("class", "bola");
	var p1 = Math.floor(Math.random() * 1000);
	var p2 = Math.floor(Math.random() * 350);
	var selecionarCor = "#";
	var colorir = null;
	for(var i = 0;i <= 5;i++){
		colorir = Math.floor(Math.random() * 10);
		selecionarCor =  selecionarCor + colorir;
	}
	bola.setAttribute("style","background-color:"+selecionarCor+";left:"+p1+"px;top:"+p2+"px;");
	bola.setAttribute("onclick","estourar(this)");
	document.body.appendChild(bola);
}
function estourar(elemento){
	document.body.removeChild(elemento);
}
function voltar(){
	intervalo = setInterval(addBola, 1000);
}
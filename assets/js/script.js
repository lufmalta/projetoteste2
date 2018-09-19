var interval = setInterval(addBola, 1000);

function addBola(){
	var bolinha = document.createElement("div");
	bolinha.setAttribute("class", "bola");
	var p1 = Math.floor(Math.random() * 900);
	var p2 = Math.floor(Math.random() * 400);
	var arrayCores = ["A","B","C","D","E","F","0","1","2","3","4","5","6","7","8","9"];
	var cor = null;
	var coresSelect = "#";
	for(i = 0;i <= 5; i++){
		cor = Math.floor(Math.random() * 16);
		coresSelect = coresSelect + arrayCores[cor];
	}
	bolinha.setAttribute("style","background-color:"+coresSelect+";left:"+p1+"px;top:"+p2+"px;");
	bolinha.setAttribute("onclick","estourar(this)"); 
	document.body.appendChild(bolinha);
}
function estourar(elemento){
	document.body.removeChild(elemento);
}
function parar(){
	clearInterval(this.interval);
	document.getElementById('voltar').disabled = false;
}
function voltar(){
	interval = setInterval(addBola, 1000);
	document.getElementById('voltar').disabled = true;
}
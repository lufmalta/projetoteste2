function apagarTexto(){
	var campTexto = document.getElementById("campoTexto").value;
	campTexto = "";
	document.getElementById("campoTexto").value = campTexto;
	sumirApagar();
}
function mostrarApagar(){
	var apagar = document.getElementById("texto").style.display;
	apagar = "block";
	document.getElementById("texto").style.display = apagar;
}
function sumirApagar(){
	var apagar = document.getElementById("texto").style.display;
	apagar = "none";
	document.getElementById("texto").style.display = apagar;
}
function quandoMudar(obj){
	console.log("Mudou para: "+obj.value);
}
function focou(){
	console.log("Focou!");
}
function saiuFoco(){
	console.log("Saiu do foco");
}
function apertouSubmit(){
	document.write("Enviou formulário");
}
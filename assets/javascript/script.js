function somar(){
	var camp1 = parseInt(document.getElementById("campo1").value);
	var camp2 = parseInt(document.getElementById("campo2").value);
	var resultado = camp1 + camp2;
	alert("A soma dos dois campos é: "+resultado);
	document.getElementById("campo1").value = "";
	document.getElementById("campo2").value = "";
}
function subtrair(){
	var camp1 = parseInt(document.getElementById("campo1").value);
	var camp2 = parseInt(document.getElementById("campo2").value);
	var resultado = camp1 - camp2;
	alert("A subtração dos campos é: "+resultado);
	document.getElementById("campo1").value = "";
	document.getElementById("campo2").value = "";
}
function multiplicar(){
	var camp1 = parseInt(document.getElementById("campo1").value);
	var camp2 = parseInt(document.getElementById("campo2").value);
	var resultado = camp1 * camp2;
	alert("A multiplicação é: " +resultado);
	document.getElementById("campo1").value = "";
	document.getElementById("campo2").value = ""; 
}
function dividir() {
	var camp1 = parseInt(document.getElementById("campo1").value);
	var camp2 = parseInt(document.getElementById("campo2").value);
	var resultado = camp1 / camp2 ;
	alert("A divisão é: " +resultado);
	document.getElementById("campo1").value = "";
	document.getElementById("campo2").value = "";
}
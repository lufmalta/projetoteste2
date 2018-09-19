function mudarTexto(nome, idade){	
	var area  = document.getElementById("area");
	var texto = prompt("qual o seu sobrenome?");
	area.innerHTML = nome + " "+ texto + " E tem idade de " + idade + "anos";
}

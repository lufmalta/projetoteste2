function mudarNumero(){
	var n1 = document.getElementById("n1").innerHTML;
	var n2 = document.getElementById("n2").value;

	if(n1 == n2){
		alert("Parabens, voce acertou");
		document.getElementById("n2").value = "";
		
	}else if(n2 == "") {
		alert("é necessario digitar algum numero");
		document.getElementById("n2").value = "";

	}else{
		alert("Infelizmente voce errou");
		document.getElementById("n2").value = "";
	}
	resetar();
}

function resetar(){
	var numalea =  Math.floor(Math.random () * 100);//math random pega um n򭥲o aleatorio qualquer
		//e o valor esta entre 0 e 10, todavia 页m numero real e n㡩nteiro
		//o comando Math.floor faz o numero virar inteiro.
		document.getElementById("n1").innerHTML = numalea;
}
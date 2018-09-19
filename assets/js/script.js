function validar() {
	var text = document.getElementById("texto").value;
	if(text.length == ""){
		alert("esta vazio");
		return false;
	}else if(text.length == 2){
		alert("esta preenchido");
		return true;
	}else {
		alert("precisa ter 2 algarismos, nada menos e nada mais do que isto.");
		return false;
	}
}
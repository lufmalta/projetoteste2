function eventoMostrar(){
		var tipo = document.getElementById("senha").type;
		if(tipo == "password"){
			document.getElementById("senha").type = "text";
			document.getElementById("mosSenha").innerHTML = "ESCONDER";
			document.getElementById("mosSenha").style.marginLeft = "140px";
		}else {
			document.getElementById("senha").type = "password";
			document.getElementById("mosSenha").innerHTML = "MOSTRAR";
			document.getElementById("mosSenha").style.marginLeft = "145px";
		}
	 
}
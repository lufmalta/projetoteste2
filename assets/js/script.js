function Animal(){
	this.nome = "";
	this.idade = 0 ;
	this.peso = 6;
	this.raca = "";

	this.fazerXixi = function(){
		console.log("Xiiiii"); // escreve no console da pagina ja o document.write escreve
		//no body da tela.
	}
	this.comer = function (kg){
		for(var i = 0;i<kg;i++){
			this.mastigar(i);
		}
		console.log("Hum....");
		this.peso = this.peso + kg;
	}

	this.mastigar = function(i){
		console.log(i+"- Nhoc....");
	}

}

var cachorro = new Animal();
cachorro.nome = "Oliver";
cachorro.idade = 1;
cachorro.raca = "Cachorro";
cachorro.comer(10);


var xuxu = new Animal();
xuxu.raca = "Gato";
xuxu.idade = 2;
xuxu.nome = "Mel";
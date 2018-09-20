<?php 
class Calculadora{
	private $valor1;
	private $valor2;
	private $resul;

	public function __construct(){
		$this->valor1 = 0.0;
		$this->valor2 = 0.0;
		$this->resul = 0.0;
	}
	public function getResul(){
		return $this->resul;
	}
	public function Somar($v1, $v2){
		$this->valor1 = $v1;
		$this->valor2 = $v2;
		$this->CalcSomar($v1, $v2); 

	}
	public function Subtrair($v1, $v2){
		$this->valor1 = $v1;
		$this->valor2 = $v2;
		$this->CalcSubtrair($v1, $v2);
	}
	public function Multiplicar($v1, $v2){
		$this->valor1 = $v1;
		$this->valor2 = $v2;
		$this->CalcMultiplicar($v1, $v2);
	}
	public function Dividir($v1, $v2){
		$this->valor1 = $v1;
		$this->valor2 = $v2;
		$this->CalcDividir($v1, $v2);
	}



	private function CalcSomar($v1, $v2){
		$this->resul = $v1 + $v2;

	}
	private function CalcSubtrair($v1, $v2){
		$this->resul = $v1 - $v2;
	}
	private function CalcMultiplicar($v1, $v2){
		$this->resul = $v1 * $v2;
	}
	private function CalcDividir($v1, $v2){
		$this->resul = $v1 / $v2;
	}
}
?>

<?php 
include 'config.php';
/*
* Classe Paginacao
* Nesta classe mostra todos os posts do banco, separando de 10 em 10 por pagina.
*
* 
* @package ProjetoTeste2
* @author Luiz Fernando <lufmalta@gmail.com>
*/
class Paginacao{
	private $id;
	private $titulo;
	private $corpo;
	private $lista; // lista com os posts
	private $qtdPosts; // quantidade de posts no banco
	private $limitPag; // limite posts por pagina
	private $pg; // quantidade de páginas

	public function __construct($limitDados = 0 , $pgAtual = 0){
		$this->id = 0;
		$this->titulo = "";
		$this->corpo = "";
		if(!empty($limitDados) && !empty($pgAtual) ){

			$this->preenchLista($limitDados, $pgAtual);
			
		} else {
			$this->preenchLista();
		} 
		
	}

	public function setPg($qtPaginas){
		 $this->pg = ceil($qtPaginas / 10); // aqui pega o numero de paginas que havera, proporcional ao numero de posts, lembrando que só pode ter 10 posts por pagina, entao por isso o comando ceil, pois se tiver 1002 posts, dividindo por 10 da 100,2 ou seja os 2 posts quebrados nao irao apacerer porque nao foi criado uma pagina para eles, por isso é necessario usar o ceil, assim cria uma pagina a mais quando sair quebrado o valor.
	}
	public function getPg(){
		return $this->pg;
	}
	public function setQtdPosts($qtPost){
		$this->qtdPosts = $qtPost;

	}
	public function setLimitPag($LimitPag){
		$quantidade = $this->calcLimitPg($LimitPag);
		$this->limitPag = $quantidade; // guarda o limite por pagina

	}
	public function getLimitPag(){
		return $this->limitPag;
	}

	private function preenchLista($limitDados = 0, $pgAtual = 0){
		$banco = new Config();	
		$sql = "SELECT COUNT(*) as c FROM posts";
		$sql = $banco->getPdo()->prepare($sql);
		$sql->execute();
		if($sql->rowCount() > 0){
			$sql = $sql->fetch();
			$this->setQtdPosts($sql['c']);// no $sql['c'] tem o valor total de postagens
			$this->setLimitPag($sql['c']);
			$this->setPg($sql['c']);
		}// fim do if rowcount


		$limit = $this->getLimitPag();
		if($pgAtual == 1){
			$sql = "SELECT * FROM posts LIMIT 10  ";
			$sql = $banco->getPdo()->prepare($sql);
			$sql->execute();
		}else {
			$sql = "SELECT * FROM posts LIMIT $limitDados , 10  "; // preciso fazer os dados que estiverem menor do que 10 posts aparecerem na ultima pagina
			$sql = $banco->getPdo()->prepare($sql);
			$sql->execute();
		}
		
		if($sql->rowCount() > 0){
			$sql = $sql->fetchAll();
			$this->lista[] = $sql;

			foreach($sql as $lista){
				echo $lista['id']." - ".$lista['titulo']. " - ".$lista['corpo']."<br/>";
			} // fim do foreach
			echo "<br/>";
		} // fim do if rowCount	
		for($i = 1; $i <= $this->getPg(); $i++ ){
	
			if($i == 1){
				$pgAtual = $i;
				echo "<a href='index.php?pgAtual=$pgAtual&limit=$limit' style='text-decoration:none;' >".'['.$i.']'.'</a>';
				$limit = 10;
			}else{
				$pgAtual = $i;
				echo "<a href='index.php?pgAtual=$pgAtual&limit=$limit' style='text-decoration:none;' >".'['.$i.']'.'</a>';
				$limit += 10;
			}// fim do else		
		}// fim do for		

	}// fim do metodo auxiliar preencherLista

	private function calcLimitPg($LimitPag){
		$LimitPag = $LimitPag / ($LimitPag / 10);
		return $LimitPag; //aqui guarda o valor 10, que é o numero de posts por pagina suportado
	}// fim metodo auxiliar calcLimitPg
	

}//fim da classe
?>
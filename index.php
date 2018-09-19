<?php
	$nomes = array(
				array("nome"=>"Luiz Fernando",
					"qualidade"=>"forte",
					"humor"=>"engraçado",
					"idade"=>27),
				array( "nome"=>"Lanna",
					"qualidade"=>"fraco",
					"humor"=>"engraçado",
					"idade"=>27),
				array("nome"=>"Paulo",
					"qualidade"=>"alto",
					"idade"=>24,
					"humor"=>"legal"),
				array("nome"=>"Henrique",
					"qualidade"=>"gordo",
					"humor"=>"honesto",
					"idade"=>30
					)
				);
	foreach($nomes as  $lista){
		echo "Nome: ".$lista["nome"]."</br>"."Qualidade: ".$lista["qualidade"]."</br>"."Humor: ".$lista["humor"]."</br>"."Idade: ".$lista["idade"]."</br>";
	}
 ?>
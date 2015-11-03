<?php


/*
* Arquivo de funcoes: funções de uso geral em nossa aplicação
*/
	
	/*
	* Função que calcula o quadrado de um numero passado por parametro
	*/

	function quadrado($num, $escreve = false){
		//se o parametro escreve for false retornamos o valor, 
		// se for true escrevemos o valor na tela
		
		$resultado = $num * $num;
		
		if($escreve == false){
			return $resultado;
		}else{
			echo $resultado;	
		}	
	}
	
	function concatenar($string1, $string2){
		return $string1.$string2;
	}
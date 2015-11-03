<?php

	$titulo = "Aula 11 - Curso de PHP Básico";
	$nome = "Jão Felipe";
	$idade = 18;
	$dataNascimento = "02/02/1994";
	
	$mensagem = "";
	
	if($idade < 20){
		$mensagem = "Jovem";
	}else{
		$mensagem = "Voce esta ficando idoloso";
	}
	
	//Calculando o quadrado de um numero
	
	$retorno = quadrado(4);
	$funcao =  "O quadrado de 4 é: ".$retorno;
	
	$contatenei = concatenar("João","Felipe");
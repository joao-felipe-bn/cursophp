<?php

	$titulo = "Aula 12 - Curso de PHP Básico";
	
	$array = array();
	
	$var1 = "ESTA é alguma frase";
	$var2 = "Esta é outra frase";
	$var3 = "ABCFEfgijklmno";
	
	// Tranformando a String em minusculo
	
 	$array[] = "VAR 1 em minusculo = ".strtolower($var1);
	
	// Tranformando a String em maiúsculo
	
	$array[] = "VAR 2 em maiúsculo = ".strtoupper($var2);
	
	// Exibir a posição de um elemento em uma string
	
	$array[] = "Posição do elemento 'é' na variável var2 = ".strpos($var2,"3");
	
	// utilizando strsplit
	
	$str_split = str_split($var3);
	
	//transformar explode
	
	$explode = explode(" ",$var2);
	
	// transformando implode 
	
	$implode = implode($explode,"_");
	
	// utilizando str_replace
	
	$array[] = str_replace("ESTA","Aquela", $var2);
	
<?php 
	
	// verifica se o arquivo txt ja existe, senao, cria o arquivo
	//file_exists("log.txt");
	
	//defina uma constante p o nome do nosso arquivo de log
	define("ARQUIVO_LOG", "log.txt");
	
	
	$log = @fopen(ARQUIVO_LOG,"x");
	
	//se for == false o arquivo de log la existe
	if($log == false){
		//o parametro a abri o arquivo e posiciona o ponteiro no final do mesmo
		$log = fopen(ARQUIVO_LOG,"a");
	}
	
	require_once("controller.php");

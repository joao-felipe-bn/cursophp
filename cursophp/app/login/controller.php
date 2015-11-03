<?php

	// Se o user estiver loga abrir o form de login
	//se o user estiver logado, mostrar o seu nome
	// e os parabens
	
	session_start();
	
	$titulo = "Aula 13 - Curso de PHP";
	
	if(isset($_GET['ac']) && $_GET['ac'] == "logout" && isset($_SESSION['usuario'])){
		setcookie("usuarioLogado","",time()-3600);
		unset($_SESSION['usuario']);
		unset($_COOKIE['usuarioLogado']);
	}
	
	
	if(isset($_POST['usuario']) && $_POST['usuario'] == "admin" && isset($_POST['senha']) && $_POST['senha'] == "123"){
		
		if(isset($_POST['lembrar']) && $_POST['lembrar'] == "1"){
			//criar um cookie que vai nos dizer que o usuario esta logado
			
			//user fica logado por 1 mes
			setcookie("usuarioLogado",$_POST['usuario'],time()+60*60*24*30);
		}
		
		$_SESSION['usuario'] = $_POST['usuario'];
		
		//escreve em nosso arquivo a dt horario e o IP
		fwrite($log,date("d/m/Y H:i:s")." ".$_SERVER['REMOTE_ADDR']." ".$_POST['usuario']."\r\n");
		
		
		
	}
	
	if(isset($_SESSION['usuario']) || isset($_COOKIE['usuarioLogado'])){
		if(isset($_COOKIE['usuarioLogado']))
			$_SESSION['usuario'] = $_COOKIE['usuarioLogado'];
		
		require_once("tmpl_administrativo.php");
	}else{
		require_once("tmpl_formularioLogin.php");
	}
	
	
	fclose($log);
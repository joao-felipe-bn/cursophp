<?php
	$logado = "";
	$mensagem = "";
	if( isset($_POST['btnLogar'])){
		
		if($_POST['usuario'] == "123" && $_POST['senha'] == "456"){
				$logado = $_POST['usuario'];
		}else{
			$mensagem = "Usuário e/ou senha incorretos ou inexistentes";
		}	
	}
	
	
	if(isset($_POST['btnLimpar'])){
		if($_POST['usuario'] != "" || $_POST['senha'] != ""){
			$_POST['usuario'] = "";
			$_POST['senha'] = "";
		}
	}
?>
<html>
	<head>
		<title>Aula  05 - Curso PHP</title>
	</head>
	<body>
	
	<?php
		if($logado != ""){
			echo "Seja bem vindo ".$logado;
		}else if($mensagem != ""){
			echo $mensagem;	
		}
	?>
		 <form method="post">
			<p>Informe o usuário:  <input type="text" name="usuario"/> </p>
			<p>Informe a senha: <input type="password" name="senha"/> </p>
			<p><input type="submit" value="Logar" name="btnLogar"></p>
			<p> <input type="submit" value="Limpar Campos" name="btnLimpar"> </p>
		 </form>
		 
	</body>
	
</html>
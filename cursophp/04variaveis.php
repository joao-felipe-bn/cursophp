<html>
	<head>
		<title>Aula 04 - Curso de PHP</title>
	</head>
	
	<body>
	
		<?php
			$idade = 21;
			$nome = "João Felipe";
			$habilitado = true;
			$valor = 100.00;
			$calculo = 1+2+3+4+5;
			$resultado = $calculo / 2;
			
			//constantes
			
			define("IDADE","18");
			define("URL", "http://devmedia.com.br")
		?>
	
			<p>Olá, me chamo <?=$nome?>, tenho <?=$idade?> anos. </p>
			
			<p>1+2+3+4+5 = <?=$calculo?></p>
			<p> calculo / 2 = <?=$resultado?> </p>
			
			<p><?=$idade?> + 1 = <?php echo $idade+3; ?></p>
			
			<p><?php echo $nome."1";?> </p> = Concatenação
			
			<p>Minha idade é: <?php echo IDADE;?></p>
			<p>Minha idade é: <?php echo IDADE;?></p>
			<p>Minha idade é: <?php echo IDADE;?></p>
			<p>Minha idade é: <?php echo IDADE;?></p>
			<p> <?php echo URL;?></p>
			

		</body>

</html>
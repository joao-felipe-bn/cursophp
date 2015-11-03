<html>
	<head>
		<title>Aula  09 - Curso PHP</title>
	</head>
	<body>
			
			<?php
				
				$nossoArray = array("Valor 1", "Valor 2", "Valor 3");
				
				$nossoArray[] = "valor 4";
				
				print_r($nossoArray);
				
				unset($nossoArray[1]);
				
				echo "<br/>";
				
				$nossoArray[2] = "Troquei o valor do indicie 2";
					
				print_r($nossoArray);
				
				$novoArray = array("devmedia" => "www.devmedia.com.br", "Google" => "www.google.com.br");
				
				echo "<br/>".$novoArray['Google'];
				
				$arrayMultinivel = array();
				
				$arrayMultinivel[0][1] = "valor 0 - 1";
				$arrayMultinivel[0][2] = "valor 0 - 2";
					
				echo "<br/>";
				
				print_r($arrayMultinivel);
			?>
	
	
	</body>
	
</html>
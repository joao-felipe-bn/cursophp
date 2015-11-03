<html>
	<head>
		<title>Aula  07 - Curso PHP</title>
	</head>
	<body>
		
		<p>Criar um codigo que liste os 100 primeiros numeros</p>
		
			
			<?php
			
			$contador = 1;
				while($contador <= 100){
					echo $contador."</br>";
					
					$contador ++;
					
					if($contador == 20){
						$contador++;
						continue;
					}
					
					echo "...";
		
					if($contador == 51){
						$contador = 52;
					}
				}
				
				echo "<hr />";
				$contador = 0;
				
				do{
					echo "Do While ".$contador;
					$contador++;
				} while($contador < 0);
				
			?>
	
		
	</body>
	
</html>
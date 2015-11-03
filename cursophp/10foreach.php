<html>
	<head>
		<title>Aula  10 - Curso PHP</title>
	</head>
	<body>
		
		<?php 
			$estrutura = array(
					array("João Felipe", "21", "03/05/1994", "São Paulo"),
					array("João Felipe", "21", "03/05/1994", "São Paulo"),
					array("João Felipe", "21", "03/05/1994", "São Paulo"),
					array("João Felipe", "21", "03/05/1994", "São Paulo"),
					array("João Felipe", "21", "03/05/1994", "São Paulo"),
					array("João Felipe", "21", "03/05/1994", "São Paulo"),
					array("João Felipe", "21", "03/05/1994", "São Paulo"),
					array("João Felipe", "21", "03/05/1994", "São Paulo")
					);
					
			echo "<table border ='1'>";
			echo "<tr><td>Nome</td><td>Idade</td><td>Data de Nascimento</td><td>Cidade</td></tr>";
			foreach($estrutura as $val1){
				//print_r($val1);
				echo "<tr>";
				foreach($val1 as $val2){
					echo "<td>".$val2."</td>";
				}
				echo "</tr>";
			}
			
			echo "</table>"
		?>
		
		
		
	</body>
	
</html>
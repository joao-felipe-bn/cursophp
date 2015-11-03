<html>
	<head>
		<title>Aula  07 - Curso PHP</title>
	</head>
	<body>
		
		<p>Criar um codigo que liste os 100 primeiros numeros</p>
		
		
		<?php
			/*
			for($x=1 ; $x <= 100 ; $x ++){
				
				echo $x." ";
			}
			*/
		?>
	
			<table width="100%" border="1">
				<tr>
					<td><h5>Código</h5></td>
					<td><h5>Nome</h5></td>
					<td><h5>Endereço</h5></td>
				</tr>
				
				<?php
					for($x = 1 ; $x<=50 ; $x ++){
				?>
				
				<tr>
					<td><?=$x?></td>
					<td>João Felipe</td>
					<td>Endereço</td>
				</tr>
				
				<?php
					}
				?>
				
			</table>
		
	</body>
	
</html>
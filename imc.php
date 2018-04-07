<!DOCTYPE HTML> 
<html>
	<form method="POST" action="registra_imc.php">
		<body>
			<?php
				include "funcoes.php";
				include "cabecalho.php";
			?>
		    <label>Digite seu nome:</label>
			<input type="text" name="nome"/>
			<label>Digite o seu peso:</label>
			<input type="number" name="peso" >
			
			<label>Digite sua altura:</label>
			<input type="number" name="alt" >
			
			<input type="submit" value="Enviar">
		</body>
	</form>	 	
</html>

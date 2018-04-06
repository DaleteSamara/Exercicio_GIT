
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Trabalho</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
	<?php
	
		// Lívia Ferreira
	
		if(empty($_POST)){
			include "form.inc";
		}
		else{
			
			include "gerar_calculo.php";
				
		}
		
	?>
	</body>
</html>



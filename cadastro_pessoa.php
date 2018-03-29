<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Cadastro Pessoa</title>
		<link rel="stylesheet" href="estilo.css">
	</head>
	<body>
		<div class="container">
			
			<?php
				include "funcoes.php";
				include "cabecalho.php";
				if(empty($_POST)){
					include "form_cadastro_pessoa.php";
				}else{
					ler_dados_pessoa();
				}
			?>	
		</div>
	</body>
</html>

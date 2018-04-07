<!--Júlia Neves--> 
<!--Atualização: Giovanna--> 

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
				}else if(!isset($_SESSION["contadorUsuario"])){
					// registra as variáveis na sessão
					$_SESSION["nomesUsuario"][0] = $_POST["nome"];
					$_SESSION["sexoUsuario"][0] = $_POST["sexo"];
					$_SESSION["emailUsuario"][0] = $_POST["email"];
					$_SESSION["dataUsuario"][0] = $_POST["data_nasc"];
					$_SESSION["cpfUsuario"][0] = $_POST["cpf"];
					$_SESSION["cidadesUsuario"][0] = $_POST["cidade"];
					$_SESSION["estadosUsuario"][0] = $_POST["estado"];
					$_SESSION["contadorUsuario"] = 0;	
				}else{
					$_SESSION["contadorUsuario"]++;
					$contador = $_SESSION["contadorUsuario"];
					$_SESSION["nomesUsuario"][$contador] = $_POST["nome"];
					$_SESSION["sexoUsuario"][$contador] = $_POST["sexo"];
					$_SESSION["emailUsuario"][$contador] = $_POST["email"];
					$_SESSION["dataUsuario"][$contador] = $_POST["data_nasc"];
					$_SESSION["cpfUsuario"][$contador] = $_POST["cpf"];
					$_SESSION["cidadesUsuario"][$contador] = $_POST["cidade"];
					$_SESSION["estadosUsuario"][$contador] = $_POST["estado"];
				}
				echo "<p><a href=\"index.html\"> Voltar ao menu <a/></p>";
			?>	
		</div>
	</body>
</html>

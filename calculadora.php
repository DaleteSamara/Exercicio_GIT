<!--Lívia Ferreira--> 
<!--Atualização: Giovanna--> 

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Trabalho</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<?php	
			include "funcoes.php";
			include "cabecalho.php";
		
			if(empty($_POST)){
				echo "<form method=\"post\" action=\"gera_calculo_calculadora.php\" >
					<legend>Calculadora</legend>
						<p>
							<label>Digite o primeiro número:</label>
							<input  type=\"number\" required name=\"num1\" id=\"num1\" />
						</p>
						<p>
							<label>Digite o segundo número:</label>
							<input  type=\"number\" required name=\"num2\" id=\"num2\"/>
						</p>
						<p>
							<select name=\"operacao\" id=\"operacao\">
								<option value=\"adicao\">Adição</option>
								<option value=\"sub\">Subtração</option>
								<option value=\"divsao\">Divisão</option>
								<option value=\"mult\">Multiplicação</option>
								<option value=\"perc\">Porcentagem</option>
							</select>
						</p>
						<p>
							<input type=\"submit\" value=\"Enviar\"/>
							<input type=\"Reset\" value=\"Apagar\"/>
						</p>
				</form>"
			}
		?>
	</body>
</html>



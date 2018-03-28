 <!--Lívia Ferreira--> 
<form method="post" action="calculadora.php" >
			<legend>Calculadora</legend>
			<p>
				<label>Digite o primeiro número:</label>
				<input  type="number" name="num1" id="num1" />
			</p>
			<p>
				<label>Digite o segundo número:</label>
				<input  type="number" name="num2" id="num2"/>
			</p>
			<p>
				<label>Selecione uma operação:</label></br>
				<input type="radio" name="operacao" value="1"/>Adição</br>
				<input type="radio" name="operacao" value="2"/>Subtração</br>
				<input type="radio" name="operacao" value="3"/>Multiplicação</br>
				<input type="radio" name="operacao" value="4"/>Divisão</br>
				<input type="radio" name="operacao" value="4"/>Porcentagem</br>
			</p>
			<p>
				<input type="submit" value="Enviar"/>
				<input type="Reset" value="Apagar"/>
			</p>
</form>
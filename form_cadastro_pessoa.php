<article>
	<form action="cadastro_pessoa.php" method="post">
		<fieldset>
			<legend>Cadastro de Pessoa</legend>
			<p>
				<label>Nome:</label>
				<input type="text" name="nome" size="30"/>
			</p>
			<p>
			
				<label> Sexo: </label>
				<select name="sexo"/>
				<option value="1">Masculino</option>
				<option value="2">Feminino</option>
				</select>
			
			</p>
			<p>
				<label>E-mail</label>
				<input type="text" name="email"	size="30"/>
			</p>
			<p>
				<label>Data de Nascimento:</label>
				<input type="date" name="data_nasc" size="30"/>	
			</p>
			<p>
				<label>CPF:</label>
				<input type="text" name="cpf" />
			</p>
			<p>
				<label>Cidade:</label>
				<input type="text" name="cidade" />
			</p>
			<p>
				<label>Estado:</label>
				<input type="text" name="estado" />
			</p>
			<input type="submit" value="Enviar"/>
		</fieldset>
	</form>
</article>
<!DOCTYPE html>
<html>
<head>
	<title>
		HTTP Methods
	</title>
</head>
<body>

	Teste de forms HTML + PHP
	<br><br>

	<form method="GET" action="formElementsTest.php">
		
		<label for="nome">Nome: </label>
		<input type="text" name="nome">
		
		<br><br>
		
		<label for="fruta">Seleccione uma fruta: </label>
		<select name="fruta">
			<option>Banana</option>
			<option>Laranja</option>
			<option>Limão</option>
			<option>Ananás</option>
		</select>

		<br><br>
		
		<label for="carne">Seleccione várias carnes: </label>
		<!-- A propriedade "name" tem "carne[]" para no PHP ser tratado como um array -->
		<select name="carne[]" multiple>
			<option>Porco</option>
			<option>Vaca</option>
			<option>Cabrito</option>
			<option>Coelho</option>
			<option>Galinha</option>
		</select>

		<br><br>

		<label for="sopa">Sopa? </label>
		<input type="checkbox" name="sopa" value="sim">
		<br><br>

		<label for="sobremesa">Sobremesa: </label>
		<br>
		<label for="pudim">Pudim </label>
		<input type="radio" id="pudim" name="sobremesa" value="Pudim" checked>
		<br>
		<label for="pudim">Doce da Casa </label>
		<input type="radio" id="doceCasa" name="sobremesa" value="Doce da Casa">
		<br>
		<label for="paoLo">Pão-de-Ló</label>
		<input type="radio" id="paoLo" name="sobremesa" value="Pão-de-Ló">
		
		<br><br>
		<button type="submit">Enviar!</button>
	
	</form>

</body>
</html>
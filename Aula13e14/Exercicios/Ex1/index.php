<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
</head>
<body>
    <form action="process.php" method="GET">
        
        Escreve o teu nome e idade:
        
        <br><br>

        <label for="nome">Primeiro nome: </label>
		<input type="text" name="primeiroNome">

        <br><br>

        <label for="nome">Último nome: </label>
		<input type="text" name="ultimoNome">

        <br><br>

        <label for="idade">Ano Nascimento: </label>
		<input type="number" name="anoNascimento">
        
        <button type="submit">Enviar!</button>
    </form>
</body>
</html>
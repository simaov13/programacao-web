<?php

	class User{
		public $userID;
		public $primeiroNome;
		public $ultimoNome;
		public $dataNascimento;

		function __construct($userID, $primeiroNome, $ultimoNome, $dataNascimento){
			$this->userID = $userID;
			$this->primeiroNome = $primeiroNome;
			$this->ultimoNome = $ultimoNome;
			$this->dataNascimento = $dataNascimento;
		}
	}

	$users = array();
	$pesquisaNome = "";

	function SearchUsers($mysqli, $pesquisaNome){
		if($pesquisaNome != ""){
			$pesquisaNome = $mysqli->real_escape_string($pesquisaNome);
			$sql = "SELECT * FROM user WHERE primeiroNome LIKE '%".$pesquisaNome."%' OR ultimoNome LIKE '%".$pesquisaNome."%'";
		}else{
			$sql = "SELECT * FROM user";
		}

		global $users;
		
		$result = $mysqli->query($sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$user = new User($row["userID"], $row["primeiroNome"], $row["ultimoNome"], $row["dataNascimento"]);
				array_push($users, $user);
			}
		}
	}

	if(isset($_GET["nome"]) && $_GET["nome"] != ""){
		$pesquisaNome = $_GET["nome"];
	}

	$mysqli = new mysqli("localhost", "root", "", "pw2");
	$mysqli->set_charset('utf8');

	if($mysqli->connect_error != ""){
		die("Não foi possivel conectar à base de dados! ".$mysqli->connect_error);
	}

	echo "Conexão establecida";

	if(isset($_POST["primeiroNome"]) && $_POST["primeiroNome"] != "" && isset($_POST["ultimoNome"]) && $_POST["ultimoNome"] != "" && isset($_POST["dataNascimento"]) && $_POST["dataNascimento"] != ""){

		$primeiroNome = $mysqli->real_escape_string($_POST["primeiroNome"]);
		$ultimoNome = $mysqli->real_escape_string($_POST["ultimoNome"]);
		$dataNascimento = $mysqli->real_escape_string($_POST["dataNascimento"]);

		if (!filter_var($dataNascimento, FILTER_VALIDATE_dataNascimento)) {
		  echo "<br>ERRO: Email inválido!";
		}else{
			$sql = "INSERT INTO user (primeiroNome, ultimoNome, dataNascimento) VALUES ('$primeiroNome', '$ultimoNome', '$dataNascimento')";
			if($mysqli->query($sql)){
				echo "<br>Utilizador inserido com sucesso!";
			}else{
				echo "<br>ERRO: Não foi possível inserir na base de dados!";
			}
		}
	}

	if(isset($_GET["eliminar"]) && $_GET["eliminar"]!=""){
		$userID = $mysqli->real_escape_string($_GET["eliminar"]);
		$sql = "DELETE FROM user WHERE userID=".$userID;
		if($mysqli->query($sql)){
			echo "<br>Utilizador eliminado com sucesso!";
		}else{
			echo "<br>ERRO: Não foi possível eliminar utilizador na base de dados!";
		}	
	}

	SearchUsers($mysqli, $pesquisaNome);
		
	$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Utilizadores - CRUD</title>
</head>
<body>
	<h1>Utilizadores registados: </h1>
	<p>Consulte em baixo a lista de utilizadores registados no nosso site.</p>

	<h2>Inserir Utilizador</h2>
	<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
		<label for="primeiroNome">Primeiro nome:</label>
		<input type="text" name="primeiroNome">
		<br>
		<label for="ultimoNome">Último nome:</label>
		<input type="text" name="ultimoNome">
		<br>
		<label for="dataNascimento">Data de nascimento:</label>
		<input type="text" name="dataNascimento">
		<br><br>
		<button>Inserir</button>
	</form>

	<h2>Pesquisar</h2>
	<form method="GET" action="<?php echo $_SERVER["PHP_SELF"];?>">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" value="<?php echo $pesquisaNome; ?>">
		<br><br>
		<button>Pesquisar</button>
	</form>
	
	<h2>Lista de Utilizadores</h2>
	<?php
	foreach($users as $user){
			echo "userID: ". $user->userID ."<br>";
			echo "Name: ". $user->primeiroNome ." ". $user->ultimoNome ."<br>";
			echo "Data de Nascimento: ". $user->dataNascimento ."<br>";
			echo "<a href=" . $_SERVER["PHP_SELF"] . "?eliminar=". $user->userID .">Eliminar</a>";
			echo "<br><br>";
		}
	?>
</body>
</html>
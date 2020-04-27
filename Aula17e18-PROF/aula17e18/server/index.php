<?php

	class User{
		public $userID;
		public $primeiroNome;
		public $ultimoNome;
		public $anoNascimento;

		function __construct($userID, $primeiroNome, $ultimoNome, $anoNascimento){
			$this->userID = $userID;
			$this->primeiroNome = $primeiroNome;
			$this->ultimoNome = $ultimoNome;
			$this->anoNascimento = $anoNascimento;
		}
	}

	$mysqli = new mysqli("localhost", "root", "", "pw2");
	$mysqli->set_charset('utf8');

	if($mysqli->connect_error != ""){
		die("Não foi possível conectar à BD! ".$mysqli->connect_error);
	}

	$sql = "SELECT * FROM user";
	$result = $mysqli->query($sql);

	if($result->num_rows > 0){
		$users = array();
		while($row = $result->fetch_assoc()){
			$user = new User($row["userID"], $row["primeiroNome"], $row["ultimoNome"], $row["anoNascimento"]);
			array_push($users, $user);
		}

		$usersJSON = json_encode($users, JSON_UNESCAPED_UNICODE);
		echo $usersJSON;
	}
	
	$mysqli->close();

?>
<?php

	//Variáveis superglobais para aceder a dados de formulários HTML:
	//$_GET -> dados publicos, passados pelo URL (parâmetros)
	//$_POST -> dados privados ou ficheiros, passados por ligação paralela
	//$_REQUEST -> junta o $_GET com o $_POST


	if(isset($_REQUEST["primeiroNome"]) && $_REQUEST["primeiroNome"] != "" 
	   && isset($_REQUEST["apelido"]) && $_REQUEST["apelido"] != ""){
		echo "Olá " . $_REQUEST["primeiroNome"] . " " . $_REQUEST["apelido"] . "!";
	}else{
		echo "Tens que preencher os dois campos!";
	}
	
?>
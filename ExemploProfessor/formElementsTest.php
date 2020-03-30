<?php

	//input type="text"
	echo "Nome: " . $_REQUEST["nome"];
	echo "<br>";

	//select - um item
	echo "Fruta: " . $_REQUEST["fruta"];
	echo "<br>";	

	//select - multiplos items
	echo "Carne: ";
	foreach($_REQUEST["carne"] as $carne){
		echo $carne ."; ";
	}
	echo "<br>";

	//checkbox - se estiver picada devolve sim, caso contrário a key não existe
	echo "Sopa: ";
	if(isset($_REQUEST["sopa"]) && $_REQUEST["sopa"] == "sim"){
		echo "Sim";
	}else{
		echo "Não";
	}
	echo "<br>";

	//radio
	echo "Sobremesa: " . $_REQUEST["sobremesa"];

?>
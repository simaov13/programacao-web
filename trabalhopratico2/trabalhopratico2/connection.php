<?php
    //Estabelecer ligação com a base de dados
    $mysqlConn = new mysqli("localhost", "root", "", "trabalhopratico");

    //Verificar a ligação
    if($mysqlConn === false){
        die("Erro: Não foi possível ligar à base de dados!: " . $mysqlConn->connect_error);
    }
?> 
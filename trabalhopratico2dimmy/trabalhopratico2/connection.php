<?php
    //Estabelecer ligação com a base de dados
    $mysqlConn = new mysqli("localhost", "root", "", "pw2");

    //Verificar a ligação
    if($mysqlConn === false){
        die("Erro: Não foi possível ligar à base de dados!: " . $mysqlConn->connect_error);
    }else{
        echo "Ligação à base de dados estabelecida com sucesso!<br><br>";
    }
?> 
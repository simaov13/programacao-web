<?php

    if(isset($_REQUEST["primeiroNome"]) && $_REQUEST["primeiroNome"] != ""
        && isset($_REQUEST["apelido"]) && $_REQUEST["apelido"] != ""){
            echo "Olá" . " " . $_REQUEST["primeiroNome"] . " " . $_REQUEST["apelido"] . "!";
    }else{
        echo "Tens de preencher os dois campos";
    }
    
?>
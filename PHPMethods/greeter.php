<?php

    if(isset($_POST["primeiroNome"]) && $_POST["primeiroNome"] != ""
    && isset($_POST["apelido"]) && $_POST["apelido"] != ""){
        echo "Olá" . $_POST["primeiroNome"] . " " . $_POST["apelido"] . "!";
    }else{
        echo "Tens de preencher os dois campos";
    }
    
?>
<?php

    if(isset($_REQUEST["primeiroNome"]) && $_REQUEST["primeiroNome"] != "" 
        && isset($_REQUEST["ultimoNome"]) && $_REQUEST["ultimoNome"] != ""
        && isset($_REQUEST["anoNascimento"]) && $_REQUEST["anoNascimento"] != ""){
            function CalcIdade($idade){
                return date("Y") - $idade;
            }  
            echo $_REQUEST["primeiroNome"] . " " . $_REQUEST["ultimoNome"] . " " . "tem" . " " . CalcIdade($idade) . " " . "anos" ;
    }else{
        echo "Tens que preencher os campos!";
    }

?>
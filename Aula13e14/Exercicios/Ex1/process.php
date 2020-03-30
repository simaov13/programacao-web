<?php

    if(isset($_REQUEST["primeiroNome"]) && $_REQUEST["primeiroNome"] != "" 
        && isset($_REQUEST["ultimoNome"]) && $_REQUEST["ultimoNome"] != ""
        && isset($_REQUEST["anoNascimento"]) && $_REQUEST["anoNascimento"] != ""){
            function CalcIdade($anoNascimento){
                return $diff->format('%yYears, %mMonths, %dDays');
            }  
            echo $_REQUEST["primeiroNome"] . " " . $_REQUEST["ultimoNome"] . " " . "tem" . " " . CalcIdade($anoNascimento) . " " . "anos" ;
    }else{
        echo "Tens que preencher os campos!";
    }

    

?>
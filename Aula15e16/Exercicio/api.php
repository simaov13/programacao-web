<?php

    function calcularSoma($numero1, $numero2){
        return $numero1 + $numero2;
    }

    if(isset($_POST["nums"]) && $_POST["nums"] != ""){

        $objJSON = $_POST["nums"];
        $obj = json_decode($objJSON);

        $objClient = new \stdClass();
        $objClient->soma = calcularSoma($obj->numero1, $obj->numero2);
        $clientJSON = json_encode($objClient);

        echo $clientJSON;
    }else{
        echo "What are you doing here =/ ";
    }

?>
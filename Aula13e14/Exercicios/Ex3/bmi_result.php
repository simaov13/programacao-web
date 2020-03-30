<?php

    class calculadora {
        public $altura;
        public $peso;

        function setAltura($altura){
            $this->altura = $altura;
        }

        function setPeso($peso){
            $this->peso = $peso;
        }

        function bmi(){
            $bmi=($this->peso/($this->altura=$this->altura));
            return $bmi;
        }
    }

    if (isset($_GET["altura"])){
        $alturaget = $_GET["altura"];
    }else {
        $alturaget = "";
    }

    if (isset($_GET["peso"])){
        $pesoget = $_GET["peso"];
    }else {
        $pesoget = "";
    }

    if ($alturaget != "" && $pesoget != ""){
        $pessoa = new calculadora();
        $pessoa->setAltura($alturaget);
        $pessoa->setPeso($pesoget);
        echo $pessoa->bmi();
    }else {
        echo "Tens que preencher os campos todos!";
    }
?>
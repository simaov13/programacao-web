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
            $bmi=($this->peso / ($this->altura=$this->altura));
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
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
</head>
<body>
    <form action="bmi_result.php" method="GET">

        <label for="number">Altura: </label>
		<input type="number" name="altura">

        <br><br>

        <label for="number">Peso: </label>
		<input type="number" name="peso">
        
        <button type="submit">Calcular!</button>
    </form>
</body>
</html>
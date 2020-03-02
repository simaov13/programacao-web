<!--Constantes PHP-->
<?php
    define("NOME_SITE", "www.XXXX.com")
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>PHP Basico</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            //Isto não aparece no código fonte
            echo "Hello World!";
            echo "<br><br>";
            
            //Variáveis PHP Maneira 2
            $texto = "Hello World!";
            $numero = 33;

            echo "O texto é: ".$texto;
            echo "<br>";
            echo "O número é: ".$numero;

            echo "<br><br>";

            //Var_dump
            $texto1 = "Hello World!";
            $numeroInteiro = 123;

            var_dump($texto1);
            echo "<br>";
            var_dump($numeroInteiro);

            //Float
            $float = 1.234;
            echo $float;
            echo "<br><br>";

            //Texto Booleano
            $booleanaTexto = True;
            $booleanaNumero = 1;
            var_dump($booleanaTexto);
            echo "<br>";
            var_dump($booleanaNumero);
            echo "<br>";
            echo ($booleanaTexto == $booleanaNumero);
            echo "<br>";
            var_dump($booleanaTexto == $booleanaTexto);
            echo "<br><br>";

            //Arrays
            $cores = array("azul", "verde", "vermelho");
            /*var_dump($cores);
            echo "<br>";*/
            echo $cores[0];

            $coresAssociativas = array(
                "ceu" => "azul",
                "relva" => "verde",
                "sangue" => "vermelho"
            );

            /*echo "<br>";
            var_dump($coresAssociativas);*/
            echo "<br>";
            echo $coresAssociativas["ceu"];
        ?>
        <!--Variáveis PHP Maneira 1-->
        <br><br>
        O texto é: <?php echo $texto ?>
        <br>
        O número é: <?php echo $numero ?>
        <br>

        <!--Constante Continuação-->
        <h1>Bem Vindo ao site <?php echo NOME_SITE ?>!</h1>
    </body>
</html>
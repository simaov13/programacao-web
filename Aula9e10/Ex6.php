<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex6</title>
</head>
<body>
    <?php
        $associativo = array("Japan"=>"Tokyo", 
                            "Mexico"=>"Mexico City",
                            "Usa"=>"New York City"
                        );
        echo "Cidade: " . $associativo["Japan"] . "<br>";
        echo "País: " . array_search("Tokyo", $associativo);
    ?>
</body>
</html>
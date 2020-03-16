<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <?php
        
        function Compare($x, $y){
            if ($x > $y) {
                return "X é maior";
            }else if ($x < $y) {
                return "Y é maior!";
            }else {
                return "X é igual a Y!";
            }
        }

        echo compare(2, 3);
        echo "<br>";
        echo (2 < 3) ? "x é menor" : "y é maior";
    ?>
</body>
</html>
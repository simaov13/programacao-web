<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch...Case</title>
</head>
<body>
    <?php
        $x = 6;

        switch ($x) {
            case 0:
                echo "O valor é 0";
                break;
            case 1:
                echo "O valor é 1";
                break;
            case 2:
                echo "O valor é 2";
                break;
            case 3:
                echo "O valor é 3";
                break;
            case 4:
                echo "O valor é 4";
                break;  
            default:
                echo "O valor é 5 ou mais";
                break;  
        }
    ?>
</body>
</html>
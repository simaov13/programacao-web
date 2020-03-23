<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    <?php

       $a = 0;
       $b = 0;
       $c = array("1" => "Item A",
                  "2" => "Item B",
                  "3" => "Item C",
                  "4" => "Item D",
                  "5" => "Item E",
                  "6" => "Item F",
                );

       while ($a <= 8) {
           $a++;
           echo "abc" . " ";  
        }

        echo "<br>";

        do {
            $b++;
            echo "xyz" . " ";
        } while ($b <= 8);

        echo "<br>";

        for ($i = 1; $i  < 10; $i++) { 
            echo $i . " ";
        }

        echo "<br>";

        foreach ($c as $key => $value) {
            echo $key . "." . " " . $value . "<br>";
        }
    ?>
</body>
</html>
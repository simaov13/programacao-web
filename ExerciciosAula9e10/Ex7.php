<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex7</title>
</head>
<body>

    <?php
        $arrayMulti = array(
            array("City", "Country", "Continent"),
            array("Tokyo", "Japan", "Asia"),
            array("Mexico City", "Mexico", "North America"),
            array("New York City", "USA", "North America"),
            array("Mumbai", "India", "Asia"),
            array("Seoul", "Korea", "Asia"),
            array("Shanghai", "China", "Asia"),
            array("Lagos", "Nigeria", "Africa"),
            array("Buenos Aires", "Argentina", "South America"),
            array("Cairo", "Egypt", "Africa"),
            array("London", "UK", "Europe")
        );
        #print_r($arrayMulti);
        #echo "<br><br>";
        #echo $arrayMulti[2][1];
    ?>
        <?php
            echo "<table border=1>";
            foreach ($arrayMulti as $key) {
                echo "<tr>";
                echo "<td>".$key[0]."</td> <td>$key[1]</td> <td>$key[2]</td>";
                echo "</tr>";
                echo "<br>";
            }
            echo "</table>";
        ?>
        
</body>
</html>
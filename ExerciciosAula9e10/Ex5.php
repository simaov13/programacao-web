<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex5</title>
</head>
<body>
    <?php
        $maioresCidades = array("Tokyo", 
                                "Mexico City", 
                                "New York City", 
                                "Mumbai", "Seoul", 
                                "Shanghai", "Lagos", 
                                "Buenos Aires", 
                                "Cairo", 
                                "London", 
                                "Los Angeles", 
                                "Calcutta", 
                                "Osaka", 
                                "Beijing"
                            );

        sort($maioresCidades);
        foreach($maioresCidades as $value){
            echo $value . ", ";
        }
    ?>
</body>
</html>
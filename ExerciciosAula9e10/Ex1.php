<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
</head>
<body>
    <?php
        $time = date('F', time());

        if ($time == "August") {
            echo "Está mesmo calor!";
        }else {
            echo "Não está tanto calor como em Agosto";
        }
    ?>
</body>
</html>
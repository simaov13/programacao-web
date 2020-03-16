<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex8</title>
</head>
<body>
    <?php

        $cargo = "Mod";

        switch($cargo){
            Case "Mod":
                echo "Bom dia Mod.";
                break;
            Case "Admin":
                echo "Bom dia Admin.";
                break;
            Case "Op":
                echo "Bom dia Op.";
                break;
            Case "User":
                echo "Bom dia User.";
                break;
            default:
                break;
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4</title>
</head>
<body>

    <table border="1">
        <?php

            for ($i=0; $i < 7; $i++) { 
                ?>

                <tr>
                    <?php
                    for ($j=0; $j < 7; $j++) { 
                        ?>
                            <td><?php echo (($i+1) * ($j+1)) ?></td>
                        <?php
                    }
                    ?>
                </tr>
                <?php
            }
        ?>
        </table>
</body>
</html>
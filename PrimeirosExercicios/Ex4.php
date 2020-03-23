<?php
    $value = 8;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4</title>
</head>
<body>
    <p>Value is now <?php echo $value ?>.</p>
    <p>Add 2. Value is now <?php echo $value = $value + 2?>.</p>
    <p>Subtract 4. Value is now <?php echo $value = $value - 4?>.</p>
    <p>Multiply by 5. Value is now <?php echo $value = $value * 5?>.</p>
    <p>Divide by 3. Value is now <?php echo $value = $value / 3?>.</p>
    <p>Increment value by one Value is now <?php echo $value = $value + 1?>.</p>
    <p>Decrement value by one. Value is now <?php echo $value = $value - 1?>.</p>
</body>
</html>
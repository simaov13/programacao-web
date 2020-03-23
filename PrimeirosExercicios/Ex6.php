<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex6</title>
</head>
<body>
    <?php $value = "texto" ?>
    <p>Value is: <?php echo gettype($value)?>;</p>
    <?php $value = 1.5 ?>
    <p>Value is: <?php echo gettype($value)?>;</p>
    <?php $value = false ?>
    <p>Value is: <?php echo gettype($value)?>;</p>
    <?php $value = 1 ?>
    <p>Value is: <?php echo gettype($value)?>;</p>
    <?php $value = NULL ?>
    <p>Value is: <?php echo gettype($value)?>.</p>
</body>
</html>
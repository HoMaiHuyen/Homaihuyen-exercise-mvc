<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit</title>
</head>

<body>
    <p>Here are all the fruit :</p>
    <ul>
        <?php foreach ($fruits as $fruit) { ?>
            <li><?php echo  $fruit['name'] . ' costs ' . $fruit['price'] . ' $ '  ?></li>

        <?php } ?>
    </ul>
</body>

</html>
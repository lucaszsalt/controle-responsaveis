<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>
        <?php
            date_default_timezone_set('UTC');

            $date = new DateTime();

            echo $date->format('Y-m-d'), " ";

            $date->modify('+7 days');
            echo $date->format('Y-m-d');
        ?>
    </p>
</body>
</html>
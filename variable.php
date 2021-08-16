<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Variable In PHP' ?></title>
</head>
<body>
    <?php

        define('number', 19);
        echo number;
        echo '<br>';

        define('friends', [
            'Hasan',
            'Raznur',
            'Niloy'
        ]);

        var_dump(friends)
    ?>
</body>
</html>
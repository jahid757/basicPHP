<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Switch in PHP' ?></title>
</head>

<body>
    <?php

    switch ('green') {
        case 'red':
            echo ' red is true';
            break;
        case 'green':
            echo 'green is true';
            break;
        default:
            echo 'Nothing Found!';
    }

    ?>
</body>

</html>
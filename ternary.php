<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  'Ternary In PHP' ?></title>
</head>
<body>
    <?php

        $x = 10;

        // $x > 5 ? $z = "Greater" : $z = "Smaller";
        $z = "Value Is : ".(($x > 5) ? "Greater" : "Smaller");

        echo "<h1>$z</h1>";

    ?>
</body>
</html>
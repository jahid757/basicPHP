<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Math is PHP' ?></title>
</head>
<body>
    <?php 

        echo min(0,2,3,4,24,2,5.24,5);
        echo '<br>';
        echo max(0,2,3,4,24,2,5.24,5);
        echo '<br>';
        echo pi();
        echo '<br>';
        echo abs(-4);
        echo '<br>';
        echo sqrt(9);
        echo '<br>';
        echo round(pi());
        echo '<br>';
        echo rand(1,6)
    ?> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'While Loop In PHP' ?></title>
</head>
<body>
    <?php
        $i = 0;
        while($i <= 10){
            echo "While Loop: Number Is $i <br>";
            $i++;
        }
        echo '<br><br><br>';
        for ($i =2; $i <= 15; $i++){
            echo "For Loop: Number Is $i <br>";
        }
        echo '<br><br><br>';
        for($i=0; $i <= 50; $i+=5){
            echo $i.'<br>';
        }
    ?>
</body>
</html>
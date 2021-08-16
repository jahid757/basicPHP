<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "PHP echo" ?> </title>
</head>
<body>
    <a href="<?php echo 'https://www.youtube.com' ?>"><?php echo 'YouTube' ?></a> <br>
    <?php 
    echo nl2br ("Hello World \n");
    echo nl2br("One line.\nAnother line.");
        echo 'Hello';
        echo 'World </br>';
        $a = 15;
        $b = 10;

        echo $a+$b;

        print('<br>');
        print $a+$b.'<br>';
        print ($a+$b.'<br>');

        $fruits = array('apple','orange');
        $fruits[2] = 'apple2';

        var_dump($a);

        echo '<br>';

        var_dump($fruits)
    ?>

</body>
</html>
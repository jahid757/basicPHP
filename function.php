<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Function In PHP' ?></title>
</head>
<body>
    <?php 

        function users($name = null,$age= null){
            echo "User Name Is: $name And Age Is: $age <br>";
        }

        users('Jahid',18);
        users()
    
    ?>
</body>
</html>
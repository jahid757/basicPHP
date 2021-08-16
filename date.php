<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'date In PHP' ?></title>
</head>
<body>
    <?php 
        date_default_timezone_set("Asia/Dhaka");
        echo "Today Is ". date("d/m/y") . '<br>';
        echo "Now ". date("h:i:sa"). '<br>';
        echo date("h:i:sa") . "<br>";
    ?>
</body>
</html>
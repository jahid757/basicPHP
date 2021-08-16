<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Count In PHP</title>
    <style>
        *{
            font-family:Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php
        echo '<h1 >Length Counter</h1>';
        echo strlen('Hello World');
        echo '<br>';
        
        echo str_word_count('Hello I am Jahid Hasan');
        echo '<br>';

        echo strrev('Reverse String');
        echo '<br>';
        echo strpos('Hi i am a web developer','web');
        echo '<br>';

        echo str_replace('Hi','Hello','Hi I am jahid Hasan')
    
    ?>
</body>
</html>
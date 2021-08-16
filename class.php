<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Class In PHP' ?></title>
</head>
<body>
    <?php

        class Student {
            var $name;

            function studentName ($stdName){
                global $name;
                $name = $stdName;
                echo "Student name is: $name <br>";
            }
        }

        $student1 = new Student;
        $student1 -> studentName('Jahid');

        $student2 = new Student;
        $student2 -> studentName('Hasan')
    
    ?>
</body>
</html>
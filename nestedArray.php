<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo 'Table With PHP loop'?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php

$students = [
    [1,"Jahid",5,18,"Science"],
    [2,"Hasan",8,19,"Commerce"],
    [3,"Niloy",10,20,"Arts"]
];

// var_dump($students[0]);
echo "<pre>";
print_r($students[1][3]);
echo "</pre>";

// echo ($students[0][1]);
// echo ($students[0][2]);
// echo ($students[0][3]);
// echo ($students[0][4]);


// $length = count($students);

for ($row=0; $row < 3; $row++) { 
    for ($col=0; $col < 5; $col++) { 
        echo $students[$row][$col]." ";
    }
    echo "<br>";
}

echo "<br><br><br><br><br>";

echo '<table class="table text-center table-dark table-striped">';

echo "<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Roll</th>
    <th>Age</th>
    <th>Group</th>
</tr>";

foreach($students as $student){
    echo "<tr>";
    foreach($student as $data){
        echo "<td>$data</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>
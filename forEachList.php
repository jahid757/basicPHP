<?php

// $students = [
//     [1,'Jahid',5,'Developer'],
//     [2,'Hasan',7,'Designer'],
//     [3,'Niloy',9,'Freelancer']
// ];


$students = [
    [
        "id" => 1,
        "name" => "Jahid",
        "roll" => 5,
        "profession" => "Developer"
    ],
    [
        "id" => 2,
        "name" => "Hasan",
        "roll" => 7,
        "profession" => "Designer"
    ],
    [
        "id" => 1,
        "name" => "Niloy",
        "roll" => 9,
        "profession" => "Marketer"
    ],
];


echo "<table border='1px' cellpadding='5px' cellspacing='0'>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Roll</th>
    <th>Profession</th>
</tr>";


// foreach($students as list($id,$name,$roll,$profession)){
//     echo 
//     "<tr>
//         <td>$id</td>
//         <td>$name</td>
//         <td>$roll</td>
//         <td>$profession</td>
//     </tr>";
// }


foreach($students as list("id" => $id, "name" => $name, "roll" => $roll, "profession" => $profession)){
    echo 
    "<tr>
        <td>$id</td>
        <td>$name</td>
        <td>$roll</td>
        <td>$profession</td>
    </tr>";
}


echo "</table>";
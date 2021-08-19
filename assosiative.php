<?php

$marks = [
    "jahid" => [
        "physics" => 60,
        "math" => 75,
        "ict" => 89
    ],
    "hasan" => [
        "physics" => 50,
        "math" => 45,
        "ict" => 59
    ],
    "niloy" => [
        "physics" => 60,
        "math" => 55,
        "ict" => 59
    ]
];

echo "<pre>";
print_r($marks);
echo "</pre>";

echo "<table border='2px' cellpadding='5px' cellspacing='0'>
<tr>
    <th>Name</th>
    <th>Physics</th>
    <th>Math</th>
    <th>ICT</th>
</tr>";

foreach($marks as $key => $value1){
    echo "<tr> <td>$key</td>";
    foreach($value1 as $value2){
        echo "<td>$value2</td>";
    }
    echo "</tr>";
}

echo "</table>";
<?php

$friends = array(
    "Jahid",
    "Hasan",
    "Raznur",
    "Niloy"
);

foreach($friends as $friend){
    echo $friend."<br>";
}

// associative array

$students = array(
    "name" => "Jahid",
    "age" => 18,
    "passion" => "programming"
);

echo "<br><br><br><br><br>";

echo "<ul>";
foreach($students as $key => $student){
    echo "<li>$key = $student</li>";
}
echo "</ul>";
<?php

$students = [
    [1,'Jahid',5,'Developer'],
    [2,'Hasan',7,'Designer'],
    [3,'Niloy',9,'Freelancer']
];

foreach($students as list($id,$name,$roll,$profession)){
    echo "$id $name $roll $profession <br>";
}
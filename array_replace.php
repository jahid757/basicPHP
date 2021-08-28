<?php

$friends = ['Jahid','Hasan','Niloy','Raznur',1=>'Razee'];
$friends2 = ['Jahid','Hasan','Niloy','Raznur'];

$fnd = ['King','Kong2','Array'];
$fnd2 = ['King','Kong2'];

$array3 = ['hello','world','developer'];

$newArray = array_replace($friends, $fnd);
$newArray2 = array_replace($friends, $fnd2, $array3 );

// var_dump($newArray);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// echo "<pre>";
// print_r($newArray2);
// echo "</pre>";

$number = [1,'a' => 2,3,4,5];
$num = [6,7,'a'=> 8,9];

$newNum = array_replace($number,$num);

echo '<pre>';
print_r($newNum);
echo '</pre>';

// array replace recursive

$name1 = ["a" => ["Jahid"], "b" => ["Hasan","Niloy"]];
$name2 = ["a" => ["Designer"], "b" => ["Developer"]];

$newName = array_replace_recursive($name1,$name2);


echo '<pre>';
print_r($newName);
echo '</pre>';
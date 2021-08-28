<?php

$fruit = array('Apple','Mango','Banana','Pineapple');

echo count($fruit);
echo "<br>";
echo sizeof($fruit);
echo "<br>";

$students = array(
    'name' => array('Jahid','Hasan','Niloy'),
    'age' => array(18,20,25)
);

echo count($students['name'],1) ."<br>";



$len = count($fruit);

for ($i=0; $i < $len; $i++) { 
    echo $fruit[$i]."<br>";
}

echo "<pre>";
print_r(array_count_values($fruit));
echo "</pre>";
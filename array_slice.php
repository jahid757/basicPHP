<?php

$color = ['red','green','blue','yellow'];

// $color_slice = array_slice($color,1,2);
$color_slice = array_slice($color,1,2,true);

echo '<pre>';
    print_r($color_slice);
echo '</pre>';


$name = ['a' => 'jahid', 'b' => 'Hasan', 'c' => 'Niloy', 'd' => 'Raznur'];

$name_slice = array_slice($name,1,3,true);

echo '<pre>';
    print_r($name_slice);
echo '</pre>';

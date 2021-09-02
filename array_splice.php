<?php

$color = ['red','green','blue','yellow','black'];
$fruits = ['orange','apple'];


// array_splice($color,1,-2);

// array_splice($color,1,3,$fruits);

// array_splice($color,1, count($color), $fruits);
// array_splice($color, 2,0,$fruits);
// array_splice($color, 0,0,$fruits);

// array_splice($color,count($color),0,$fruits);

array_splice($color,1,2);

echo '<pre>';
    print_r($color);
echo '</pre>';
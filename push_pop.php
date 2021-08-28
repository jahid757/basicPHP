<?php

$fruits = ['Apple','Pea','Pineapple'];

array_pop($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';

array_push($fruits,"Item","Added");

echo '<pre>';
print_r($fruits);
echo '</pre>';
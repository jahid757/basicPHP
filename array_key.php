<?php

$age = ['jahid' => 18,'hasan' => 19,'niloy' => 20];

// $key = array_key_first($age);
// $key = array_key_last($age);
// $key = array_key_exists('niloy',$age);
$key = key_exists('niloy',$age);

echo '<pre>';
    print_r($key);
echo '</pre>';

if ($key) {
    echo 'This is true';
}else{
    echo 'This is false';
}
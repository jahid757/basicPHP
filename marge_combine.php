<?php

$firstName = ['Md'];
$middleName = ['Jahid'];
$lastName = array('Hasan');

$fullName = array_merge($firstName, $middleName, $lastName);

echo '<pre>';
    print_r($fullName);
echo '</pre>';


$friends1 = ['a' => 'Jahid', 'b' => 'Hasan'];
$friends2 = ['c' => 'Niloy', 'd' => 'Raznur'];

$friends = array_merge($friends1,$friends2);

echo '<pre>';
    print_r($friends);
echo '</pre>';



$friends3 = ['a' => 'Jahid', 'b' => 'Hasan'];
$friends4 = ['b' => 'Niloy', 'd' => 'Raznur'];
$friends5 = ['d' => ['Sojib' => ['designer','developer']], 'e' => 'Soboj'];

$friends_1 = array_merge_recursive($friends3,$friends4,$friends5);

echo '<pre>';
    print_r($friends_1);
echo '</pre>';


//  array combine

$name = ['Jahid','Hasan','Niloy'];
$age = [18,19,20];

$userInfo = array_combine($name,$age);

echo '<pre>';
    print_r($userInfo);
echo '</pre>';

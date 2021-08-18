<?php

function student(){
    echo 'Hi! I am from function <br>';
}

student();
student();
student();
student();

echo '<br><br><br><br><br>';

function nameFun($name = null){
    echo $name."<br>";
}

nameFun('Jahid');
nameFun('Hasan');

echo '<br><br><br><br><br>';

// add 2 number

function plus($num1,$num2){
    echo $num1 + $num2."<br>";
}

plus(10,15);
plus(20,15);


// name concat

function nameConcat($firstName = null, $lastName = null){
    echo $firstName." ".$lastName;
}

nameConcat('Jahid','Hasan');
echo '<br><br><br><br><br>';

function sum($num1,$num2,$num3){
    return $num1+$num2+$num3;
}
echo sum(10,10.4,83);

echo '<br><br><br><br><br>';



function parent($value){
    $result = $value/3;
    echo round($result);
}

// $value = sum(10,43,69.74);

define('value', sum(10,45,79.74));
define('abs', parent(value));

echo abs;
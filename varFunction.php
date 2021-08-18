<?php

function name($text){
    echo "<br>$text Hello World <br>";
}

$func = "name";

echo $func;
$func("This is From");



$varFunc = function($name){
    echo "Hi $name <br>";
};

$varFunc("Jahid Hasan");
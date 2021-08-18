<?php

function string(&$string){
    echo $string."<br>";
    $string.= " Something is Extra";
}

$str = "Hello This Is";
string($str);
echo $str;
<?php

function counter($number){
    if($number <= 15){
        echo $number."<br>";
        counter($number + 1);
    }
}

counter(1);

function factorial($n){
    if($n === 0){
        return 1;
    }else{
        return ($n* factorial($n-1)); 
    }
}
 echo factorial(3);
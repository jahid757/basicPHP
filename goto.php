<?php

for ($i=0; $i < 10; $i++) { 
    if($i === 6){
        goto text;
    }
    echo $i."<br>";
}

text: echo 'This is text label';
<?php

for ($i=0; $i < 15; $i++) { 
    if ($i === 6){
        continue;
    }
    echo $i."<br>";
}
echo "<br><br><br><br><br>";
for ($i=0; $i < 10; $i++) { 
    if ($i === 6){
        break;
    }
    echo $i."<br>";
}
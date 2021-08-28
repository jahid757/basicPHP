<?php

$name = ['Jahid','Hasan','75','Niloy'];

echo in_array('Niloy',$name);

if (in_array('Jahid',$name,true)) {
    echo '<h1>Name Is Find Successfully</h1>';
}else{
    echo "<h1>Name Can't Find</h1>";
}
if (in_array(75,$name,true)) {
    echo '<h1>Number Is Find Successfully</h1>';
}else{
    echo "<h1>Number Can't Find</h1>";
}

$a = array('ab','bc','cd','ef');

$arr = array('a' =>'ab','b' => 'bc', 'c' =>'cd','d' =>'ef');

echo "<h1>";
echo array_search("cd",$a,true);
echo "</h1>";

echo "<h1>";
echo array_search("cd",$arr,true);
echo "</h1>";
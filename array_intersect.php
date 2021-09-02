<?php

function compare($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

function compare_key($a,$b){
    if($a===$b){
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}


$name = ['a' => 'jahid', 'b' => 'hasan', 'c' => 'niloy'];
$name2 = ['a' => 'jahid','c' => 'king','d'=>'niloy'];

$match_value = array_intersect($name, $name2);
$match_key = array_intersect_key($name,$name2);
$match_both = array_intersect_assoc($name,$name2);

// $match_both2 = array_intersect_uassoc($name,$name2,"compare");
// $match_both2 = array_intersect_ukey($name,$name2,"compare");
// $match_both2 = array_uintersect_assoc($name,$name2,"compare");
// $match_both2 = array_uintersect($name,$name2,"compare");
$match_both2 = array_uintersect_uassoc($name,$name2,"compare",'compare_key');


echo '<pre> 
    Just Match Value
';
    print_r($match_value);
echo '</pre>';

echo '<pre>
    Just Match Key
';
    print_r($match_key);
echo '</pre>';

echo '<pre>
    Match Value And Key
';
    print_r($match_both);
echo '</pre>';

echo '<pre>
    Match Value And Key with assocu
';
    print_r($match_both2);
echo '</pre>';
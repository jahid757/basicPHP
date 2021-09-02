<?php

$users = ['Jahid','Hasan','Niloy'];

array_shift($users);

echo '<pre>';
print_r($users);
echo '</pre>';

array_unshift($users,'Developer');


echo '<pre>';
print_r($users);
echo '</pre>';
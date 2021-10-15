<?php

$cars = [
    'japan' => 'toyota',
    'germany' => 'bmw',
];

echo '<pre>';
print_r($cars);
echo '</pre>';

echo 'array_keys($cars) : ';
print_r(array_keys($cars));

echo '<br>array_keys($cars, \'bmw\') : ';
print_r(array_keys($cars, 'bmw'));

echo '<br>array_keys($cars, \'bmw\', true) : ';
print_r(array_keys($cars, 'bmw', true));

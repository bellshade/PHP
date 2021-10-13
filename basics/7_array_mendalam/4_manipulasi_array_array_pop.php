<?php

$cars = ['bmw', 'toyota'];

echo '<pre>';
print_r($cars);
echo '</pre>';

echo 'Element yang dikeluarkan : ' . array_pop($cars);

echo '<br>Sisa array : ';
print_r($cars);

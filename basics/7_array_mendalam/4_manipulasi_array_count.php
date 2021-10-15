<?php

$array = [
    ['sepeda', 'motor', 'mobil'],
    ['gantole', 'helikopter', 'pesawat'],
];

echo '<pre>' . print_r($array, true) . '</pre>';

echo 'count($array) :' . count($array) . '<br>';
echo 'count($array, COUNT_RECURSIVE) :' . count($array, COUNT_RECURSIVE);

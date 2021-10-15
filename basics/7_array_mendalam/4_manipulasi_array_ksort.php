<?php

$fruits = [
    'a' => 'orange',
    'c' => 'grape',
    'b' => 'manggo',
];

ksort($fruits);
echo '<pre>Hasil ksort($fruits) :' . json_encode($fruits) . '</pre>';

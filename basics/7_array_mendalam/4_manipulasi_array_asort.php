<?php

$fruits = [
    'a' => 'orange',
    'b' => 'manggo',
    'c' => 'grape',
];

asort($fruits);
echo '<pre>Hasil asort($fruits) :' . json_encode($fruits) . '</pre>';

<?php

$fruits = [
    'a' => 'orange',
    'b' => 'manggo',
    'c' => 'grape',
];

arsort($fruits);
echo '<pre>Hasil arsort($fruits) :' . json_encode($fruits) . '</pre>';

<?php

$fruits = [
    'a' => 'orange',
    'c' => 'grape',
    'b' => 'manggo',
];

krsort($fruits);
echo '<pre>Hasil krsort($fruits) :' . json_encode($fruits) . '</pre>';

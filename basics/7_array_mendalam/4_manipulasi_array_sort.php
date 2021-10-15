<?php

$fruits = ['orange', 'grape', 'banana', 'avocado', 1213, '32', 32, 2213];

sort($fruits);
echo '<pre>Hasil sort($fruits) :' . json_encode($fruits) . '</pre>';

sort($fruits, SORT_NUMERIC);
echo '<pre>Hasil sort($fruits, SORT_NUMERIC) :' . json_encode($fruits) . '</pre>';

sort($fruits, SORT_STRING);
echo '<pre>Hasil sort($fruits, SORT_STRING) :' . json_encode($fruits) . '</pre>';

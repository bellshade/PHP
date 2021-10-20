<?php

$fruits = ['orange', 'grape', 'banana', 'avocado', 1213, '32', 32, 2213];

rsort($fruits);
echo '<pre>Hasil rsort($fruits) :' . json_encode($fruits) . '</pre>';

rsort($fruits, SORT_NUMERIC);
echo '<pre>Hasil rsort($fruits, SORT_NUMERIC) :' . json_encode($fruits) . '</pre>';

rsort($fruits, SORT_STRING);
echo '<pre>Hasil rsort($fruits, SORT_STRING) :' . json_encode($fruits) . '</pre>';

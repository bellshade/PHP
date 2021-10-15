<?php

$fruits = ['orange', 'grape', 'banana', 'avocado'];

echo '<pre>Hasil array_slice($fruits, 1) :' . json_encode(array_slice($fruits, 1)) . '</pre>';
echo '<pre>Hasil array_slice($fruits, 1, 2) :' . json_encode(array_slice($fruits, 1, 2)) . '</pre>';
echo '<pre>Hasil array_slice($fruits, 1, 2, true) :' . json_encode(array_slice($fruits, 1, 2, true)) . '</pre>';

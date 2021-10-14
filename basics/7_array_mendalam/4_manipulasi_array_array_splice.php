<?php

$arr1 = ['a', 'b', 'c', 'd'];

echo '<pre>$arr1 = ' . json_encode($arr1) . '</pre>';
echo '<pre>Hasil array_splice($arr1, 2) : ' . json_encode(array_splice($arr1, 2)) . '</pre>';
echo '<pre>$arr1 = ' . json_encode($arr1) . '</pre>';

echo '<br>';

$arr2 = ['a', 'b', 'c', 'd'];

echo '<pre>$arr2 = ' . json_encode($arr2) . '</pre>';
echo '<pre>Hasil array_splice($arr2, 2, 1) : ' . json_encode(array_splice($arr2, 2, 1)) . '</pre>';
echo '<pre>$arr2 = ' . json_encode($arr2) . '</pre>';

echo '<br>';

$arr3 = ['a', 'b', 'c', 'd'];

echo '<pre>$arr3 = ' . json_encode($arr3) . '</pre>';
echo '<pre>Hasil array_splice($arr3, 2, 1, [\'e\']) : ' . json_encode(array_splice($arr3, 2, 1, ['e'])) . '</pre>';
echo '<pre>$arr3 = ' . json_encode($arr3) . '</pre>';

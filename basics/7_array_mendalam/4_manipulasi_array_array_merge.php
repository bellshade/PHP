<?php

$arr1 = ['a', 'b'];
$arr2 = ['c', 'd'];

$merged = array_merge($arr1, $arr2);

echo '<pre>Hasil merge : ' . json_encode($merged) . '</pre>';

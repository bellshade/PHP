<?php

$arr = [
    'senin' => 'dota 2',
    'selasa' => 'apex',
    'rabu' => 'pokemon unite',
];

$fliped = array_flip($arr);

echo '<pre>Hasil flip : ' . json_encode($fliped) . '</pre>';

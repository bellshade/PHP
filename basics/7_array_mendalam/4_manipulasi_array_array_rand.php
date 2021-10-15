<?php

$games = ['apex', 'tetris', 'zuma'];

echo '<pre>Array $games = ' . json_encode($games) . '</pre>';

echo '<pre>Hasil dari array_rand($games) : ' . json_encode(array_rand($games)) . '</pre>';
echo '<pre>Hasil dari array_rand($games, 2) : ' . json_encode(array_rand($games, 2)) . '</pre>';

echo '<a href="">Acak ulang</a>';

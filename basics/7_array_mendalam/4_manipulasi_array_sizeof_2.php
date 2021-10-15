<?php

$tools = [
    [
        'author' => 'taylor otwell',
        'products' => ['laravel', 'forge', 'vapor'],
    ],
    [
        'author' => 'caleb porzio',
        'products' => ['alphine.js', 'laravel livewire'],
    ],
];

echo '<pre>' . print_r($tools, true) . '</pre>';

echo 'sizeof($tools) : ' . sizeof($tools) . '<br>';
echo 'sizeof($tools, false) : ' . sizeof($tools, false) . '<br>';
echo 'sizeof($tools, 0) : ' . sizeof($tools, 0) . '<br>';
echo 'sizeof($tools, true) : ' . sizeof($tools, true) . '<br>';
echo 'sizeof($tools, 1) : ' . sizeof($tools, 1) . '<br>';

<?php

$data = [
    'name' => null,
    'kota' => 'padang'
];
    if (isset($data['name'])) {
    $name = $data['name'];
    } else {
    $name = "kondiak";
    }

    var_dump($name . "\n");

    $name = $data['name'] ?? "kondiak";
    var_dump($name . "\n");

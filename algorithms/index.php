<?php

/**
 * Ini adalah file bootstrap yang menjalankan semua algoritma agar muncul di browser.
 *
 * Algoritma yang ada, dibuat dengan teknik pemrograman berorientasi objek (OOP)
 * maka untuk menjalankan algoritma, harus melakukan instantiasi dari kelas Algoritmanya.
 *
 * Anda bisa menjalankan lebih dari 1 atau bahkan semua algoritma dalam 1 halaman secara bersamaan
 * cukup jalankan tiap Kelas algoritma sesuai dengan petunjuk masing-masing algoritma
 */

use BackTracking\PathFinding;
use Sorting\BubbleSort;

// Melakukan autoload pada kelas yang digunakan di halaman ini
require_once 'autoload.php';

/**
 * Pathfinding (Backtracking)
 * --------------------------
 */
echo '<h1>PathFinding (Backtracking)</h1><hr>';
$pathFinding = new PathFinding();
$pathFinding->setMap([
    [0, 0, 1, 0, 1],
    [0, 1, 0, 0, 1],
    [0, 0, 0, 1, 0],
    [0, 0, 1, 0, 0],
    [1, 0, 0, 0, 0],
]);
$pathFinding->getMapVisual();
$pathFinding->pathFind(0, 0);
$pathFinding->getMapVisitedVisual();
$pathFinding->getLog();


/**
 * Bubble Sort (Sorting)
 * --------------------------
 */
echo '<h1>Bubble Sort (Sorting)</h1><hr>';

$inputTest = [];

foreach (range(1, 10) as $key) {
    $inputTest[] = rand(-100, 100);
}

$bubbleSort = (new BubbleSort())->bubbleSort($inputTest);

echo '<pre>';
echo 'Input array sebelum di jalankan BubbleSort' . PHP_EOL;
print_r($inputTest);
echo '</pre>';

echo '<pre>';
echo 'Input array setelah di jalankan BubbleSort' . PHP_EOL;
print_r($bubbleSort);
echo '</pre>';

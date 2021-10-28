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
use Sorting\BubbleSort\BubbleSort;
use Sorting\PopSort\PopSort;
use Searching\Linear\LinearSeacrh;
use Searching\Binary\BinarySearch;
use Searching\Jump\JumpSearch;

// Melakukan autoload pada kelas yang digunakan di halaman ini
require_once 'autoload.php';

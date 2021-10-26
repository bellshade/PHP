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



if (isset($_GET['algoritma'])) {
    $link = $_GET['algoritma'];
} else {
    $link = '';
}


switch ($link) {
    case 'binarysearch':
        runBinarySearch();
        break;
    case 'jumpsearch':
        runJumpSearch();
        break;
    case 'linearsearch':
        runLinearSearch();
        break;

    default:
        echo 'Halaman Tidak Di Temukan';
        break;
}
/**
 * Pop Sort (Sorting)
 * ---------------------------
 */

/**
 * BinarySearch
 */
function runBinarySearch()
{
    $array = [6, 7, 10, 11, 14, 17, 18, 19, 23, 26, 38, 42, 78, 79, 82, 84, 85];
    $key = 42;

    $binary = new BinarySearch($array, $key);
    $hasil = $binary->getHasil();

    echo '<pre>';
    echo '=============================================================================================' . PHP_EOL;
    echo '                                       <b>Binary Search</b>                                         ' . PHP_EOL;
    echo '=============================================================================================' . PHP_EOL;
    echo '<H4>DATA : </H4>' . PHP_EOL;
    print_r($array);
    echo 'Nilai dicari : ' . $key . PHP_EOL;
    echo '============================================================================================' . PHP_EOL;
    echo PHP_EOL . '<H4>PROGRESS_LOG :</H4>' . PHP_EOL;
    echo PHP_EOL . $binary->history;
    echo PHP_EOL . '<H3>HASIL PENCARIAN :</H3>' . PHP_EOL;
    if (!empty($hasil)) {
        echo '<H4>Data ditemukan pada index : ' . $hasil . '</H4>';
    } else {
        echo '<H4>Data tidak ditemukan</H4>';
    }
}

/**
 * Fungsi untuk menjalankan contoh
 * fungsi dibawah ini hanya untuk menguji algoritma yang telah dibuat di atas
 * Untuk menghindari pengujian berjalan otomatis.
 * sehigga sampah hasil pengujian tidak terbawa saat class/file dipanggil dari class/file lain
 * @return void
 */
function runJumpSearch()
{
    $array2 = [2, 5, 7, 8, 12, 14, 15, 28, 33, 34];
    $key = 28;

    echo '<pre>';
    $jump = new JumpSearch($array2, $key);
    $hasil = $jump->getHasil();

    echo '<pre>';
    echo '=============================================================================================' . PHP_EOL;
    echo '                                         <b>Jump Search</b>                                         ' . PHP_EOL;
    echo '=============================================================================================' . PHP_EOL;
    echo '<H4>DATA :</H4>' . PHP_EOL;
    print_r($array2);
    echo PHP_EOL . 'Nilai dicari : ' . $key . PHP_EOL;
    echo '=============================================================================================' . PHP_EOL;
    echo '<H4>PROGRESS LOG :</H4>' . PHP_EOL;
    echo $jump->ProgressLog;
    echo '=============================================================================================' . PHP_EOL;
    echo '<H4>HASIL PENCARIAN :</H4>' . PHP_EOL;
    if (!empty($hasil)) {
        echo 'Data <b>ditemukan</b> pada indek ke ' . $hasil . PHP_EOL;
    } else {
        echo 'Data <b>tidak</b> ditemukan' . PHP_EOL;
    }
    echo '=============================================================================================' . PHP_EOL;

    unset($jump);
}

function runLinearSearch()
{
}

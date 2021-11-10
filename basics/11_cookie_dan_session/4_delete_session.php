<?php

// Memulai session
session_start();

echo "<pre>";

// ----------------------------------------------
echo "<h1>Membuat Session</h1>";

// Membuat session
$_SESSION['nama'] = 'Feri Irawan';
$_SESSION['tim'] = 'PHP';
$_SESSION['umur'] = '17';

// Menampilkan semua session
print_r($_SESSION);

// Hasil:
// Array
// (
//     [nama] => Feri Irawan
//     [tim] => PHP
// )



// ----------------------------------------------
echo "\n\n<h1>Menghapus Session Tertentu</h1>";
echo "Menghapus session dengan key `umur`\n\n";

// Menghapus session
unset($_SESSION['umur']);

// Menampilkan
echo "Menampilkan semua session yang tersisa:\n\n";
print_r($_SESSION);

// Hasil:
// Array
// (
//     [nama] => Feri Irawan
//     [tim] => PHP
// )



// ----------------------------------------------
echo "\n\n<h1>Menghapus Semua Session</h1>";

// Menghapus session
session_unset();
session_destroy();

// Menampilkan
echo "Menampilkan semua session yang tersisa:\n\n";
print_r($_SESSION);

// Hasil:
// Array
// (
// )

// Hasilnya hanya menampilkan array kosong,
// itu artinya berhasil menghapus session

echo "</pre>";

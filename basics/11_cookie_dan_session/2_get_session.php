<?php

// Memulai session
session_start();

echo "<pre>";

// ----------------------------------------------
echo "<h1>Membuat Session</h1>";

// Membuat session
$_SESSION["nama"] = "Feri Irawan";
$_SESSION["tim"] = "PHP";

// Menampilkan semua session
print_r($_SESSION);

// Hasil:
// Array
// (
//     [nama] => Feri Irawan
//     [tim] => PHP
// )



// ----------------------------------------------
echo "\n\n<h1>Mengambil/Menampilkan Session</h1>";

// Menampilkan session
echo $_SESSION["nama"] . PHP_EOL;
echo $_SESSION["tim"];

echo "</pre>";

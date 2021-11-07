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
echo "\n\n<h1>Mengubah Session</h1>";
echo "Mengubah session dengan key `nama` jadi `Wahyudi`\n\n";

// Mengubah session
$_SESSION["nama"] = "Wahyudi";

// Menampilkan session
print_r($_SESSION);

// Hasil:
// Array
// (
//     [nama] => Wahyudi
//     [tim] => PHP
// )

echo "</pre>";

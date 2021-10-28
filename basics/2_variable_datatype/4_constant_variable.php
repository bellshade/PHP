<?php

echo "<pre>";

/**
 * Konstanta
 * --------------------------
 */
echo "<h1>Konstanta</h1>";

// --------------------------
echo "<h2>Penulisan konstanta yang diperbolehkan</h2>";
// Contoh:
define('NAMA', "Feri Irawan");
define('NAMA_NEGARA', "Indonesia"); // menggunakan underscore
define('MOBIL01', "Indonesia");     // menggunakan angka di akhir
define("__NAMA__", "Wahyudi");      // menggunakan double underscore diawal dan akhir

echo NAMA . "\n";        // Hasil: Feri Irawan
echo NAMA_NEGARA . "\n"; // Hasil: Indonesia
echo __NAMA__ . "\n";    // Hasil: Wahyudi


// --------------------------
// Penulisan yang tidak diperbolehkan
// Contoh:
define('01NAMA', "Badar Wildanie");
define('MEREK-MOBIL', "Honda");


// --------------------------
echo "<h2>Penulisan konstanta dengan kata kunci const</h2>";
/*
 * Deklarasi variabel konstanta dengan kata kunci const
 * const NAMA_VARIABEL = "nilai variabel"
 * nilai variabel dapat berupa string, number, null, dan boolean
 */

// Contoh:
// Deklarasi Variabel
const NAMA_LENGKAP = "Rochmad Nurul Fahmi";

// Menampilkan nilai
echo NAMA_LENGKAP . "\n"; // Hasil: Rochmad Nurul Fahmi
// Atau
echo constant("NAMA_LENGKAP"); // Hasil: Rochmad Nurul Fahmi

echo "</pre>";

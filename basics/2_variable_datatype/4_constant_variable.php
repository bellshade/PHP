<?php

/**
 * Konstanta
 * --------------------------
 */

// --------------------------
// Penulisan konstanta yang diperbolehkan
// Contoh:
define('NAMA', "Feri Irawan");
define('NAMA_NEGARA', "Indonesia"); // menggunakan underscore
define('MOBIL01', "Indonesia");     // menggunakan angka di akhir
define("__NAMA__", "Wahyudi");      // menggunakan double underscore diawal dan akhir

echo NAMA;        // Hasil: Feri Irawan
echo NAMA_NEGARA; // Hasil: Indonesia
echo __NAMA__;    // Hasil: Wahyudi


// --------------------------
// Penulisan yang tidak diperbolehkan
// Contoh:
define('01NAMA', "Badar Wildanie");
define('MEREK-MOBIL', "Honda");


/*
 * Deklarasi variabel konstanta dengan kata kunci const
 * const NAMA_VARIABEL = "nilai variabel"
 * nilai variabel dapat berupa string, number, null, dan boolean
 */

// Contoh:
// Deklarasi Variabel
const NAMA_LENGKAP = "Rochmad Nurul Fahmi";

// Menampilkan nilai
echo NAMA_LENGKAP; // Hasil: Rochmad Nurul Fahmi
// atau
echo constant("NAMA_LENGKAP"); // Hasil: Rochmad Nurul Fahmi

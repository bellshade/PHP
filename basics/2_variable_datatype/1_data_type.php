<?php

/**
 * Tipe Data
 * -------------------------
 * Dibawah ini adalah contoh penulisan tipe data
 */

/**
 * String
 * --------------------------
 */

// --------------------------
// Menulis string menggunakan tanda petik satu.
// Contoh:
$text = 'Hello World!';

echo $text; // Hasil: Hello World!


// --------------------------
// Menulis string mengunakan petik dua.
// Contoh:
$name = "Feri Irawan";

echo $name; // Hasil: Feri Irawan


// --------------------------
// Menulis string menggunakan sintaks heredoc
// Contoh 1:
$buah = <<<NAMA_BUAH
Apel
Mangga
Jeruk
NAMA_BUAH;  // <--- Penutup tanpa indentasi

echo $buah;
// Hasil:
// Apel
// Mangga
// Jeruk

// Contoh 2:
$buah = <<<NAMA_BUAH
    Apel
    Mangga
    Jeruk
  NAMA_BUAH;  // <--- Penutup dengan indentasi

echo $buah;
// Hasil:
//    Apel
//    Mangga
//    Jeruk


// Contoh 3:
// label dengan tanda petik dua
$buah = <<<"NAMA_BUAH"
    Apel
    Mangga
    Jeruk
NAMA_BUAH;

echo $buah;
// Hasil:
//    Apel
//    Mangga
//    Jeruk


// --------------------------
// Menulis string dengan sintaks nowdoc.
// Contoh:
$buah = <<<'NAMA_BUAH'
Apel
Mangga
Jeruk
NAMA_BUAH;

echo $buah;
// Hasil:
// Apel
// Mangga
// Jeruk



/**
 * Integer
 * --------------------------
 */

// -------------------------
// Melakukan perhitungan
$x = 1 + 2;

var_dump($x); // Hasil: int(3)



/**
 * Float
 * --------------------------
 */

// --------------------------
// Melakukan perhitungan
$x = 1.5 + 1.5;

var_dump($x); // Hasil: float(3)



/**
 * Boolean
 * ---------------------------
 */

// ---------------------------
// Contoh:
$x = true;
$y = false;

var_dump($x);  // Hasil: bool(true)
var_dump($y);  // Hasil: bool(false)



/**
 * NULL
 * --------------------------
 */

// --------------------------
// Variabel tanpa nilai
$kosong;

var_dump($kosong); // Hasil: NULL


// --------------------------
// Mengosongkan variabel yang nilanya sudah ada
$nama = "Feri Irawan";
$nama = null; // <--- mengosongkan

var_dump($nama); // Hasil: NULL



/**
 * Resource
 * --------------------------
 */

// --------------------------
// Menyimpan hasil dari function ke variable sebagai resource
function hitung($operasi)
{
    return $operasi;
}

$hasil = hitung(1 + 2); // <--- resource

echo $hasil; // Hasil: 3

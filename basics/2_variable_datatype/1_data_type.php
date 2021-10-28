<?php

echo "<pre>";
/**
 * Tipe Data
 * -------------------------
 * Dibawah ini adalah contoh penulisan tipe data
 */

/**
 * String
 * --------------------------
 */
echo "<h1>String</h1>";

// --------------------------
echo "<h2>Menulis string menggunakan tanda petik satu</h2>";
// Contoh:
$text = 'Hello World!';

echo $text; // Hasil: Hello World!
echo "\n";

// --------------------------
echo "<h2>Menulis string mengunakan petik dua</h2>";
// Contoh:
$name = "Feri Irawan";

echo $name; // Hasil: Feri Irawan
echo "\n";

// --------------------------
echo "<h2>Menulis string menggunakan sintaks heredoc</h2>";
// Contoh 1:
$buah = <<<NAMA_BUAH
Apel
Mangga
Jeruk
NAMA_BUAH;  // <--- Penutup tanpa indentasi

echo $buah;
echo "\n\n";
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
echo "\n\n";
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
echo "\n\n";
// Hasil:
//    Apel
//    Mangga
//    Jeruk


// --------------------------
echo "<h2>Menulis string dengan sintaks nowdoc</h2>";
// Contoh:
$buah = <<<'NAMA_BUAH'
Apel
Mangga
Jeruk
NAMA_BUAH;

echo $buah;
echo "\n";
// Hasil:
// Apel
// Mangga
// Jeruk



/**
 * Integer
 * --------------------------
 */
echo "\n\n";
echo "<h1>Integer</h1>";

// -------------------------
echo "<h2>Melakukan perhitungan</h2>";
$x = 1 + 2;

var_dump($x); // Hasil: int(3)



/**
 * Float
 * --------------------------
 */
echo "\n\n";
echo "<h1>Float</h1>";

// --------------------------
echo "<h2>Melakukan perhitungan</h2>";
$x = 1.5 + 1.5;

var_dump($x); // Hasil: float(3)



/**
 * Boolean
 * ---------------------------
 */
echo "\n\n";
echo "<h1>Boolean</h1>";

// ---------------------------
echo "<h2>Menulis tipe data boolean</h2>";
// Contoh:
$x = true;
$y = false;

var_dump($x);  // Hasil: bool(true)
var_dump($y);  // Hasil: bool(false)



/**
 * NULL
 * --------------------------
 */
echo "\n\n";
echo "<h1>NULL</h1>";

// --------------------------
echo "<h2>Variabel tanpa nilai</h2>";
$kosong;

var_dump(@$kosong); // Hasil: NULL

// Info
// Tanda @ di atas berfungsi untuk menghilangkan pesan error.
// Karna variabel tanpa nilai akan menghasilkan error dan mengembalikan tipe data NULL


// --------------------------
echo "<h2>Mengosongkan variabel yang nilanya sudah ada</h2>";
$nama = "Feri Irawan";
$nama = null; // <--- mengosongkan

var_dump($nama); // Hasil: NULL



/**
 * Resource
 * --------------------------
 */
echo "\n\n";
echo "<h1>Resource</h1>";

// --------------------------
echo "<h2>Menyimpan hasil dari function ke variable sebagai resource</h2>";
function hitung($operasi)
{
    return $operasi;
}

$hasil = hitung(1 + 2); // <--- resource

echo $hasil; // Hasil: 3

echo "</pre>";

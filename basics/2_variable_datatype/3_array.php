<?php

echo "<pre>";

/**
 * Array
 * --------------------------
 */
echo "<h1>Array</h1>";

//  -------------------------
echo "<h2>Membuat array menggunakan kurung siku</h2>";
$bilangan = [1, 2, 3];

var_dump($bilangan);  // function var_dump() akan menghasilkan key dan value
// Hasil:
// array(3) {
//   [0]=>  <--- ini index / key
//   int(1) <--- ini nilai
//   [1]=>  <--- ini index / key
//   int(2) <--- ini nilai
//   [2]=>  <--- ini index / key
//   int(3) <--- ini nilai
// }


//  -------------------------
echo "<h2>Membuat array menggunakan function array()</h2>";
$bilangan = array(1, 2, 3);

var_dump($bilangan);  // function var_dump() akan menghasilkan key dan value
// Hasil:
// array(3) {
//   [0]=>  <--- ini index / key
//   int(1) <--- ini nilai
//   [1]=>  <--- ini index / key
//   int(2) <--- ini nilai
//   [2]=>  <--- ini index / key
//   int(3) <--- ini nilai
// }


// --------------------------
echo "<h2>Array numerik</h2>";
$buah = ["Apel", "Mangga", "Jeruk"];

echo $buah[0];  // Hasil: Apel


// --------------------------
echo "<h2>Array asosiatif</h2>";
$pengguna = [
    "nama" => "Feri Irawan",
    "umur" => 17,
];

echo $pengguna["nama"]; // Hasil: Feri Irawan


// --------------------------
echo "<h2>Penggabungan array numerik dengan array asosiatif</h2>";
$acara = [
    "01/10/2021",           // <--- array numerik
    "nama" => "Sepak bola"  // <--- array asosiatif
];

echo $acara[0];       // Hasil: 01/10/2021
echo "\n";
echo $acara["nama"];  // Hasil: Sepak bola


// --------------------------
echo "<h2>Menambah data ke dalam array</h2>";
$buah = ["Apel", "Mangga", "Jeruk"];

$buah[] = "Pisang"; // <--- menambah data

var_dump($buah);
// Hasil:
// array(4) {
//   [0]=>
//   string(4) "Apel"
//   [1]=>
//   string(6) "Mangga"
//   [2]=>
//   string(5) "Jeruk"
//   [3]=>
//   string(6) "Pisang"  <--- berhasil ditambah
// }


// --------------------------
echo "<h2>Mengubah data array</h2>";
// Contoh 1:
$buah = ["Apel", "Mangga", "Jeruk"];

$buah[0] = "Pisang"; // <--- mengubah data pada index ke-0

var_dump($buah);
echo "\n";
// Hasil:
// array(4) {
//   [0]=>
//   string(6) "Pisang"  <--- berhasil diubah
//   [1]=>
//   string(6) "Mangga"
//   [2]=>
//   string(5) "Jeruk"
// }


// Contoh 2:
$pengguna = [
    "nama" => "Feri Irawan",
    "umur" => 17
];

$pengguna["nama"] = "Wahyudi";  // <--- mengubah data

var_dump($pengguna);
// Hasil:
// array(2) {
//   ["nama"]=>
//   string(7) "Wahyudi"  <--- berhasil diubah
//   ["umur"]=>
//   int(17)
// }


// --------------------------
echo "<h2>Menghapus data</h2>";
// Contoh 1:
$buah = ["Apel", "Mangga", "Jeruk"];

unset($buah[1]);  // <--- menggunakan function unset() untuk menghapus data pada index ke-1

var_dump($buah);
echo "\n";
// Hasil:
// array(2) {
//   [0]=>
//   string(4) "Apel"
//   [2]=>
//   string(5) "Jeruk"
// }


// Contoh 2:
$buah = [
    "manis" => "Pisang",
    "asam" => "Belimbing"
];

unset($buah["asam"]); // <--- menghapus buah dengan key `asam`

var_dump($buah);
// Hasil:
// array(1) {
//   ["manis"]=>
//   string(6) "Pisang"
// }

echo "</pre>";

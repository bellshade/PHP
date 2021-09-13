<?php

/**
 * ---------------------
 * TYPE DATA - ARRAY
 * ---------------------
 *
 * Daftar isi
 * --------------------
 * Pada materi ini kita akan berajar:
 * - Apa itu Array?
 * - Jenis-jenis Array
 * - Membuat
 * - Mengambil/Membaca
 * - Menambah
 * - Mengubah/Mengedit
 */

/**
 * Apa itu Array?
 * --------------------
 * Array merupakan salah satu tipe data dalam bahasa pemrograman PHP.
 * Array bisa di jadikan sebuah tempat penyimpanan setementara, atau bahkan seterusnya.
 *
 * Ini sangat berguna jika kita ingin menampuang banyak data dengan kategori yang sama
 *
 * Misalnya data buah, dari pada kita menulisnya seperti berikut :
 * $buah1 = 'apel';
 * $buah2 = 'mangga';
 * $buah3 = 'jeruk';
 *
 * Kita bisa menuliskannya seperti berikut :
 * $daftar_buah = ['apel', 'mangga', 'jeruk'];
 *
 * Kiat:
 * --------------------
 * Tipe data array dapat berisi bebarapa tipe data seperti string, integer, boolean, atau bahkan array.
 *
 */



/**
 * Jenis-jenis Array
 * --------------------
 * Dalam PHP terdapat dua tipe data array, yaitu :
 * 1. Array biasa
 * 2. Array asosiatif
 *
 * Array Biasa
 * --------------------
 * Array biasa adalah array yang tipe datanya hanya memiliki index, contohnya:
 */

$daftar_buah = [
  'apel',
  'jeruk',
  'mangga',
];

/**
 * Array Asosiatif
 * --------------------
 * Array asosiatif adalah array yang masing-masing datanya memiliki key bukan index.
 * Key dan index dipisah dengan tanda `=>` dengan informasi sebagai berikut:
 *
 * key => value
 *
 * Contoh :
 */

$pengguna = [
  "nama"   => 'Feri Irawan',
  "umur"   => 17,
  "github" => 'https://github.com/feri-irawan',
  "tim"    => 'PHP'
];



/**
 * Membuat
 * ---------------------
 * Untuk membuat tipe data array Anda hanya perlu menggunakan tanda berikut:
 * - [ (sebagai pembuka)
 * - ] (sebagai penutup)
 * atau
 * - array( (sebagai pembuka)
 * - ) (sebagai penutup)
 */


/**
 * Contoh 1 :
 * --------------------
 */

$daftar_buah = [
  'aple',
  'mangga',
  'jeruk',
  'stroberi'
];

print_r("Menampilkan semua daftar buah : \n");
print_r($daftar_buah);

// Hasilnya:
// Array
// (
//     [0] => aple
//     [1] => mangga
//     [2] => jeruk
//     [3] => stroberi
// )


/**
 * Contoh 2 :
 * --------------------
 */

$daftar_nama = array(
  'Sandhika Galih',
  'Feri Irawan',
  'Badar Wildani'
);

print_r("\nMenampilkan semua daftar nama : \n");
print_r($daftar_nama);

// Hasilnya:
// Array
// (
//     [0] => Sandhika Galih
//     [1] => Feri Irawan
//     [2] => Badar Wildani
// )



/**
 * Info :
 * ---------------------
 * Apa itu function print_r() ?
 * Temukan jawabanya di sini <https://www.php.net/manual/en/function.print-r.php>
 */



/**
 * Mengambil / Membaca
 * ---------------------
 * Dalam tipe data array, kita dapat mengambil data dengan 2 cara, yaitu :
 * - Menggunakan index data, dan
 * - Menggunakan key data
 *
 * Tiap-tiap data memiliki `index` yang di mulai dari 0,1,2,3 dan seterusnya.
 * Ada pun data yang menggunakan index khusus yang disebut `key`.
 * Key biasanya digunakan pada tipe data array asosiatif
 * Coba perhatikan dua contoh berikut :
 */



/**
 * Contoh Array dengan Index (Array Biasa) :
 * --------------------
 */

$daftar_buah = [
  'apel',   // index: 0
  'mangga', // index: 1
  'jeruk'   // index: 2
];


/**
 * Contoh Array dengan Key (Array Asosiatif) :
 * --------------------
 */

$pengguna = [
  "nama" => "Feri Irawan",   // key: nama
  "umur" => 17,              // key: umur
  "tim"  => "PHP",           // key: tim
];



/**
 * Jadi, bagaimana cara mengambil datanya?
 * Nah, caranya cukup mudah, kita hanya perlu menggunakan `INDEX` atau `KEY` dari masing-masing data yang ada dalam array.
 * Coba perhatikan dua contoh berikut :
 */



/**
 * Contoh 1:
 * --------------------
 */

$daftar_buah = [
  'apel',
  'jeruk',
  'mangga',
];

// Mengambil data dengan index ke-0
$buah = $daftar_buah[0];

print_r("\nMengambil data dengan index ke-0 : \n");
var_dump($buah);

// Hasilnya :
// string(4) "apel"


/**
 * Contoh 2 :
 * --------------------
 * Berikut contohnya
 */

$pengguna = [
  "nama" => "Feri Irawan",
  "umur" => 17,
  "tim"  => "PHP",
];

// Mengambil data dengan index ke-2
$nama = $pengguna["nama"];

print_r("\nMengambil data dengan key 'nama' : \n");
var_dump($nama);

// Hasilnya :
// string(11) "Feri Irawan"



/**
 * Menambah
 * --------------------
 * Untuk menambah data kita bisa melakukannya seperti berikut :
 */

/**
 * Contoh 1 :
 * --------------------
 * Menambah data kedalam array tanpa key.
 */

$daftar_merek_mobil[] = 'Honda';
$daftar_merek_mobil[] = 'Toyota';

print_r("\nMenambah data : \n");
print_r($daftar_merek_mobil);

// Hasilnya :
// Array
// (
//     [0] => Honda
//     [1] => Toyota
// )


$daftar_merek_mobil = []; // Membuat array kosong (hiraukan saja)


/**
 * Contoh 2 :
 * --------------------
 * Menambah data dengan key
 */

$daftar_merek_mobil = [
  'Honda',
  'Toyota'
];

$daftar_merek_mobil['sport_1'] = 'Lamborghini';
$daftar_merek_mobil['sport_2'] = 'Bugati';

print_r("\nMenambah data dengan key : \n");
print_r($daftar_merek_mobil);

// Hasilnya :
// Array
// (
//     [0] => Honda
//     [1] => Toyota
//     [sport_1] => Lamborghini
//     [sport_2] => Bugati
// )


/**
 * Kesimpulan
 * --------------------
 * Dengan menambah data tanpa key akan menghasilkan array dengan index (array biasa),
 * sedangkan menambah data dengan key akan menghasilkan array dengan key (array sosiatif)
 */


/**
 * Mengubah / Mengedit
 * --------------------
 * Untuk mmengubah value data dalam array sangatlah mudah,
 * kita hanya perlu mengunakan INDEX atau KEY dari data yang sudah ada di dalam array.
 * Coba perhatikan contoh berikut :
 */

$daftar_merek_mobil = [
  'Honda',
  'Toyota',
  'sport_1' => 'Lamborghini',
  'sport_2' => 'Bugati'
];


/**
 * Contoh 1 :
 * --------------------
 * Mengubah data menggunakan index.
 */

$daftar_merek_mobil[1] = 'Chevrolet';

print_r("\nMengubah data dengan index '1' menjadi 'Chevrolet' : \n");
print_r($daftar_merek_mobil);

// Hasilnya :
// Array
// (
//     [0] => Honda
//     [1] => Chevrolet
//     [sport_1] => Lamborghini
//     [sport_2] => Bugati
// )


/**
 * Contoh 2 :
 * --------------------
 * Mengubah data menggunakan key.
 */

$daftar_merek_mobil['sport_1'] = 'BMW';

print_r("\nMengubah value dari key 'sport_1' menjadi 'BMW' : \n");
print_r($daftar_merek_mobil);

// Hasilnya :
// Array
// (
//     [0] => Honda
//     [1] => Chevrolet
//     [sport_1] => BMW
//     [sport_2] => Bugati
// )

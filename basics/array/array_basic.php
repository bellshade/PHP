<?php

/**
 * ---------------------
 * TYPE DATA - ARRAY
 * ---------------------
 *
 * Daftar Isi
 * --------------------
 * Pada materi ini kita akan belajar:
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
 * Array bisa di jadikan sebuah tempat penyimpanan sementara, atau bahkan seterusnya.
 *
 * Ini sangat berguna jika kita ingin menampung banyak data dengan kategori yang sama
 *
 * Misalnya data buah, dari pada kita menulisnya seperti berikut :
 * $buah1 = 'Apel';
 * $buah2 = 'Mangga';
 * $buah3 = 'Jeruk';
 *
 * Lebih baik kita bisa menuliskannya seperti berikut :
 * $daftar_buah = ['Apel', 'Mangga', 'Jeruk'];
 *
 * Kiat:
 * --------------------
 * Tipe data array dapat berisi beberapa tipe data seperti string, integer, boolean, atau bahkan array (bersarang).
 * Berikut contoh sederhananya :
 */

$data = [
  1,               // integer
  2,               // integer
  'Hello',         // string
  'World!',        // string
  true,            // boolean
  false,           // boolean
  [                // array (bersarang)
    'Hello world!' // string
  ],
];

/**
 * Jenis-jenis Array
 * --------------------
 * Dalam PHP terdapat dua tipe data array, yaitu :
 * 1. Array Numerik
 * 2. Array Asosiatif
 *
 * Array Numerik
 * --------------------
 * Array Numerik adalah array yang tiap tiap datanya hanya memiliki index,
 * Index dalam array selalu di mulai dari angka 0,1,2,3 dan seterusnya.
 *
 * Berikut contoh penulisan array numerik :
 */

$daftar_buah = [
  'Apel',    // index: 0
  'Jeruk',   // index: 1
  'Mangga',  // index: 2
];


/**
 * Array Asosiatif
 * --------------------
 * Array asosiatif adalah array yang masing-masing datanya memiliki key bukan index.
 * Key dan index dipisah dengan tanda `=>` dengan informasi sebagai berikut:
 *
 * key => value
 *
 * Berikut contoh penulisan array asosiatif:
 */

$data_pengguna = [
  "nama"   => 'Feri Irawan',
  "umur"   => 17,
  "github" => 'https://github.com/feri-irawan',
  "tim"    => 'PHP'
  // ^^^        ^^^
  // Key        value
];



/**
 * Membuat
 * ---------------------
 * Pada contoh-contoh sebelumnya kita telah membuat beberapa array.
 * Dan pada bagian ini, kita akan membahas lebih lengkap tentang membuat tipe data array.
 *
 * Nah, untuk membuat tipe data array kita hanya perlu menggunakan tanda berikut:
 * - `[` (sebagai pembuka)
 * - `]` (sebagai penutup)
 *
 * Atau menggunakan function berikut :
 * - `array()`
 */


/**
 * Contoh 1 :
 * --------------------
 * Membuat array numerik menggunakan tanda kurung siku (`[` dan `]`)
 */

$daftar_buah = [
  'Apel',
  'Mangga',
  'Jeruk',
  'Stroberi'
];

print_r("Membuat array numerik menggunakan tanda kurung siku (`[` dan `]`) : \n");
print_r($daftar_buah);

// Hasilnya:
// Array
// (
//     [0] => Apel
//     [1] => Mangga
//     [2] => Jeruk
//     [3] => Stroberi
// )


/**
 * Contoh 2 :
 * --------------------
 * Membuat array numerik dengan menggunakan function `array()`
 */

$daftar_nama = array(
  'Sandhika Galih',
  'Feri Irawan',
  'Badar Wildanie'
);

print_r("\nMembuat array numerik dengan menggunakan function `array()` : \n");
print_r($daftar_nama);

// Hasilnya:
// Array
// (
//     [0] => Sandhika Galih
//     [1] => Feri Irawan
//     [2] => Badar Wildanie
// )


/**
 * Contoh 3 :
 * --------------------
 * Membuat array asosiatif menggunakan tanda kurung siku (`[` dan `]`)
 */

$daftar_buah = [
  "manis" => [
    "Apel",
    "Mangga",
    "Durian"
  ],
  "masam" => [
    "Jeruk",
    "Mangga",
    "Belimbing"
  ],
];

print_r("\nMembuat array asosiatif menggunakan tanda kurung siku (`[` dan `]`) : \n");
print_r($daftar_buah);

// Hasilnya :
// Array
// (
//     [manis] => Array
//         (
//             [0] => Apel
//             [1] => Mangga
//             [2] => Durian
//         )

//     [masam] => Array
//         (
//             [0] => Jeruk
//             [1] => Mangga
//             [2] => Belimbing
//         )
// )


/**
 * Contoh 4 :
 * --------------------
 * Membuat array asosiatif menggunakan function `array()`
 */

$daftar_buah = array(
  "manis" => array(
    "Apel",
    "Mangga",
    "Durian"
  ),
  "masam" => array(
    "Jeruk",
    "Mangga",
    "Belimbing"
  ),
);

print_r("\nMembuat array asosiatif menggunakan function `array()` : \n");
print_r($daftar_buah);

// Hasilnya:
// Array
// (
//     [manis] => Array
//         (
//             [0] => Apel
//             [1] => Mangga
//             [2] => Durian
//         )

//     [masam] => Array
//         (
//             [0] => Jeruk
//             [1] => Mangga
//             [2] => Belimbing
//         )
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
 */


/**
 * Contoh 1:
 * --------------------
 */

$daftar_buah = [
  'Apel',
  'Jeruk',
  'Mangga',
];

// Mengambil data dengan index ke-0
$buah = $daftar_buah[0];

print_r("\nMengambil data dengan index ke-0 : \n");
var_dump($buah);

// Hasilnya :
// string(4) "Apel"


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
 * Dengan menambah data tanpa key akan menghasilkan array dengan index (array Numerik),
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

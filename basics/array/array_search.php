<?php

/**
 * ------------------
 * MENCARI DATA DALAM ARRAY
 * ------------------
 * Array adalah salah satu tipe data khusus dalam PHP yang dapat menampung lebih dari satu nilai
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
 * Untuk belajar lebih lengkap tentang tipe data array, kamu bisa mengunjungi link berikut :
 * <https://github.com/bellshade/PHP>
 *
 * Nah, pada pembahasan ini kita akan belajar membuat algoritma pencarian dalam array
 * - Search by Key, yaitu mencari data dalam array bersarkan key atau index
 * - Search by value, yaitu mencari data dalam array bersarkan value
 */


/**
 * Mencari data berdasarkan key
 * ------------------
 * @param mixed $key Key array
 * @param Array $array Data array
 */
function search_by_key($key, $array)
{
  // Melakukan perulangan semua data yang ada dalam array
    foreach ($array as $array_key => $array_value) {
      // Mengecek apakah key yang dicari ($key) sama dengan key yang ada di array ($array)
        if (strtolower($key) === strtolower($array_key)) {
          // Jika ditemukan maka kembalikan key beserta value-nya
            return [$array_key => $array_value];

          // Kemudian hentikan perulangan
            break;
        }
    }

  // Jika data tidak ditemukan maka kembalikan array kosong
    return [];
}



// CONTOH 1
// ------------------
// Array daftar buah
$daftar_buah = [
  'manis' => ['Rambutan', 'Durian', 'Pisang', 'Mangga'],
  'kecut' => ['Jeruk', 'Mangga', 'Belimbing'],
  'besar' => ['Semangka', 'Durian', 'Kelapa'],
  'kecil' => ['Lengkeng', 'Anggur', 'Stroberi']
];

// Mencari buah dengan key `manis`
$cari_buah = search_by_key('manis', $daftar_buah);

// Cetak data yang ditemukan
print_r('Mencari buah dengan key `manis`');
print_r($cari_buah);

// Hasil :
// Array
// (
//   [manis] => Array
//     (
//       [0] => Rambutan
//       [1] => Durian
//       [2] => Pisang
//       [3] => Mangga
//     )
// )



// CONTOH 2
// ------------------
// Mencari buah dengan index value
$cari_buah = search_by_key(0, $daftar_buah['besar']);

// Cetak data yang ditemukan
print_r('Mencari buah dengan index value');
print_r($cari_buah);

// Hasil :
// Array
// (
//   [0] => Semangka
// )



/**
 * Mencari data berdasarkan value
 * ------------------
 * @param mixed $value value array
 * @param Array $array Data array
 */
function search_by_value($value, $array)
{
    $result = [];
  // Melakukan perulangan semua data yang ada dalam array
    foreach ($array as $array_key => $array_value) {
      // Mengecek apakah value yang dicari ($value) sama dengan value yang ada di array ($array)
        if (strtolower($value) === strtolower($array_value)) {
          // Menyusun semua data yang ditemukan kedalam array baru
          // Kenapa dimasukan ke dalam array baru?
          // Ya karna value yang ditemukan bisa saja sama dengan value yang ada di key yg lain
            $result[$array_key] = $array_value;
        }
    }

  // Jika data tidak ditemukan maka kembalikan array kosong
    return $result;
}



// CONTOH 1
// ------------------
// Array daftar buah
$stok_buah = [
  "apel" => 12,
  "mangga" => 5,
  "jeruk" => 12,
];

// Mencari buah dengan value `12`
$cari_buah = search_by_value(12, $stok_buah);

// Cetak data yang ditemukan
print_r('Mencari buah dengan value `12`');
print_r($cari_buah);

// Hasil :
// Array
// (
//   [apel] => 12
//   [jeruk] => 12
// )


// CONTOH 2
// ------------------
// Mencari buah dengan value `5`
$cari_buah = search_by_value(5, $stok_buah);

// Cetak data yang ditemukan
print_r('Mencari buah dengan value `5`');
print_r($cari_buah);

// Hasil :
// Array
// (
//     [mangga] => 5
// )

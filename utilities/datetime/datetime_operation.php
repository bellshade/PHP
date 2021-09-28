<?php

/**
 * ----------------------------------------------------------------------
 * * DATETIME ARITHMETIC
 * ----------------------------------------------------------------------
 * Aritmatika tanggal dan waktu sangat bermanfaat untuk manipulasi
 * dan memproses tanggal lebih jauh lagi. Ada banyak penggunaannya pada
 * aplikasi web misalnya seperti:
 *  - Mengambil tanggal 1 tahun sebelum tanggal tertentu.
 *  - Menghitung umur
 *  - Mengecek kondisi kadaluarsa sesuatu dengan menggunakan tanggal.
 *  - Menetapkan masa berlaku sesuatu menggunakan penambahan tanggal.
 *  - Dan lain sebagainya.
 */

/**
 * 1. Menambah dan mengurangi tanggal
 * -----------------------------------------
 * modify() digunakan untuk memanipulasi tanggal agar dapat diambil tanggal
 * beberapa hari, bulan dan tahun berikutnya atau sebelumnya dari tanggal yang ditentukan.
 * Hal ini berlaku juga untuk memanipulasi waktu.
 *
 * Syntax =>  modify( String modifier )
 *
 * Untuk menggunakan, cukup atur modifier string di parameternya
 * dengan format: "[+ | -]angka [second|minute|hour|day|week|month|year]"
 * Jika ingin mencari 1 tahun setelah tanggal tertentu maka: "+1 year"
 */
echo "<h2 style='margin: 0'>Menambah & mengurangi tanggal</h2>";
$tanggal_sekarang = new DateTime();
echo '<br/>Tanggal sekarang: ' . $tanggal_sekarang->format('d F Y');
echo '<br/> 1 hari kemudian: ' . $tanggal_sekarang->modify('+1 day')->format('d F Y');
echo '<br/> 3 hari kemudian: ' . $tanggal_sekarang->modify('+3 day')->format('d F Y');
echo '<br/> 2 bulan kemudian: ' . $tanggal_sekarang->modify('+2 month')->format('d F Y');
echo '<br/> 1 Tahun sebelumnya: ' . $tanggal_sekarang->modify('-1 year')->format('d F Y');
echo '<br/>';

$waktu_sekarang = new DateTime();
echo '<br/> Waktu sekarang: ' . $waktu_sekarang->format('H:i:s');
echo '<br/> 30 detik sebelumnya: ' . $waktu_sekarang->modify('-30 second')->format('H:i:s');
echo '<br/> 5 menit setelahnya: ' . $waktu_sekarang->modify('+5 minute')->format('H:i:s');
echo '<br/> 1 jam setelahnya: ' . $waktu_sekarang->modify('+1 hour')->format('H:i:s');
echo '<br/>';
echo '<br/>';



/**
 * 2. Mengambil selisih tanggal
 * -----------------------------------------
 * untuk mencari selisih dari dua tanggal, anda bisa menggunakan diff()
 * cara menggunakannya adalah, jalankan method diff() dari objek tanggal awal
 * lalu masukkan objek DateTime tanggal akhir sebagai parameter pertamanya.
 * Hal ini juga berlaku untuk mencari selisih waktu
 *
 * Syntax  =>  diff(DateTime objek_target_tanggal)
 *
 * Hasil kembalian dari diff() adalah berupa objek yang memiliki
 * property dan valuenya untuk jumlah selisih dari kedua tanggal
 * nama property ini berupa format tanggal PHP seperti: y, m, d, h, i, s (huruf kecil)
 * yang merepresentasikan jumlah dari [format tanggal] itu sendiri
 */
echo "<h2 style='margin: 0'>Mengambil selisih tanggal</h2>";

$tanggal_lahir = DateTime::createFromFormat('d-m-Y', '28-07-1999');
$tanggal_sekarang = new DateTime();
echo '<br/> Tanggal Lahir: ' . $tanggal_lahir->format('d-m-Y');

$umur = $tanggal_lahir->diff($tanggal_sekarang);
echo '<br/> Selisihnya dari tgl sekarang (umur): ' . $umur->y . ' Tahun, ' . $umur->m . ' Bulan, ' . $umur->d . ' Hari';
echo '<br/>';
echo '<br/>';

/**
 * 3. Perbandingan dan pengkondisian tanggal
 * -----------------------------------------
 * Melakukan perbandingan tanggal bermanfaat untuk mengetahui
 * apakah suatu tanggal sudah memenuhi kondisi tertentu.
 * Misalnya, untuk mengecek apakah suatu tanggal sudah melewati tanggal sekarang
 *
 * Untuk melakukan hal itu anda cukup melakukan pengkondisian terhadap
 * 2 objek DateTime yang berbeda. anda dapat menggunakan
 * operator pembanding seperti <, >, <=, >=, ==, !=
 * dan operator logika seperti &&, ||, and, or, xor
 */
echo "<h2 style='margin: 0'>Melakukan perbandingan tanggal</h2>";

$tanggal_sekarang = new DateTime();
echo '<br/> Tanggal sekarang: ' . $tanggal_sekarang->format('d-m-Y');

$tanggal_ditentukan = new DateTime('2021-09-18');
echo '<br/> Apakah tanggal ' . $tanggal_ditentukan->format('d-m-Y') . ' sudah melewati tanggal sekarang? ';
if ($tanggal_ditentukan > $tanggal_sekarang) {
    echo 'Ya';
} else {
    echo 'Tidak';
}

$tanggal_ditentukan = new DateTime('2021-09-18');
$tanggal_ditentukan = new DateTime('2021-11-11');
echo '<br/> Apakah tanggal ' . $tanggal_ditentukan->format('d-m-Y') . ' sudah melewati tanggal sekarang? ';
if ($tanggal_ditentukan > $tanggal_sekarang) {
    echo 'Ya';
} else {
    echo 'Tidak';
}

$tanggal_a = new DateTime('2021-09-18');
$tanggal_b = new DateTime('2021-11-11');
echo '<br/> Apakah kedua tanggal ' . $tanggal_a->format('d-m-Y') . ' dan ' . $tanggal_a->format('d-m-Y');
echo ' sudah melewati tanggal sekarang? ';
if ($tanggal_a > $tanggal_sekarang && $tanggal_b > $tanggal_sekarang) {
    echo 'Ya';
} else {
    echo 'Tidak';
}

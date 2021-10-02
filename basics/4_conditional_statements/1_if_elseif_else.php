<?php

/**
 * Filename: 1_if_elseif_else.php
 *
 * File ini berisi tentang contoh penggunaan If, Else If, dan Else pada PHP.
 * Untuk penjelasan mengenai If, Else If, dan Else,
 * kamu bisa kunjungi link berikut ini:
 * https://github.com/bellshade/PHP/tree/main/basics/4_conditional_statements
 *
 * Silahkan gunakan browser favorit kamu untuk melihat file ini.
 * Jangan lupa untuk menghidupkan web server yang kamu gunakan ya.
 */

echo "<pre>";


// 1. If

/**
 * Di contoh If ini terdapat variabel $kalimat yang sudah kita isi.
 * Kita akan melakukan cek apabila variabel $kalimat kosong atau tidak.
 *
 * Kondisinya adalah, jika variabel $kalimat tidak kosong, maka
 * tampilkan isi kalimatnya.
 *
 * Jika isi dari variabel $kalimat kosong, maka tidak akan muncul apa-apa
 * karena kondisinya tidak terpenuhi.
 */

echo "1. If<br />";

$kalimat = "Halo, selamat belajar pengkondisian!";

if ($kalimat != "") {
    echo 'Isi dari variabel kalimat adalah: "' . $kalimat . '"<br />';
}

/**
 * Output:
 * Isi dari variabel kalimat adalah: "Halo, selamat belajar pengkondisian!"
 */

echo "<br />";


// 2. Else

/**
 * Kalau di contoh Else ini, kita akan melakukan cek apabila
 * variabel $naik_kelas berisi nilai true atau false.
 *
 * Terdapat variabel $kelas untuk merepresentasikan kelas kita saat ini.
 *
 * Jika benar, maka program akan menampilkan pesan bahwa kamu naik ke kelas
 * yang lebih tinggi yaitu kelas 3.
 *
 * Jika salah, maka program akan menampilkan pesan bahwa kamu tetap tinggal di
 * kelas 2.
 */

echo "2. Else<br />";

$naik_kelas = true;
$kelas = 2;

if ($naik_kelas) {
    echo "Selamat! Kamu naik ke kelas " . $kelas + 1 . ".<br />";
} else {
    echo "Sayang sekali, kamu harus tetap tinggal di kelas $kelas.<br />";
}

/**
 * Output:
 * Selamat! Kamu naik ke kelas 3.
 */

echo "<br />";


// 3. Else If

/**
 * Nah, kalau di contoh Else If ini adalah kode program game kecil-kecilan,
 * dimana kita harus memilih sebuah angka antara 1 sampai dengan 10.
 *
 * Tergantung kondisinya, program akan menampilkan teks apakah angka yang kita pilih lebih dari 5
 * atau tidak, dan berapakah angka yang kita pilih.
 */

echo "3. Else If<br />";

$pilihan_angka = 4;

if ($pilihan_angka > 5 && $pilihan_angka <= 10) {
    echo "Kamu memilih angka lebih dari 5. Angka yang kamu pilih adalah: $pilihan_angka<br />";
} elseif ($pilihan_angka < 5 && $pilihan_angka > 0) {
    echo "Kamu memilih angka kurang dari 5. Angka yang kamu pilih adalah: $pilihan_angka<br />";
} else {
    echo "Angka nol atau angka lebih dari 10 tidak termasuk ya..";
}

/**
 * Output:
 * Kamu memilih angka kurang dari 5. Angka yang kamu pilih adalah: 4
 */

echo "<br />";


// 4. If Else - Shorthand

/**
 * Contoh terakhir ini menggunakan shorthand if...else, dan disini
 * kita akan melakukan cek, termasuk bilangan apakah yang ada pada variabel $angka.
 *
 * Jika isi dari variabel $angka bisa dibagi 2, maka angka tersebut termasuk bilangan genap.
 * Lalu, jika isi dari variabel $angka tidak bisa dibagi 2, maka angka tersebut termasuk bilangan ganjil.
 */

echo "4. If Else - Shorthand<br />";

$angka = 6;

echo ($angka % 2 == 0) ? "Angka $angka adalah bilangan genap!" : "Angka $angka adalah bilangan ganjil!";

/**
 * Output:
 * Angka 6 adalah bilangan genap!
 */

echo "</pre>";

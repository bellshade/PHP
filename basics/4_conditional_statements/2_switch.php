<?php

/**
 * Filename: 2_switch.php
 *
 * File ini berisi tentang contoh penggunaan Switch pada PHP.
 * Untuk penjelasan mengenai Switch,
 * kamu bisa kunjungi link berikut ini:
 * https://github.com/bellshade/PHP/tree/main/basics/4_conditional_statements
 *
 * Silahkan gunakan browser favorit kamu untuk melihat file ini.
 * Jangan lupa juga untuk menghidupkan web server yang kamu gunakan ya.
 */

echo "<pre>";

// Contoh 1:

/**
 * Misalkan disini, kita punya variabel $nilai_matematika untuk menyimpan nilai matematika kita.
 * Kita akan melakukan cek terhadap variabel $nilai_matematika untuk mengetahui grade nilai kita.
 *
 * Cobalah untuk mengubah isi variabel $nilai_matematika, dan kondisi-kondisinya yang berada
 * di dalam blok kode switch.
 */

echo "Contoh 1: <br />";

$nilai_matematika = 80;

switch (true) {
  case ($nilai_matematika >= 90 && $nilai_matematika <= 100):
        echo "Grade: A<br />Nilai matematika kamu sangat baik. Pertahankan terus ya!<br />";
      break;
  case ($nilai_matematika < 90 && $nilai_matematika >= 75):
        echo "Grade: B<br />Nilai matematika kamu cukup baik. Ayo, kamu pasti bisa lebih baik lagi!<br />";
      break;
  case ($nilai_matematika < 75 && $nilai_matematika >= 60):
        echo "Grade: C<br />Nilai matematika kamu mendekati baik. Ayo, kejar teman-temanmu!<br />";
      break;
  default:
        echo "Grade: D<br />Nilai matematika kamu kurang baik, belajar lebih giat lagi ya..<br />";
      break;
}

/**
 * Output:
 * Grade: B
 * Nilai matematika kamu cukup baik. Ayo, kamu pasti bisa lebih baik lagi!
 */

echo "<br />";


// Contoh 2:

/**
 * Di contoh ini, kita akan coba menampilkan nama hari sesuai isi dari variabel $hari,
 * yang mana sesuai dengan urutan hari dalam 1 minggu.
 *
 * Silahkan kamu coba untuk ubah isi variabel $hari-nya, maka
 * kalimat yang ditampilkan pun akan menyesuaikan dengan variabel $hari.
 */

echo "Contoh 2: <br />";

$hari = 6;

switch ($hari) {
  case 1:
        echo "Hari ke-1 adalah hari Senin!";
      break;
  case 2:
        echo "Hari ke-2 adalah hari Selasa!";
      break;
  case 3:
        echo "Hari ke-3 adalah hari Rabu!";
      break;
  case 4:
        echo "Hari ke-4 adalah hari Kamis!";
      break;
  case 5:
        echo "Hari ke-5 adalah hari Jum'at!";
      break;
  case 6:
        echo "Hari ke-6 adalah hari Sabtu!";
      break;
  case 7:
        echo "Hari ke-7 adalah hari Minggu!";
      break;
  default:
        echo "1 minggu hanya ada 7 hari!";
      break;
}

/**
 * Output:
 * Hari ke-6 adalah hari Sabtu!
 */

echo "</pre>";

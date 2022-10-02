<?php
/**
 * Filename: 3_operator_ternary.php
 *
 * File ini berisi tentang contoh penggunaan Operator Ternary pada PHP.
 * Untuk penjelasan mengenai Switch,
 * kamu bisa kunjungi link berikut ini:
 * https://github.com/bellshade/PHP/tree/main/basics/4_conditional_statements
 *
 * Silahkan gunakan browser favorit kamu untuk melihat file ini.
 * Jangan lupa juga untuk menghidupkan web server yang kamu gunakan ya.
 */

$nilai_tugas = 86;

// Jika value $nilai_tugas lebih dari 75, cetak string "Lulus KKM !"
// Jika value $nilai_tugas tidak lebih dari 75, cetak string "Tidak lulus KKM !"
echo $nilai_tugas > 75 ? "Lulus KKM !" : "Tidak lulus KKM !";

<?php

/**
 * Filename: 5_ternary_shorthand.php
 *
 * File ini berisi tentang contoh penggunaan Operator Ternary pada PHP.
 * Untuk penjelasan mengenai Switch,
 * kamu bisa kunjungi link berikut ini:
 * https://github.com/bellshade/PHP/tree/main/basics/4_conditional_statements
 *
 * Silahkan gunakan browser favorit kamu untuk melihat file ini.
 * Jangan lupa juga untuk menghidupkan web server yang kamu gunakan ya.
 */

$nilai_ujian = 80;

// Mengisi variable $isLulus dengan nilai true apabila value $nilai_ujian lebih dari 75
// Mengisi variable $isLulus dengan nilai false apabila value $nilai_ujian tidak lebih dari 75
$isLulus = $nilai_ujian > 75 ?: false;

// Mencetak string "Lulus KKM !" jika $isLulus bernilai true
// Mencetak string "Tidak lulus KKM !" jika $isLulus tidak bernilai true
echo $isLulus ? "Lulus KKM !" : "Tidak lulus KKM !";

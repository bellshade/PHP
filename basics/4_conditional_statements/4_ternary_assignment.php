<?php
    
/**
 * Filename: 4_ternary_assignment.php
 *
 * File ini berisi tentang contoh penggunaan Operator Ternary pada PHP.
 * Untuk penjelasan mengenai Switch,
 * kamu bisa kunjungi link berikut ini:
 * https://github.com/bellshade/PHP/tree/main/basics/4_conditional_statements
 *
 * Silahkan gunakan browser favorit kamu untuk melihat file ini.
 * Jangan lupa juga untuk menghidupkan web server yang kamu gunakan ya.
 */

$nilai_ujian = 86;

// Mengisi nilai true ke variabel $isLulus apabila kondisi ($nilai_ujian > 75) menghasilkan true
$isLulus = $nilai_ujian > 75 ? true : false;

// Mencetak string "Lulus KKM !" jika $isLulus bernilai true
// Mencetak string "Tidak lulus KKM !" jika $isLulus tidak bernilai true
echo $isLulus ? "Lulus KKM !" : "Tidak lulus KKM !";

<?php

/**
 * Variabel Dalam String
 * --------------------------
 */

// -------------------------
// Menulis variabel dalam string dengan petik satu.
// Contoh 1:
$name = 'Feri Irawan';
$text = 'Halo' . $name;
//          ↑
//     Tanpa spasi

echo $text; // Hasil: HaloFeri Irawan


// Contoh 2:
$name = 'Feri Irawan';
$text = 'Halo ' . $name . ', apa kabar?';
//          ↑
//     Dengan spasi

echo $text; // Hasil: Halo Feri Irawan, apa kabar?


// --------------------------
// Menulis variabel dalam string dengan petik dua.
// Contoh 1:
$name = 'Feri Irawan';
$text = "Halo$name";
//          ↑
//     Tanpa spasi

echo $text; // Hasil: HaloFeri Irawan


// Contoh 2:
$name = 'Feri Irawan';
$text = "Halo $name apa kabar?";
//          ↑     ↑
//       Dengan spasi

echo $text; // Hasil: Halo Feri Irawan, apa kabar?


// Contoh 3:
$username = 'contoh';
$email = 'gmail.com';
$text = "{$username}{$email}";

echo $text; // Hasil: contoh@gmail.com


// Contoh 4:
$username = 'contoh';
$email = 'gmail.com';
$text = "$username$email";

echo $text; // Hasil: contoh@gmail.com


// --------------------------
// Menulis variabel dalam string dengan sintaks heredoc.
// Contoh 1:
$name = 'Feri Irawan';
$umur = 17;

$text = <<<TENTANG_SAYA
Nama: $name
Umur: $umur
TENTANG_SAYA;

echo $text;
// Hasil:
// Nama: Feri Irawan
// Umur: 17


// Contoh 2:
$name = 'Feri Irawan';
$umur = 17;

// Label dengan tanda petik dua.
$text = <<<"TENTANG_SAYA"
Nama: $name
Umur: $umur
TENTANG_SAYA;

echo $text;
// Hasil:
// Nama: Feri Irawan
// Umur: 17

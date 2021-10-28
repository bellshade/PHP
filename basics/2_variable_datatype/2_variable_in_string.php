<?php

echo "<pre>";

/**
 * Variabel Dalam String
 * --------------------------
 */
echo "<h1>Variabel Dalam String</h1>";

// -------------------------
echo "<h2>Menulis variabel dalam string dengan petik satu.</h2>";
// Contoh 1:
$name = 'Feri Irawan';
$text = 'Halo' . $name;
//          ↑
//     Tanpa spasi

echo $text; // Hasil: HaloFeri Irawan
echo "\n";

// Contoh 2:
$name = 'Feri Irawan';
$text = 'Halo ' . $name . ', apa kabar?';
//          ↑
//     Dengan spasi

echo $text; // Hasil: Halo Feri Irawan, apa kabar?
echo "\n";

// --------------------------
echo "<h2>Menulis variabel dalam string dengan petik dua.</h2>";
// Contoh 1:
$name = 'Feri Irawan';
$text = "Halo$name";
//          ↑
//     Tanpa spasi

echo $text; // Hasil: HaloFeri Irawan
echo "\n";

// Contoh 2:
$name = 'Feri Irawan';
$text = "Halo $name apa kabar?";
//          ↑     ↑
//       Dengan spasi

echo $text; // Hasil: Halo Feri Irawan, apa kabar?
echo "\n";

// Contoh 3:
$username = 'contoh';
$email = 'gmail.com';
$text = "{$username}{$email}";

echo $text; // Hasil: contoh@gmail.com
echo "\n";

// Contoh 4:
$username = 'contoh';
$email = 'gmail.com';
$text = "$username$email";

echo $text; // Hasil: contoh@gmail.com
echo "\n";

// --------------------------
echo "<h2>Menulis variabel dalam string dengan sintaks heredoc.</h2>";
// Contoh 1:
$name = 'Feri Irawan';
$umur = 17;

$text = <<<TENTANG_SAYA
Nama: $name
Umur: $umur
TENTANG_SAYA;

echo $text;
echo "\n\n";
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

echo "</pre>";

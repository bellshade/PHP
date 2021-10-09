<?php

echo '<pre>';

// ---------------------------------------------------------------------------
echo '<h1>Kapitalisasi String</h1>';
// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='strtolower'>Mengubah karakter menjadi huruf kecil</h2>";

$text = "Ini Adalah coNtoh teKs yAng Saya Buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasilnya: ' . strtolower($text), PHP_EOL;  // Output: ini adalah contoh teks yang saya buat

// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='strtoupper'>Mengubah karakter menjadi huruf besar</h2>";

$text = "Ini Adalah coNtoh teKs yAng Saya Buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasilnya: ' . strtoupper($text), PHP_EOL;  // Output: INI ADALAH CONTOH TEKS YANG SAYA BUAT

// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='ucfirst'>Mengubah karakter pertama menjadi huruf besar</h2>";

$text = "ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasilnya: ' . ucfirst($text), PHP_EOL;  // Output: Ini adalah contoh teks yang saya buat

// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='ucwords'>Mengubah karakter pertama setiap kata menjadi huruf besar</h2>";

$text = "ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasilnya: ' . ucwords($text), PHP_EOL;  // Output: Ini Adalah Contoh Teks Yang Saya Buat

// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='lcfirst'>Mengubah karakter pertama menjadi huruf kecil</h2>";

$text = "INI ADALAH CONTOH TEKS YANG SAYA BUAT";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasilnya: ' . lcfirst($text), PHP_EOL;  // Output: iNI ADALAH CONTOH TEKS YANG SAYA BUAT

// ---------------------------------------------------------------------------

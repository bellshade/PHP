<?php

echo '<pre>';

// ---------------------------------------------------------------------------
echo '<h1>Mengambil properti string</h1>';
// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='menghitung-banyaknya-karakter'>Menghitung Banyaknya karakter</h2>";

$text = "Ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Jumlah karakter: ' . strlen($text), PHP_EOL;  // Output: 37

// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='menghitung-banyaknya-kata'>Menghitung Banyaknya kata</h2>";

$text = "Ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Jumlah kata: ' . str_word_count($text), PHP_EOL;  // Output: 7

// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='mencari-posisi-dari-sebuah-kata'>Mencari posisi dari sebuah kata</h2>";

$text = "Ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo "Posisi kata 'contoh': " . strpos($text, 'contoh'), PHP_EOL;  // Output: 11

// ---------------------------------------------------------------------------
echo '<hr>';
echo "<h2 id='menghitung-banyaknya-kata-tertentu'>Menghitung banyaknya kata tertentu</h2>";

$text = "ini adalah ini contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo "Jumlah kata 'ini': " . substr_count($text, 'ini'), PHP_EOL;  // Output: 2

echo '</pre>';

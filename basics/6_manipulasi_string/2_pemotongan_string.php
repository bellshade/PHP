<?php

echo '<pre>';

// ---------------------------------------------------------------------------
echo '<h1>Memotong string</h1>';
// ---------------------------------------------------------------------------


// ---------------------------------------------------------------------------
echo "<h2 id='memotong-dari-kiri-kanan-dan-keduanya'>Memotong dari kiri, kanan dan keduanya</h2>";

$text = "ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: <strong>' . $text . '</strong>', PHP_EOL;
echo 'memotong dari kiri yang mengandung karakter `inibuat` (ltrim): ' . ltrim($text, 'inibuat'), PHP_EOL;
echo 'memotong dari kanan yang mengandung karakter `inibuat` (rtrim): ' . rtrim($text, 'inibuat'), PHP_EOL;
echo 'memotong dari kiri dan kanan yang mengandung karakter `inibuat` (trim): ' . trim($text, 'inibuat'), PHP_EOL;

echo '</pre>';

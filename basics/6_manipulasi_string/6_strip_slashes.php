<?php

echo "<pre>";
// ----------------
echo "<h1>stripslashes</h1>";
echo "<hr>";

echo "<h3>Penggunaan stripslashes</h3>";
// ---------------
echo "Sebelum menggunakan stripslashes(): ", PHP_EOL;
$text = "Ayo belajar \ di bellshade";
echo $text, PHP_EOL;
// Output
// Ayo belajar \ di bellshade
echo "<br>";
//-----------------
echo "Sesudah menggunakan stripslashes(): ", PHP_EOL;
$text = "Sandi:\"Hai, apa kabar semuanya?\"";
$text1 = stripslashes($text);
echo $text1, PHP_EOL;
// Output
// Sandi:"Hai, apa kabar semuanya?"

echo "<hr>";

echo "</pre>";

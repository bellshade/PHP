<?php

echo "<pre>";
// ----------------
echo "<h1>stripslashes</h1>";
echo "<hr>";

echo "<h3>Penggunaan stripslashes</h3>";
// ---------------
echo "Sebelum menggunakan stripslashes(): ",PHP_EOL;
$text = "Ayo belajar \ di bellshade";
echo "$text",PHP_EOL;

echo "<br>";
//-----------------
echo "Sesudah menggunakan stripslashes(): ",PHP_EOL;
$text1 = stripslashes("Ayo belajar \ di bellshade");
echo "$text1";

echo "<hr>";

echo "</pre>";
?>
<?php

echo '<pre>';


echo "<h1> Menambah slash dalam string </h1>";
echo "<hr>";

echo "<h2> addslashes() </h2>";


echo "Text sebelum menggunakan addslashes():",PHP_EOL;
$text = '-Ayo belajar di bellshade';
echo "$text";
// -------------------------------------------
echo "<br></br>";

echo "Text sesudah menggunakan addslashes(): ",PHP_EOL;
$text1 = addslashes('-Ayo belajar di "bellshade"');
echo "$text1";

echo "<h2>Contoh lagi</h2>";
echo "Text sebelum menggunakan addslashes():",PHP_EOL;
echo "$text";
// ---------------------------------------------------
echo "<br></br>";

echo "Text sesudah menggunakan addslashes(): ",PHP_EOL;
$text2 = addslashes("-Ayo belajar di 'bellshade'");
echo "$text2";
//---------------------------------------------------
echo "<br></br>";
echo "------------------------------------------------", PHP_EOL;

echo "Text sebelum menggunakan addslashes():",PHP_EOL;
echo "$text";
//---------------------------------------------------
echo "<br></br>";

echo "Text sesudah menggunakan addslashes(): ",PHP_EOL;
$text3 = addslashes("-Ayo belajar di \bellshade\ ");
echo "$text3";

echo '</pre>';

<?php

echo "<pre>";
// ----------------
echo "<h1>Manipulasi String</h1>";
echo "<hr>";

echo "<h3>str_pad()</h3>";
// ---------------
echo "Text sebelum menggunakan str_pad():",PHP_EOL;
$text = 'Manipulasi String';
echo $text;
// -------------------------------------------
echo "<br></br>";

echo "Text sesudah menggunakan str_pad(): ",PHP_EOL;
$text1 = str_pad('Manipulasi String', 20, ".");
echo $text1;

echo "<h3>wordwrap()</h3>";
// ---------------
echo "Text sebelum menggunakan wordwrap():",PHP_EOL;
$text = 'Manipulasi String';
echo $text;
// -------------------------------------------
echo "<br></br>";

echo "Text sesudah menggunakan wordwrap(): ",PHP_EOL;
$text1 = wordwrap('Manipulasi String', 5);
echo $text1;

echo "<h3>str_shuffle()</h3>";
// ---------------
echo "Text sebelum menggunakan str_shuffle():",PHP_EOL;
$text = 'Manipulasi String';
echo $text;
// -------------------------------------------
echo "<br></br>";

echo "Text sesudah menggunakan str_shuffle(): ",PHP_EOL;
$text1 = str_shuffle('Manipulasi String');
echo $text1;

echo "<h3>str_repeat()</h3>";
// ---------------
echo "Text sebelum menggunakan str_repeat():",PHP_EOL;
$text = 'Manipulasi String';
echo $text;
// -------------------------------------------
echo "<br></br>";

echo "Text sesudah menggunakan str_repeat(): ",PHP_EOL;
$text1 = str_repeat('Manipulasi String', 10);
echo $text1;

echo "<h3>str_replace()</h3>";
// ---------------
echo "Text sebelum menggunakan str_replace():",PHP_EOL;
$text = 'Manipulasi String';
echo $text;
// -------------------------------------------
echo "<br></br>";

echo "Text sesudah menggunakan str_replace(): ",PHP_EOL;
$text1 = str_replace('Manipulasi', 'Mencoba', 'Manipulasi String');
echo $text1;

echo "<h3>strtr()</h3>";
// ---------------
echo "Text sebelum menggunakan strtr():",PHP_EOL;
$text = 'Manipulasi String';
echo $text;
// -------------------------------------------
echo "<br></br>";

echo "Text sesudah menggunakan strtr(): ",PHP_EOL;
$text1 = strtr('Manipulasi String', 'ia', 'eo');
echo $text1;

echo "</pre>";

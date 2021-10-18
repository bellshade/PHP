<?php

echo '<pre>';

// ---------------------------------------------------------------------------
echo '<h1>String Array</h1>';
echo '<hr>';
// ---------------------------------------------------------------------------

echo '<h2 id="implode">Implode()</h2>';

$daftar_buah = ['apel', 'nanas', 'pisang', 'mangga'];

echo "Hasil Awal:", PHP_EOL;
print_r($daftar_buah);
/* Hasil :
 * Array
 * (
 *   [0] => apel
 *   [1] => nanas
 *   [2] => pisang
 *   [3] => mangga
 * )
*/

echo '<br>';

$string_buah = implode(",", $daftar_buah);

echo "Hasil setelah menggunakan implode(): ", PHP_EOL;
echo $string_buah; // Hasil: apel,nanas,pisang,mangga

// ---------------------------------------------------------------------------

echo '<h2 id="explode">Explode()</h2>';

$teks = "Bellshade memang keren";

echo "Hasil awal:", PHP_EOL;
print_r($teks);
echo "<br><br>";

echo "Hasil setelah menggunakan explode():", PHP_EOL;
// penggunaan tanpa limit
$teks_array = explode(" ", $teks);

print_r($teks_array);
/* Hasil
*  Array
*  (
*      [0] => Bellshade
*      [1] => memang
*      [2] => keren
*  )
*/
echo "<br>";

// penggunaan dengan limit
$teks_array = explode(" ", $teks, 2);
print_r($teks_array);
/* Array
 * (
 *   [0] => Bellshade
 *   [1] => memang keren
 * )
*/
echo "<br>";

// ---------------------------------------------------------------------------
echo '</pre>';

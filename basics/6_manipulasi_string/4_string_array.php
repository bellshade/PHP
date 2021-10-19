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
/* Hasil:
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
/* Hasil:
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
/* Hasil:
 * Array
 * (
 *   [0] => Bellshade
 *   [1] => memang keren
 * )
*/
echo "<br>";

// ---------------------------------------------------------------------------

echo '<h2 id="str_split">Str_split()</h2>';

$teks = "Bellshade memang keren";

echo "Hasil awal:", PHP_EOL;
print_r($teks);
echo "<br><br>";

echo "Hasil setelah menggunakan str_split():", PHP_EOL;
// penggunaan tanpa panjang
$teks_array = str_split($teks);

print_r($teks_array);
/* Hasil:
*  Array
*  (
*      [0] => B
*      [1] => e
*      [2] => l
*      [3] => l
*      ...
*  )
*/
echo "<br>";

// penggunaan dengan panjang
$teks_array = str_split($teks, 7);
print_r($teks_array);
/* Hasil:
 * Array
 * (
 *   [0] => Bellsha
 *   [1] => de mema
 *   [2] => ng kere
 *   [3] => n
 * )
*/
echo "<br>";

// ---------------------------------------------------------------------------

echo '<h2 id="join">Join()</h2>';

$daftar_buah = ['apel', 'nanas', 'pisang', 'mangga'];

echo "Hasil Awal:", PHP_EOL;
print_r($daftar_buah);
/* Hasil:
 * Array
 * (
 *   [0] => apel
 *   [1] => nanas
 *   [2] => pisang
 *   [3] => mangga
 * )
*/

echo '<br>';

$string_buah = join(",", $daftar_buah);

echo "Hasil setelah menggunakan join(): ", PHP_EOL;
echo $string_buah; // Hasil: apel,nanas,pisang,mangga

// ---------------------------------------------------------------------------
echo '</pre>';

<?php

echo '<pre>';

// ---------------------------------------------------------------------------
echo '<h1>String Array</h1>';
// ---------------------------------------------------------------------------
echo '<hr>';
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

echo '</pre>';

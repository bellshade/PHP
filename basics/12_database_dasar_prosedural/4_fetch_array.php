<?php

echo '<pre>';

require_once('2_connect.php');

$tabel = '12_database_dasar_prosedural_buku';
$query = mysqli_query($connect, "SELECT * FROM $tabel");

/**
 * mysqli_fetch_array mengembalikan data hasil query
 * dalam bentuk array numerik sekaligus array asosiatif
*/
print_r(mysqli_fetch_array($query));

echo '</pre>';

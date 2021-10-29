<?php

echo '<pre>';

/**
 * Memanggil file koneksi ke database dan
 * agar dapat menggunakan variabel `$connect` didalamnya
 */
require_once('2_connect.php');

$tabel = '12_database_dasar_prosedural_buku';
$id = 6;        // ID dari baris data yang akan dihapus

echo 'ID yang akan dihapus: ' . $id;
$query = mysqli_query($connect, "DELETE FROM $tabel WHERE id = '$id'");
echo 'Baris yang terpengaruh: ' . mysqli_affected_rows($connect), PHP_EOL;

echo '</pre>';

<?php

echo '<pre>';

/**
 * Memanggil file koneksi ke database dan
 * agar dapat menggunakan variabel `$connect` didalamnya
 */
require_once('2_connect.php');


$tabel = '12_database_dasar_prosedural_buku';
$id = 1;
$judul = 'Belajar pemrograman PHP dengan mudah';

echo 'ID buku yang akan update: ' . $id, PHP_EOL;
echo 'judul yang akan diganti: ' . $judul, PHP_EOL;
echo 'Sedang mengupdate ...', PHP_EOL;
$query = mysqli_query($connect, "UPDATE $tabel SET judul = '$judul' WHERE id = '$id'");
echo 'Baris yang terpengaruh: ' . mysqli_affected_rows($connect) . ' baris', PHP_EOL;

echo '</pre>';

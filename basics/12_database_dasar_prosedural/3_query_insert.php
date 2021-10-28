<?php

require_once('2_connect.php');
echo "<pre>";

$tabel = '12_database_dasar_prosedural_buku';
$judul = 'Menjadi Web Master dengan cepat';
$deskripsi = 'Tidak ada yang tidak mungkin dilakukan, termasuk menjadi seorang web master yang menekuni pemrograman dibidang Web';
$penulis = 'Onno W. Purbo';
$penerbit = 'Elex Media Computindo';

echo "---------------------" , PHP_EOL;
echo "Melakukan Insert data" , PHP_EOL;
echo "---------------------" , PHP_EOL;
echo 'judul: ' . $judul , PHP_EOL;
echo 'deskripsi: ' . $deskripsi , PHP_EOL;
echo 'penulis: ' . $penulis , PHP_EOL;
echo 'penerbit: ' . $penerbit , PHP_EOL;
echo 'Melakukan query INSERT ...  ', PHP_EOL;
$query = mysqli_query($connect, "INSERT INTO $tabel (id, judul, deskripsi, penulis, penerbit) VALUES (null, '$judul', '$deskripsi', '$penulis', '$penerbit')");
echo 'Baris data yang terpengaruh: ' . mysqli_affected_rows($connect) . ' baris', PHP_EOL;

$judul = 'Cloud Computing: Manajemen dan Perencanaan Kapasitas';
$deskripsi = 'Komputasi awan (cloud computing) adalah teknologi yang menjadikan internet sebagai pusat pengelolaan data dan aplikasi, dengan pengguna komputer diberikan hak akses (login)';
$penulis = 'Onno W. Purbo, Riko Harwanto';
$penerbit = 'ANDI';

echo "---------------------" , PHP_EOL;
echo "Melakukan Insert data" , PHP_EOL;
echo "---------------------" , PHP_EOL;
echo 'judul: ' . $judul , PHP_EOL;
echo 'deskripsi: ' . $deskripsi , PHP_EOL;
echo 'penulis: ' . $penulis , PHP_EOL;
echo 'penerbit: ' . $penerbit , PHP_EOL;
echo 'Melakukan query INSERT ...  ', PHP_EOL;
$query = mysqli_query($connect, "INSERT INTO $tabel (id, judul, deskripsi, penulis, penerbit) VALUES (null, '$judul', '$deskripsi', '$penulis', '$penerbit')");
echo 'Baris data yang terpengaruh: ' . mysqli_affected_rows($connect) . ' baris', PHP_EOL;

$judul = 'Logika Pemrograman Python';
$deskripsi = 'Buku ini sangat cocok digunakan untuk pelajar, mahasiswa, atau siapa saja yang bermaksud untuk mempelajari pemrograman komputer dengan menggunakan bahasa Python';
$penulis = 'Abdul Kadir';
$penerbit = 'Elex Media Computindo';

echo "---------------------" , PHP_EOL;
echo "Melakukan Insert data" , PHP_EOL;
echo "---------------------" , PHP_EOL;
echo 'judul: ' . $judul , PHP_EOL;
echo 'deskripsi: ' . $deskripsi , PHP_EOL;
echo 'penulis: ' . $penulis , PHP_EOL;
echo 'penerbit: ' . $penerbit , PHP_EOL;
echo 'Melakukan query INSERT ...  ', PHP_EOL;
$query = mysqli_query($connect, "INSERT INTO $tabel (id, judul, deskripsi, penulis, penerbit) VALUES (null, '$judul', '$deskripsi', '$penulis', '$penerbit')");
echo 'Baris data yang terpengaruh: ' . mysqli_affected_rows($connect) . ' baris', PHP_EOL;

$judul = 'Otodidak belajar pemrograman untuk pemula';
$deskripsi = 'Dunia pemrograman merupakan dasar dari komputer dan teknologi. Oleh karena itu, bila Anda ingin berkomunikasi dengan perangkat teknologi, mulailah pelajari pemrograman-pemrograman komputer';
$penulis = 'Jubilee Enterprise';
$penerbit = 'Elex Media Computindo';

echo "---------------------" , PHP_EOL;
echo "Melakukan Insert data" , PHP_EOL;
echo "---------------------" , PHP_EOL;
echo 'judul: ' . $judul , PHP_EOL;
echo 'deskripsi: ' . $deskripsi , PHP_EOL;
echo 'penulis: ' . $penulis , PHP_EOL;
echo 'penerbit: ' . $penerbit , PHP_EOL;
echo 'Melakukan query INSERT ...  ', PHP_EOL;
$query = mysqli_query($connect, "INSERT INTO $tabel (id, judul, deskripsi, penulis, penerbit) VALUES (null, '$judul', '$deskripsi', '$penulis', '$penerbit')");
echo 'Baris data yang terpengaruh: ' . mysqli_affected_rows($connect) . ' baris', PHP_EOL;


$judul = 'Jakarta sebelum pagi';
$deskripsi = 'Mawar, hyacinth biru, dan melati. Dibawa balon perak, tiga bunga ini diantar setiap hari ke balkon apartemen Emina. Tanpa pengirim, tanpa pesan; hanya kemungkinan adanya stalker mencurigakan yang tahu alamat tempat tinggalnya.';
$penulis = 'Ziggy';
$penerbit = 'Grasindo';

echo "---------------------" , PHP_EOL;
echo "Melakukan Insert data" , PHP_EOL;
echo "---------------------" , PHP_EOL;
echo 'judul: ' . $judul , PHP_EOL;
echo 'deskripsi: ' . $deskripsi , PHP_EOL;
echo 'penulis: ' . $penulis , PHP_EOL;
echo 'penerbit: ' . $penerbit , PHP_EOL;
echo 'Melakukan query INSERT ...  ', PHP_EOL;
$query = mysqli_query($connect, "INSERT INTO $tabel (id, judul, deskripsi, penulis, penerbit) VALUES (null, '$judul', '$deskripsi', '$penulis', '$penerbit')");
echo 'Baris data yang terpengaruh: ' . mysqli_affected_rows($connect) . ' baris', PHP_EOL;

$judul = 'TEST';
$deskripsi = 'TEST';
$penulis = 'TEST';
$penerbit = 'TEST';

echo "---------------------" , PHP_EOL;
echo "Melakukan Insert data" , PHP_EOL;
echo "---------------------" , PHP_EOL;
echo 'judul: ' . $judul , PHP_EOL;
echo 'deskripsi: ' . $deskripsi , PHP_EOL;
echo 'penulis: ' . $penulis , PHP_EOL;
echo 'penerbit: ' . $penerbit , PHP_EOL;
echo 'Melakukan query INSERT ...  ', PHP_EOL;
$query = mysqli_query($connect, "INSERT INTO $tabel (id, judul, deskripsi, penulis, penerbit) VALUES (null, '$judul', '$deskripsi', '$penulis', '$penerbit')");
echo 'Baris data yang terpengaruh: ' . mysqli_affected_rows($connect) . ' baris', PHP_EOL;


echo "</pre>";

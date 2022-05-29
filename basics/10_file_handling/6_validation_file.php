<?php

echo "<pre>";

echo "<h1>Validasi (Validation) File dengan PHP</h1>";

echo "Untuk validasi file pada PHP ada beragam function yang bisa digunakan

// Folder dari file
dir = 'storage';

// Identitas File yang akan diubah
nama_file = 'test.txt';

<b>Hasil nya dapat dilihat dengan mengecek isi dari file test.txt. Sebelum menjalankan file ini pastikan bahwa anda sudah mencoba 2_create_file_folder:</b>
";

// Folder dari file
$dir = 'storage';

// Identitas File yang akan diubah
$nama_file = 'test.txt';

// Adding Space
echo '</br> 
<b>filectime()</b> </br>';

// Filectime (Mengembalikan Tanggal Terakhir File Mengalami perubahan)
print_r(date("F d Y H:i:s.", filectime($dir . '/' . $nama_file)));

// Adding Space
echo '</br> 
<b>filemtime()</b> </br>';

// Filectime (Mengembalikan Tanggal Terakhir File Mengalami perubahan)
print_r(date("F d Y H:i:s.", filemtime($dir . '/' . $nama_file)));

// Adding Space
echo '</br> 
<b>filesize()</b> </br>';

// Filesize (Mengembalikan Ukuran dari file)
print_r(filesize($dir . '/' . $nama_file));

// Adding Space
echo '</br> 
<b>filetype()</b> </br>';

// Filetype (Mengembalikan Tipe dari File)
print_r(filetype($dir . '/' . $nama_file));

// Adding Space
echo '</br> 
<b>fileperms()</b> </br>';

// Fileperms (Mengembalikan Tipe dari File)
print_r(fileperms($dir . '/' . $nama_file));

// Adding Space
echo '</br> 
<b>fileowner()</b> </br>';

// Fileowner (Mengembalikan Owner dari File)
print_r(fileowner($dir . '/' . $nama_file));

// Adding Space
echo '</br> 
<b>is_dir()</b> </br>';

// Is_dir (Mengecek Direktori)
print_r(is_dir($dir));

// Adding Space
echo '</br> 
<b>file_exists()</b> </br>';

// File_exists (Mengembalikan Apakah File ada atau tidak)
print_r(file_exists($dir . '/' . $nama_file));

// Adding Space
echo '</br> 
<b>is_file()</b> </br>';

// Is_file (Mengembalikan Apakah File ada atau tidak)
print_r(is_file($dir . '/' . $nama_file));

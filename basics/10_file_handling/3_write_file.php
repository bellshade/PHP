<?php

echo "<pre>";

echo "<h1>Menuliskan (Write) File dengan PHP</h1>";

echo "Untuk write file pada PHP gunakan fwrite()

// Folder dari file
dir = 'storage';

// Identitas File yang akan diubah
nama_file = 'test.txt';

// fopen sebelum membuat file
open = fopen(dir . '/' . nama_file, 'w');

// fwrite untuk membuat sebuah file dan kontennya
fwrite(open, konten_file);

// Menutup File
fclose(open);

<b>Hasil nya dapat dilihat dengan mengecek isi dari file test.txt. Sebelum menjalankan file ini pastikan bahwa anda sudah mencoba 2_create_file_folder:</b>

";

// Folder dari file
$dir = 'storage';

// Identitas File yang akan diubah
$nama_file = 'test.txt';

// fopen sebelum membuat file
$open = fopen($dir . '/' . $nama_file, 'w');

// fwrite untuk membuat sebuah file dan kontennya
fwrite($open, 'Ini adalah hasil dari write yang telah dilakukan');

// Menutup File
fclose($open);

<?php

echo "<pre>";

echo "<h1>Membaca File PHP</h1>";

echo "Pertama buat variabel yang mengarahkan ke lokasi file berada

// Letak filenya
file = '../../assets/content/basics/10_file_handling/file_handling.txt';

// Membuka file yang ingin dibaca
open = fopen(file, 'r');

// Mencari size dari filenya
size = filesize(file);

// Untuk membaca sebuah file maka gunakan lah fread
filedata = fread(open, size);

print_r(filedata);

<b>Hasil print yang akan di dapatkan adalah sebagai berikut:</b>

";

// Letak filenya
$file = '../../assets/content/basics/10_file_handling/file_handling.txt';

// Membuka file yang ingin dibaca
$open = fopen($file, 'r');

// Mencari size dari filenya
$size = filesize($file);

// Untuk membaca sebuah file maka gunakan lah fread
$filedata = fread($open, $size);

print_r($filedata);

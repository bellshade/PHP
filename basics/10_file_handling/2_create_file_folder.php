<?php
echo "<pre>";

echo "<h1>Membuat Folder dan File dengan PHP</h1>";

echo "Untuk membuat folder pada PHP gunakan mkdir()

// Menyimpan data untuk membuat Folder ke dalam Variabel
dir = 'storage/contoh_folder';

// Identitas File yang akan dibuat
nama_file = 'test.txt';
konten_file = 'contoh content file';

// Membuat Folder
if( is_dir(dir) === false )
{
    // mkdir(dir);
}

// fopen sebelum membuat file
open = fopen(dir . '/' . nama_file, 'w');

// fwrite untuk membuat sebuah file dan kontennya
fwrite(open, konten_file);

// Menutup File
fclose(open);

<b>Hasil nya dapat dilihat setelah halaman ini di load silakan cek folder storage seharusnya sudah ada folder dan juga file baru di dalamnya:</b>

";

// Menyimpan data untuk membuat Folder ke dalam Variabel
$dir = 'storage/contoh_folder';

// Identitas File yang akan dibuat
$nama_file = 'test.txt';
$konten_file = 'contoh content file';

// Membuat Folder
if( is_dir($dir) === false )
{
    mkdir($dir);
}

// fopen sebelum membuat file
$open = fopen($dir . '/' . $nama_file, 'w');

// fwrite untuk membuat sebuah file dan kontennya
fwrite($open, $konten_file);

// Menutup File
fclose($open);
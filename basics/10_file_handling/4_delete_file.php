<?php

echo "<pre>";

echo "<h1>Menghapus (Delete) File dengan PHP</h1>";

echo "Untuk delete file pada PHP gunakan unlink()

// Folder dari file
dir = 'storage';

// Identitas File yang akan diubah
nama_file = 'test.txt';

// Menggunakan unlink() untuk menghapus File 
if (!unlink( dir . / . nama_file)) { 
    echo (nama_file tidak bisa di hapus); 
} 
else { 
    echo (nama_file telah dihapus); 
} 

<b>Hasil nya dapat dilihat dengan mengecek isi dari file test.txt. Sebelum menjalankan file ini pastikan bahwa anda sudah mencoba 2_create_file_folder:</b>

";

// Folder dari file
$dir = 'storage';

// Identitas File yang akan diubah
$nama_file = 'test.txt';

// Menggunakan unlink() untuk menghapus File 
if (!unlink($dir . '/' . $nama_file)) { 
    echo ("$nama_file tidak bisa di hapus"); 
} else { 
    echo ("$nama_file telah dihapus"); 
} 
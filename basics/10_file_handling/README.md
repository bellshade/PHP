# Penanganan File (File Handling)

Tentu saja dalam melakukan development aplikasi akan diperlukan file baik itu berupa file gambar atau bisa saja sebuah file txt biasa. Bisa saja ada task tertentu yang nantinya akan memerlukan file dalam proses pengerjaannya, oleh karena itu kali ini kita akan mempelajari mengenai `file handling` di PHP.

## Daftar Isi

- [Membaca File dan Folder](#1-membaca-file-dan-folder)
- [Membuat File dan Folder](#2-membuat-file-dan-folder)
- [Menuliskan File](#3-menuliskan-file)
- [Menghapus File](#4-menghapus-file)

## 1. Membaca File dan Folder

Untuk `membaca sebuah file` dalam PHP maka akan ada function `fread()` yang merupakan sebuah function dari PHPnya yang digunakan untuk membaca file, untuk menggunakannya ada dua parameter yang diperlukan yakni `file` dan `size`. Jadi `file` yang dimaksud adalah posisi atau letak dari `file` kemudian `size` adalah ukurannya. Tidak lupa juga untuk membuka filenya terlebih dahulu dengan function `fopen()` yang parameternya adalah `lokasi file` dan `method` membacanya. Berikut merupakan salah satu contoh untuk membaca sebuah file:

```php
// Letak filenya
$file = 'posisi_file';

// Membuka file yang ingin dibaca
$open = fopen($file, 'METHOD_READING');

// Mencari size dari filenya
$size = filesize($file);

// Untuk membaca sebuah file maka gunakan lah fread
$filedata = fread($open, $size);
```

<br>

## 2. Membuat File dan Folder

Selanjutnya adalah `membuat file dan folder`. Selain `membaca` file, dalam PHP juga mungkin untuk membuat file dan folder. Untuk membuat sebauh folder maka akan diperlukan function `mkdir` nantinya tinggal ditambahkan nama dari folder yang akan dibuat. Kemudian untuk membuat sebuah file bisa dengan menggunakan function `fwrite`. Jangan lupa untuk membuat file maka folder harus di buka dengan function `fopen`. Berikut contoh pembuatan folder dan juga file:

```php
$file = 'nama_folder';

// Membuat Folder
mkdir($file);

// Membuat File
$fopen = fopen($file . '/' . 'nama_file_baru.txt', 'w');

// fwrite untuk membuat sebuah file dan kontennya
fwrite($fopen, 'isi dari file baru');

// Menutup File
fclose($fopen);
```

## 3. Menuliskan File

Kemudian, file yang tadi telah dibuat itu bisa di `write` atau `diubah` isinya. Untuk di PHP sendiri, mengubah file bisa dilakukan dengan menggunakan function `fwrite`. Jadi, selain untuk membuat sebuah file yang baru, `fwrite` juga bisa digunakan untuk mengubah isi dari file yang sudah ada. Kemabli lagi diingatkan, untuk menggunakan `fwirte` jangan lupa untuk membuka file dengan function `fopen`. Untuk lebih jelasnya, berikut contoh dari penggunaan write file:

```php
$file = 'nama_folder';

// Open file
$fopen = fopen($file . '/' . 'nama_file_target.txt', 'w');

// fwrite untuk mengubah isi file target sesuai dengan yang diinginkan
fwrite($fopen, 'Isi/konten baru dari file');

// Menutup File
fclose($fopen);
```

## 4. Menghapus File

Selanjutnya adalah `delete` atau menghapus file. Dalam PHP untuk menghapus sebuah file maka ada sebuah function yang bisa di gunakan, namanya adalah `unlink`. Untuk menggunakannya jangan lupa untuk memastikan direktori file yang akan dituju itu sudah tepat agar penghapusan filenya bisa berjalan dengan sukses. Untuk lebih jelasnya, berikut merupakan salah stu contoh dari `delete` file dalam PHP:

```php
// Nama Folder
$file = 'nama_folder';

// Nama File
$nama_file = 'nama.txt';

// Menghapus File
unlink($dir. '/' . $nama_file)
```


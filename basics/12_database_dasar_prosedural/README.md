# Database dasar
Database dibutuhkan untuk menyimpan data pada sistem. Dengan menggunakan database, sebuah aplikasi PHP dapat menggunakan data yang tersimpan secara permanen dan terpusat. Maka, dibutuhkan yang namanya DBMS (Database Management System) yang dapat digunakan





## Daftar Isi

- [1. Pengenalan](#1-pengenalan)
  - [Bahasa Pemrograman untuk olah database](#bahasa-pemrograman-untuk-olah-database)
  - [DBMS (Database Management System)](#dbms-database-management-system)
  - [Database Administration / Management Tool](#database-administration-management-tool)
  - [Apa selanjutnya?](#apa-selanjutnya)
- [2. Koneksi database](#2-koneksi-database)


## 1. Pengenalan

Dalam pemrograman, database digunakan sebagai media penyimpanan data. Jika diibaratkan, database adalah lemari yang mampu digunakan untuk menyimpan banyak barang, kemudian rak pada lemari adalah tabel-tabel/collection yang ada pada database. pada materi ini kita akan mempelajari tentang database mysql, salah satu database yang sering digunakan dalam berbagai kondisi.

Apa saja komponen yang dibutuhkan pada database untuk bisa digunakan?

### Bahasa Pemrograman untuk olah database

Ada banyak sekali yang digunakan untuk mengelola database, misalnya seperti: SQL, SchemeQL, LINQ, ScalaQuery, HaskellDB dan masih ada banyak lagi. Yang paling populer di kalangan web developer adalah SQL dan di Bellshade PHP ini, kita akan menggunakan SQL.

### DBMS _(Database Management System)_

DBMS adalah sistem utama database yang menjadi tempat dimana semua operasi database akan terjadi. Ada banyak DBMS yang populer digunakan seperti: MySQL, MariaDB _(turunan MySQL)_, PostgreSQL, SQLite, Oracle, MongoDB, Oracle dan masih banyak yang lain. Jika MySQL adalah DBMSnya, SQL adalah bahasa pemrograman untuk mengoperasikannya. Sama seperti PostgreSQL, SQLite yang juga menggunakan bahasa pemrograman SQL untuk melakukan manajemen database.

Di Bellshade Basic ini, kita akan menggunakan MySQL dan bahasa pemrogramannya yaitu SQL. Di materi ini, kita tidak membahas secara mendalam tentang bahasa SQL itu sendiri, melainkan kita referensikan ke Bellshade SQL dimana akan dibahas secara mendalam dan mendetail sekaligus disajikan agar lebih mudah dipahami.

> Baca selengkapnya: [Bellshade SQL](https://github.com/bellshade/SQL)

Di materi basic ini, kita akan lebih membahas tentang bagaimana cara menjalankan kode SQL di dalam PHP dan cara memanfaatkan data yang dikeluarkan oleh SQL untuk diterjemahkan menjadi informasi yang jelas menggunakan PHP.

### Database Administration / Management Tool

DB Administration tool sederhananya adalah sebuah software GUI yang bertujuan untuk memudahkan seorang developer / database administrator agar dapat mengelola database dengan mudah tanpa harus menuliskan kode sehingga dapat menghemat waktu saat pengembangan atau hanya sekedar melakukan manajemen data biasa. Dengan menggunakan manajemen software berbasis GUI, sebuah struktur tabel database, baris data, garis relasi, dsb dapat ditampilkan secara visual di layar.

Contoh dari db administration tool adalah diantaranya yang paling populer yaitu phpMyadmin, MySQL Workbench, HeidiSQL, DbVisualizer, Teradata dll. Jika kamu menginstall software stack `XAMPP`, kamu sudah disediakan `MariaDB` _(turunan MySQL)_ sebagai RDBMS dan `phpMyAdmin` sebagai DB Admin toolnya.


### Apa selanjutnya?

Kami membuat standar penulisan database untuk _project repository_ ini agar memudahkan kamu untuk memahami isi dari tabel dan database yang dibuat. Beberapa ketentuannya yaitu:
- Hanya ada satu database untuk melayani keseluruhan project repositori ini dengan nama defaultnya adalah **`bellshade_php`**.
- Nama tabel mengikuti format `[nomor]_[nama materi]_[nama tabel]`, spasi bisa menggunakan `_` _(underscore)_. 
> **Contoh nama tabel:** `12_database_prosedural_buku` 

Untuk memulai mempraktekkan materi ini, kamu dapat buat database dengan nama **`bellshade_php`** terlebih dahulu.
Ada banyak sekali cara untuk membuat database, namun jika kamu menggunakan `XAMPP` sebagai stack web development utama _(yang kami asumsikan banyak dari kamu yang menggunakan XAMPP)_, Kamu dapat menggunakan `phpMyAdmin` bawaan XAMPP untuk membuat database. Kamu dapat ikuti langkah berikut:

1. **Hidupkan server MySQL**
<p align="center">
    <img src="../../assets/content/basics/12_database_dasar_prosedural/1_xampp.jpg">
</p>

2. **Buka phpMyAdmin lalu buat database dengan nama `bellshade_php`**

Untuk membuka phpMyAdmin, buka `localhost/phpmyadmin` > klik `new` > tuliskan nama databasenya yaitu `bellshade_php` > kemudian klik **Create** 
<p align="center">
    <img src="../../assets/content/basics/12_database_dasar_prosedural/2_phpmyadmin.png">
</p>

3. **Database sudah jadi**

Database ini akan digunakan untuk keseluruhan _project repository_ Bellshade PHP sehingga kamu tidak perlu repot membuat database lagi untuk demo materi / algoritma yang lain

<p align="center">
    <img src="../../assets/content/basics/12_database_dasar_prosedural/3_database_jadi.png">
</p>


## 2. Koneksi Database

> Setelah melewati materi ini, diharapkan teman-teman dapat memahami bagaimana melakukan koneksi database mysql pada bahasa pemrograman PHP.

Sebelum melakukan operasi manajemen data yang ada didalam database, sebuah koneksi perlu dibuat terlebih dahulu. Pada dasarnya, sebuah sistem database seperti MySQL tidak langsung dapat di akses tanpa adanya otentikasi. Maka perlu masuk dulu kedalam sistem database MySQL menggunakan username, dan password. 

Singkatnya, berikut beberapa hal yang dibutuhkan untuk terhubung kedalam sistem database.
- Host : Alamat host komputer tempat sistem database berjalan
- Username : Username untuk masuk kedalam database
- Password : Password untuk masuk kedalam database
- Nama database : Nama dari database yang akan digunakan
- Port (Opsional) : Port dari host yang melayani sistem Database, biasanya nilai _default:_ `3306`.

Untuk melakukan koneksi, PHP sejak versi 7 menyediakan 2 pilihan yaitu menggunakan mysqli atau menggunakan PDO (PHP Data Objects). Kita akan mulai dengan cara prosedural terlebih dahulu.

Untuk terhubung dengan database, PHP menyediakan fungsi `mysqli_connect(host, user, pass, dbname, port)`

```php
<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'bellshade_php';
$port = '3306';

$connect = @mysqli_connect($host, $user, $pass, $db, $port);
if (!$connect) {
    echo 'Tidak dapat terhubung dengan database: ' . mysqli_connect_error();
    die;
}
```

<a href='2_connect.php' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>
> Jika tidak ada tampilan apapun, itu artinya koneksi sudah berhasil dan database sudah dibuat.




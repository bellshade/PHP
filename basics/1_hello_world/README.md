# Hello World

<p align="center">
  <img src="https://lh3.googleusercontent.com/-k8m7QwCeUy0/YVM9ZeZyKRI/AAAAAAAAJmk/0xceEPfN8OUyNhoiVUk3WvkdneABK51JQCLcBGAsYHQ/php-logo-20745.png" />
</p>

Selamat datang di basic pemrograman PHP. Di sini kalian dapat memulai pertama kali mencoba pemrograman PHP. Sebelum memulai, ada beberapa prasyarat untuk dapat mengikuti materi ini yaitu

- Memahami cara kerja Internet dan halaman Web
- Memahami dasar HTML + CSS

Selain itu materi ini dibuat dengan secara runtut dan _beginner friendly_ sehingga kalian bisa lebih mudah saat mempelajari.
> _"Duduk tenang, relaks, baca pelan-pelan sambil praktikkan secara bertahap"_

## Daftar Isi

- [Hello World](#hello-world)
  - [Daftar Isi](#daftar-isi)
  - [Gambaran Singkat](#gambaran-singkat)
  - [1. Persiapan](#1-persiapan)
    - [Web Server](#web-server)
    - [PHP Compiler/Preprocessor](#php-compilerpreprocessor)
    - [Database](#database)
    - [Apa Yang Harus Diinstall Untuk Pengembangan PHP](#apa-yang-harus-diinstall-untuk-pengembangan-php)
      - [XAMPP - < link untuk download >](#xampp----link-untuk-download-)
  - [2. Hello World _(2_hello_world.php)_](#2-hello-world-2_hello_worldphp)
  - [3. PHP dalam HTML _(3_php_html.php)_](#3-php-dalam-html-3_php_htmlphp)

## Gambaran Singkat

PHP adalah bahasa pemrograman yang memungkinkan suatu halaman web untuk memiliki konten yang dinamis. Sederhananya, PHP digunakan untuk mengembangkan aplikasi web mulai dari yang simpel sampai yang paling kompleks. Oleh karena itu PHP adalah salah satu bahasa pemrograman yang menghidupkan aplikasi web.

Untuk mengetahui PHP lebih dalam lagi, mari kita pelajari bagaimana cara kerja sebuah web

> _Bagaimana cara kerja sebuah web?_

- Browser (pengguna) mengirimkan permintaan ke server
- Jika Server menyetujui permintaan, server memberikan kode status HTTP 200 (yang artinya OK, boleh) lalu mengirimkan halaman website yang diminta
- Browser akan menerjemahkan file website tadi menjadi tampilan web.

> _Dimana letak PHP berada?_

PHP adalah _Server Side Scripting_ yang artinya dilakukan di sisi server. Kode PHP sendiri tertanam dalam file halaman web yang nantinya dikirimkan kembali ke pengguna dalam kondisi sudah di _compile_ / dijalankan.

## 1. Persiapan

Di atas sudah dibahas bahwa dengan menggunakan PHP, diperlukan sebuah server agar dapat berjalan. Di bagian ini kita akan bahas tentang apa saja yang dibutuhkan agar sebuah aplikasi web berbasis PHP dapat berjalan, dan bagaimana cara menyiapkan lingkungan pengembangan pemrograman PHP yang ideal.

Ada tiga komponen utama agar aplikasi web berbasis PHP dapat berjalan, diantaranya:

### Web Server

Ada banyak Web Server yang tersedia, berikut beberapa web server yang sangat populer dan yang sering kali dipasangkan dengan pengembangan aplikasi web berbasis PHP :

<p align="center">
  <img src="https://lh3.googleusercontent.com/-4JEQ9irQ4dA/YVP524U5j0I/AAAAAAAAJms/NUiNPChOecc62cVvVGhrHD_8qU5dz7NfACLcBGAsYHQ/2.png">
</p>

Dan juga ada banyak lainnya yang belum disebutkan. Web server di atas adalah yang paling sering di gunakan di berbagai layanan hosting untuk deployment aplikasi web berbasis PHP.

### PHP Compiler/Preprocessor

Setelah ada web server yang berjalan, dibutuhkan PHP Compiler itu sendiri untuk melakukan _compiling_ / menjalankan kode PHP.

Sekarang per September 2021, PHP sudah menginjak versi ke-8 yang memiliki gaya dan aturan penulisan kode PHP terbaru.

<p align="center">
  <img width="25%" src="https://user-images.githubusercontent.com/57158078/138054197-b2648ec3-862b-4941-823e-774bc4a32098.jpg">
</p>

Info selengkapnya : [php.net](https://www.php.net/)

### Database

Database dibutuhkan untuk menyimpan data pada sistem. Dengan menggunakan database, sebuah aplikasi PHP dapat menggunakan data yang tersimpan secara permanen dan terpusat. Maka, dibutuhkan yang namanya DBMS _(Database Management System)_ yang dapat digunakan

Ada banyak DBMS yang tersedia :
<p align="center">
  <img src="https://lh3.googleusercontent.com/--bqqVhIh4-c/YVQBfMSJcqI/AAAAAAAAJm8/nckBW23nggY7_7hFSt7H4MgFsyb46MB_wCLcBGAsYHQ/3.png">
</p>

### Apa Yang Harus Diinstall Untuk Pengembangan PHP

Solusi yang paling sederhana adalah menginstall _software stack_ untuk lingkungan PHP web development. Software Stack adalah kumpulan dari komponen-komponen di atas menjadi 1 software agar lebih mudah untuk developer PHP untuk memulai.

Ada banyak software stack untuk pengembangan web yang dapat **kalian pilih salah satu** untuk di install :

<p align="center">
  <img src="https://lh3.googleusercontent.com/-uuMQ65vx3mQ/YVP529PhnxI/AAAAAAAAJmw/JffVvX0oRJgLLxj_r3IqfNL4-rb17e4HgCLcBGAsYHQ/1.png">
</p>

Kami sarankan kalian untuk mengunduh dan menginstall salah satu web development software stack yang paling populer yaitu

#### XAMPP - [< link untuk download >](https://www.apachefriends.org/download.html)

Kamu juga dapat menggunakan software stack yang lainnya.

## 2. Hello World _([2_hello_world.php](2_hello_world.php))_

Setelah memasang software yang dibutuhkan, mari mulai untuk menulis kode PHP pertama kamu.

> _Momen ini mungkin termasuk momen besar anda, potret momen ini jika diperlukan_

Mari mulai dengan hal-hal yang penting dalam pemrograman PHP :

- Semua kode PHP disimpan dalam file berekstensi `.php`
- Agar file `.php` ini dapat diakses melalui web server, taruh di dalam direktori web server kamu

> Default untuk **XAMPP** berada di `/xampp/htdocs` <br/>
> Default untuk **MAMP** berada di `/mamp/htdocs` <br/>
> Default untuk **WAMP** berada di `/wamp/www` <br/>
> Default untuk **LAMP** berada di `/var/www/html` <br/>
> Default untuk **Laragon** berada di `/laragon/www` <br/>

- Agar rapi, buat folder lagi di dalam direktori root web server kamu dan beri nama sesuai dengan nama _project_ nya. (misalnya `belajar-1` atau `hello_world`) lalu di dalam folder tersebut buat file PHP dengan nama apapun. (misalnya `index.php`)
- Kode PHP diawali dengan `<?php` dan diakhiri dengan `?>` dan ditengah-tengahnya kamu dapat menuliskan kode PHP apapun. Misalnya untuk menampilkan teks, kamu dapat menggunakan `echo "tulisan"`
- Kode PHP selalu diakhiri dengan simbol `;` (titik koma) di akhir baris.

> _Jadi jangan pernah lupakan titik koma saat menulis kode PHP_

Berikut contoh kode PHP untuk menampilkan teks "Hello World!"

```php
<?php
  echo "Hello World";
?>
```

Seperti contoh pada file [2_hello_world.php](2_hello_world.php)

Untuk melihat hasilnya, hidupkan web server apache pada XAMPP lalu buka browser ketikkan URL `localhost/path_ke_file_php_nya`.

Misalnya jika file indeks ada di `htdocs/belajar/index.php` maka kamu bisa mengakses lewat Browser dengan menggunakan URL `localhost/belajar/index.php`. Hasilnya keluar teks seperti ini :

<p align="center">
  <img src="https://lh3.googleusercontent.com/-xt0uLG7I4PQ/YVQvzhHB9MI/AAAAAAAAJnQ/PX8SxFbaAbAouwttKJEAKGsSukx0WfH1gCLcBGAsYHQ/image.png" />
</p>

## 3. PHP dalam HTML _([3_php_html.php](3_php_html.php))_

Kode PHP dieksekusi di server dan dikirimkan kembali ke Browser _client_ dalam bentuk HTML, di sini semua kode PHP sudah matang dan sudah dijalankan. Oleh karena itu, sangat natural jika kode PHP dan HTML bercampur satu sama lain.

Untuk menambahkan tag HTML cukup tuliskan kode HTML pada file PHP, kode HTML ini harus di luar tag `<?php...?>`
> **Perhatikan:** Kode HTML yang dimasukkan di dalam file `.php` bukan sebaliknya

Contoh penggunaan ada di file [3_php_html.php](3_php_html.php)

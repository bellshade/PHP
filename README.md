<p align="center">
    <img width="20%" src="./assets/images/logo.png"><br/><br/>
    Part of Bellshade Project, managed by <a href="http://discord.gg/S4rrXQU"> WPU Discord Community</a> <br>
    WPU Community is the fastest growing software developer forum initiated by <a href="https://www.youtube.com/c/WebProgrammingUNPAS"> Mr. Sandhika Galih</a> <br>
    <a href="http://discord.gg/S4rrXQU"><img src="https://img.shields.io/discord/722002048643497994?logo=discord&logoColor=white&style=for-the-badge"></a>
    <img src="https://img.shields.io/github/workflow/status/bellshade/PHP/CI%20PHP%20PSR-12%20Linting?style=for-the-badge">
    <img src="https://img.shields.io/github/license/bellshade/PHPAlgorithm?style=for-the-badge">

</p>

## Daftar isi

- [Pendahuluan](#pendahuluan)
- [Panduan penggunaan](#panduan-penggunaan)
- [Kategori yang tersedia](#kategori-yang-tersedia)
  - [Pembelajaran _(basics)_](#pembelajaran-basics)
  - [Komponen Kegunaan _(utilities)_](#komponen-kegunaan-utilities)
  - [Algoritma _(algorithms)_](#algoritma-algorithms)
- [Berkontribusi](#berkontribusi)

## Pendahuluan

Selamat datang di repositori Bellshade PHP. Disini kamu dapat mempelajari semua tentang bahasa pemrograman PHP mulai dari dasar-dasar, fitur-fitur PHP, implementasi algoritma dan lain sebagainya. Dikemas dengan gaya penulisan yang rapi terorganisasi dan penjelasan berbentuk artikel berbahasa Indonesia yang mudah dimengerti, sehingga repositori ini dapat kamu gunakan sebagai referensi bahasa pemrograman PHP.

Repositori Bellshade PHP dapat digunakan untuk semua level baik itu pemula, menengah atau bahkan _expert_. Untuk pemula, kami menyediakan materi dasar dalam bentuk artikel dan demonstrasi yang runtut sehingga secara perlahan repositori Bellshade PHP dapat membantu kamu untuk meningkatkan pengetahuan dan keahlian pemrograman PHP tanpa mengalami kesusahan akibat jalan belajar yang tidak runtut.

Bagi kamu yang sudah berpengalaman dalam pemrograman menggunakan PHP, tentunya kamu dapat kembali lagi mempelajari materi-materi tertentu untuk mengasah keahlian pemrograman atau hanya sekedar mengingat-ingat kembali. Selain itu, kami juga memberikan topik referensi lain yang sifatnya adalah umum dan opsional. Topik referensi ini dapat berupa implementasi fitur-fitur atau komponen kegunaan _(utilities)_ seperti manipulasi gambar, chart, datetime dan sebagainya yang sejatinya adalah opsional dan tidak ada prasyarat tertentu untuk bisa digunakan.

> _"Harapannya, Bellshade PHP dapat terus digunakan oleh para web developer PHP di Indonesia sebagai referensi / kamus / tempat belajar tentang pemrograman web berbasis PHP"_

PHP adalah bahasa pemrograman yang cukup luas dengan ekosistem yang luar biasa besarnya. Untuk terjaga agar tetap terorganisasi dan informatif, kami mengategorikan tiap pembahasan menjadi beberapa topik kategori.

### Apa itu PHP dan apa fungsinya?

PHP adalah bahasa scripting server-side, Bahasa pemrograman yang digunakan untuk mengembangkan situs web statis atau situs web dinamis atau aplikasi Web. PHP singkatan dari Hypertext Pre-processor, yang sebelumnya disebut Personal Home Pages.

Fungsi PHP adalah membuat atau mengembangkan situs web statis atau situs web dinamis atau aplikasi Web. Walaupun sebenarnya bukan hanya PHP bahasa pemrograman yang bisa digunakan untuk memuat website.

PHP digunakan karena untuk membuat website dinamis bisa digunakan untuk menyimpan data ke dalam database, membuat halaman yang dapat berubah-ubah sesuai dengan input user, memproses form, dll.

Dalam membuat file PHP dapat digabung menggunakan tag html, Dan ketika tanpa menggunakan tag html apa pun disebut file PHP Murni. Server menginterpretasikan kode PHP dan mengeluarkan hasilnya sebagai kode HTML ke browser web. Agar server mengidentifikasi kode PHP dari kode HTML, kita harus selalu menyertakan kode PHP dalam tag PHP.

## Panduan penggunaan

Ada 2 cara yang dapat kamu gunakan untuk menjadikan repositori ini sebagai referensi utama.

### Dengan secara langsung di Github

Kamu dapat langsung menjelajahi direktori-direktori yang ada di repositori ini, dan karena artikel penjelasannya berupa markdown `README.md`, kamu dapat membacanya saat berada di direktori yang berkaitan. Namun kamu tidak dapat menjalankan demo file PHP-nya secara langsung.

### Dengan clone di web server kamu di _local_

Jika diperhatikan, tiap direktori selalu memiliki `index.php` yang berfungsi untuk menampilkan penjelasan berupa markdown `README.md` ke dalam browser. Kamu juga dapat menjelajahi setiap folder langsung dari browser dan dapat menjalankan demo file PHP-nya juga. akan tetapi, karena kami menggunakan _dependency_ (bergantung pada) pihak ketiga, ikuti langkah dibawah ini:

- Download & Install composer di [situs resminya](https://getcomposer.org/download/)
- Clone repositori dengan perintah `git clone https://github.com/bellshade/PHP`.
- Jika kamu menggunakan LAMPP, pindahkan reponya ke dalam direktori `var/www/html`.
- Jika kamu menggunakan XAMPP, pindahkan reponya ke dalam direktori `.../xampp/htdocs`.
- Pada direktori hasil _clone_ nya, lakukan perintah berikut:

```bash
composer install
```

- Copy file `env` lalu ubah file duplikat itu menjadi `.env`, buka file tersebut lalu rubah `BASE_URL` menjadi url tempat kamu menempatkan project ini

Contoh:

```
BASE_URL = 'http://localhost/PHP'
```

- Kemudian kamu dapat mengaksesnya di browser dengan membuka `localhost/php` atau `127.0.0.1/php`.
<p align="center">
    <img width="90%" src="./assets/images/getting-started.png"><br/><br/>
</p>

### Konfigurasi untuk Nginx

Jika kamu menggunakan Nginx sebagai Web Server, kamu memerlukan konfigurasi tambahan karena nginx tidak mendukung konfigurasi `.htaccess`. Dan karena project ini menggunakan _rewriting dan parsing url_, kamu harus menerapkan konfigurasi web server nginx berikut ini agar dapat rewrite path url menjadi sebuah parameter get yang merujuk ke `index.php`

```
location / {
  try_files $uri $uri/ /index.php?page=$uri;
  index index.php;
}
```

### Konfigurasi untuk PHP Built-in Web Server

Jika kamu menggunakan _web server_ bawaan PHP. Kami telah menyediakan `router.php` untuk menangani request URL. Untuk menjalankan server, kamu dapat menggunakan command ini:

```
php -S localhost:8080 router.php
```

> Keterangan: Port bisa disesuaikan sesuai kebutuhan kamu

## Kategori yang tersedia

### Pembelajaran _(basics)_

Di repositori Bellshade PHP terdapat kategori basic yang berisi tentang kumpulan materi pembelajaran dalam bentuk artikel berisi text dan media-media visual yang informatif. Kumpulan materi pembelajaran ini juga disusun secara runtut sehingga dapat digunakan sebagai pembelajaran.

> kategori pembelajaran (basic learning) ini bisa kamu ditemukan pada direktori `/basics`

Di dalam folder `/basics` terdapat folder-folder materi yang di dalam tiap folder materi tersebut terdapat file `README.md` yang mana file ini adalah artikel penjelasan dari materinya. Dan tentunya, di dalam tiap folder materi juga terdapat file demo PHP berisi contoh kode implementasi dari materinya yang dapat dijalankan di local jika sudah di clone dan ditempatkan di web-server.

### Komponen kegunaan _(utilities)_

Kategori _utilities_ adalah kumpulan referensi dan contoh penggunaan komponen-komponen / fitur-fitur umum yang mungkin diperlukan oleh para web developer untuk diterapkan pada proyek aplikasi web-nya. Di dalam kategori ini, kamu dapat menjelajahi berbagai macam kebutuhan umum untuk pengembangan web umum dan mempelajari bagaimana cara mengimplementasikannya.

Contoh skenario penggunaan kategori referensi ini adalah sebagai berikut: _"Misalnya kamu sedang mengerjakan suatu proyek, lalu tiba-tiba di tengah pengerjaan proyek dibutuhkan bagaimana cara memanipulasi gambar yang diunggah dengan menggunakan PHP"_. Manipulasi gambar adalah hal yang sangat opsional dan tidak esensial pada setiap pengembangan web, meskipun sudah level menengah terkadang juga masih perlu mencari referensi lagi. Oleh karena itu, hal ini termasuk dalam kategori _utilities_ dan kamu dapat menjelajahi kebutuhan-kebutuhan lainnya di kategori ini.

> kategori kegunaan _(utilities)_ dapat kamu temukan pada direktori `/utilities`

### Algoritma _(algorithms)_

Topik kategori algoritma berisi tentang kumpulan penyelesaian masalah dengan berbagai macam jenis algoritma yang ditulis dalam bahasa pemrograman PHP. Meskipun kurang begitu menyenangkan untuk dipelajari, dan kurang begitu sering digunakan pada pengembangan web berbasis PHP, mempelajari algoritma dapat meningkatkan kemampuan cara berpikir fundamental sebagai seorang _programmer_.

> kategori algoritma _(algorithms)_ dapat ditemukan pada direktori `/algorithms`

## Berkontribusi

Kami sangat senang bila kalian ingin melakukan kontribusi pada repositori **PHP** ini. Tapi, sebelum itu, silahkan baca terlebih dahulu [peraturan dan pedomannya](CONTRIBUTING.md) yang telah kami siapkan. Terima kasih!

Untuk informasi lebih lanjut, mari gabung dalam komunitas [Discord Channel WPU](http://discord.gg/S4rrXQU)

Tentang apa saja yang bisa kamu kerjakan untuk berkontribusi, kamu dapat mencari issue yang kosong di [_issues_](https://github.com/bellshade/PHP/issues). Lalu, kamu dapat assign diri sendiri ke salah satu issues, setelah itu ajukan _Pull Request_ dengan menutup issue itu. Kami akan mereview hasil pengerjaan kamu, dan jika disetujui kami akan merge ke dalam repositori ini.

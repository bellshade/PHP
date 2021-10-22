# Contributing

## Daftar Isi
- [Contributor](#contributor)
- [Kategori yang tersedia](#kategori-yang-tersedia)
  - [Basic](#pembelajaran-dasar-basic-learning)
  - [Algoritma](#algoritma-algorithm)
  - [Utility](#komponen-fungsi-kegunaan-utilities)
- [Standar Penulisan](#standar-penulisan)
  - [Tentang gaya PSR-12](#gaya-penulisan-psr12)
  - [Pedoman penulisan untuk basic](#pedoman-penulisan-lainnya-untuk-pembelajaran-dasar-basic-learning)
  - [Pedoman penulisan untuk utility](#pedoman-penulisan-lainnya-untuk-fungsi-kegunaan-utilities)
  - [Pedoman penulisan untuk algorithm](#pedoman-penulisan-lainnya-untuk-algoritma-algorithm)
- [Unit Testing](#testing)
- [Pull Request](#pull-request)

## Contributor

Kami sangat senang Kamu dapat ikut berkontribusi dalam implementasi algoritma, struktur data atau memperbaiki error serta merilis implementasi materi basic learning PHP. Semua boleh ikut berkontribusi walaupun hal kecil dengan ketentuan sebagai berikut:

- Hasil pekerjaan Kamu adalah buatan Kamu sendiri dan tidak ada hak cipta dari orang lain, jika kami menemukan kesamaan maka kami tidak `merged`.
- Hasil kerja Kamu akan berlisensi [MIT](LICENSE) ketika permintaan pull Kamu sudah di merged
- Hasil kerja Kamu wajib mengikuti standar dan style koding dari kami (lihat bagian [Standar penulisan](#standar-penulisan))
- Jika dibutuhkan, hanya gunakan library package dari composer, sebelumnya silahkan diskusi di [issue](https://github.com/bellshade/PHP/issues)

## Kategori yang tersedia

### Pembelajaran Dasar (_Basic Learning_)

Basic learning adalah kumpulan demonstrasi kode materi pemrograman PHP beserta artikel penjelasan yang lengkap, mudah di mengerti dan menarik secara visual. Dirangkai dengan alur yang runtut mulai dasar sehingga bisa dijadikan referensi untuk kalian yang belajar pemrograman PHP.

Untuk berkontribusi di repositori bellshade PHP bagian Basic ini kamu harus mengikuti urutan materi yang telah ditentukan. Daftar materi yang tersedia bisa kamu jelajahi di [Issues tag materi](https://github.com/bellshade/PHP/issues?q=is%3Aopen+is%3Aissue+label%3Abasic). Didalam issue itu kami juga menuliskan rekomendasi tentang konten yang ada dalam materi tersebut, namun kamu masih dapat menambah materi konten jika dirasa perlu. 

Semua implementasi kode untuk Basic Learning bisa ditemukan di `/basics`  <br/>
dengan struktur direktori sebagai berikut <br/>

```
📦 /
 ┣📦basics
 ┃ ┣ 📂x_nama_materi
 ┃ ┃ ┣ 📜1_sub_materi.php
 ┃ ┃ ┣ 📜2_sub_materi.php
 ┃ ┃ ┣ 📜3_sub_materi.php
 ┃ ┃ ┣  ....
 ┃ ┃ ┗ 📜README.md
```

> Artikel materi ditulis pada `README.md` <br/>


### Algoritma (_Algorithm_)

Algoritma adalah langkah-langkah untuk menyelesaikan suatu pekerjaan dimana terdiri dari 3 bagian utama, yaitu:

- Input/masukan, sebelum menjalankan sebuah algoritma maka hal yang pertama harus dilakukan adalah menerima masukan, input dapat berasal dari pengguna ataupun dari langkah sebelumnya.
- Proses, bagian utama dari algoritma yang melakukan pengolahan input yang akan menghasilkan output.
- Output/keluaran, output adalah hasil dari bagian proses, output ini juga bisa digunakan untuk langkah selanjutnya (jika masih ada).

Algoritma harus dikemas sedemikian rupa sehingga memudahkan pembaca untuk memasukkannya ke dalam program yang lebih besar.

Semua implementasi kode untuk Algorithm bisa ditemukan di `/algorithms` dengan bentuk struktur seperti berikut

```
📦/
 ┣📦algorithms
 ┃ ┣ 📂NamaKategoriAlgoritma
 ┃ ┃ ┣ 📂NamaKasusAlgoritma
 ┃ ┃ ┃ ┣ 📜FileAlgoritmanya.php
 ┃ ┃ ┃ ┗ 📜README.md
 ┃ ┃ ┗ 📜README.md
```
> Artikel penjelasan algoritma ditulis pada `README.md` <br/>

### Komponen / Fungsi kegunaan _(Utilities)_
Kategori utilities adalah kumpulan referensi dan contoh penggunaan komponen-komponen / fitur-fitur umum yang mungkin diperlukan oleh para web developer untuk diterapkan pada project aplikasi webnya. Didalam kategori ini, kalian dapat menjelajahi berbagai macam kebutuhan umum untuk pengembangan web umum dan mempelajari bagaimana cara mengimplementasikannya.

Utility ini adalah sesuatu yang bukan esensial dalam pengembangan web namun terkadang dibutuhkan. Bisa juga dibilang Utility ini adalah peralatan / komponen yang bisa melengkapi sebuah fitur dalam aplikasi berbasis web. Contohnya adalah seperti: Manipulasi Gambar, DateTime, Mencetak ke printer dot matrix dan sebagainya. 

Semua tentang Utility dapat ditemukan pada direktori `/utilities`<br/>
dengan bentuk struktur yang mirip dengan `algorithm`

```
📦/
 ┣📦utilities
 ┃ ┣ 📂NamaKategoriUtility
 ┃ ┃ ┣ 📂NamaUtility
 ┃ ┃ ┃ ┣ 📜demo_utility_1.php
 ┃ ┃ ┃ ┣ 📜demo_utility_2.php
 ┃ ┃ ┃ ┣ 📜 .....
 ┃ ┃ ┃ ┗ 📜README.md
 ┃ ┃ ┗ 📜README.md
 ```
> Artikel penjelasan utility ditulis pada `README.md` <br/>

## Standar Penulisan

### Gaya Penulisan PSR-12

Kami menggunakan standar penulisan PSR-12 untuk seluruh implementasi kode Basics & Algorithms. PSR-12 adalah rekomendasi standar PHP untuk gaya dan konvensi penulisan kode. [lihat dokumentasi resmi PSR-12](https://www.php-fig.org/psr/psr-12/)

Untuk _integration_ nya, kami menggunakan [CodeSniffer](https://packagist.org/packages/squizlabs/php_codesniffer) untuk mengecek apakah seluruh kode sudah mengikuti standar gaya penulisan PSR-12.
Package CodeSniffer ini sudah termasuk dalam _composer.json_ untuk Kamu gunakan di lokal

Setelah Kamu clone repository ini, lakukan instalasi package composer terlebih dahulu

```bash
composer install
```

Kemudian, untuk melakukan pengecekan standar penulisan PSR-12 terhadap seluruh project, gunakan perintah:

```bash
composer phpcs
```

Untuk memanfaatkan CodeSniffer agar bisa memperbaiki kode yang tidak memenuhi standar penulisan secara otomatis, gunakan perintah:

```bash
composer phpcbf
```

Jika menggunakan `phpcbf` masih belum memperbaiki seluruh kesalahan yang ada, Kamu harus memperbaikinya secara manual. <br/>Kami sangat sarankan untuk Kamu jika menggunakan software text editor Visual Studio Code, Kamu dapat menggunakan ekstensi bernama [PHPCS](https://marketplace.visualstudio.com/items?itemName=ikappas.phpcs). Dengan ekstensi itu, Visual Studio Code akan menunjukkan letak kesalahannya jika Kamu melakukan kesalahan penulisan.

Pastikan Kamu sudah melakukan pengecekan ini sebelum mengajukan _*Pull Request*_ karena ini termasuk salah satu workflow yang dijalankan secara otomatis oleh kami saat Kamu mengajukan _*Pull Request*_

### Pedoman Penulisan Lainnya untuk Pembelajaran Dasar (_Basic Learning_)

Selain menggunakan gaya penulisan PSR-12 untuk implementasi kode pada Basic Learning. Ada ketentuan konsistensi yang harus Kamu terapkan yaitu:

- Setiap materi pembelajaran berada pada folder tersendiri yang dinamai dengan materi yang berkaitan
- Folder materi memiliki penomoran diawal sebagai _prefix_
- Artikel penjelasan ditulis di `README.md` pada setiap folder materi. jadi kamu perlu membuat `README.md`nya
- Penamaan variabel dan fungsi menggunakan `snake_case`

### Pedoman Penulisan Lainnya untuk fungsi kegunaan _(Utilities)_

Pedoman penulisan untuk utilities sama persis seperti materi pembelajaran dasar _(basic)_ dengan pengecualian, penamaan variabel bebas asalkan tetap konsisten diseluruh satu _utility_.

### Pedoman Penulisan Lainnya untuk Algoritma (_Algorithm_)

Salah satu perbedaan yang mencolok untuk penulisan pada Algorithm adalah selain harus mengikuti standard PSR-12, penulisannya juga menggunakan teknik paradigma pemrograman berorientasi objek (OOP) dengan ketentuan sebagai berikut:

- Penamaan variabel dan method menggunakan _camelCase_
- Setiap Algoritma harus berupa _class_ dan menggunakan method
- Penggunaan namespace berlabuh pada direktori `/algorithms/` <br/>
  Contoh: file `algorithms/BackTracking/PathFinding/PathFinding.php` memiliki `namespace BackTracking/PathFinding;`
- Setiap output Algoritma harus dikembalikan nilainya dari sebuah method daripada langsung ditampilkan di halaman. Kecuali method untuk menampilkan visualisasi data, log aktifitas atau hal informatif lainnya.
- Harus disertai keterangan penjelasan kode yang mudah dimengerti

Untuk menginstantiasi kelas algoritmanya, lakukan di file kelasnya secara langsung (instantiasi dibawah kelasnya) agar dapat dijalankan saat membuka artikel `README.md`.

## Penggunaan Database

Penggunaan layanan database seringkali dibutuhkan untuk kebanyakan kegunaan. Untuk menjaga konsistensi dan kerapian project repository ini dalam penggunaan database, ada beberapa ketentuan untuk mencapai hal itu, diantaranya:

- Hanya ada satu database untuk melayani keseluruhan project repositori ini.
- Seluruh informasi koneksi database diatur dalam satu file konfigurasi `.env`
> **_Pengecualian:_** Untuk materi basic pengenalan database, tidak perlu memuat konfigurasi .env agar mudah dipahami. Nama database menggunakan "bellshade_php"
- Default nama databasenya adalah `bellshade_php` _(yang dapat diganti di `.env`)_
- Nama tabel mengikuti format `[nomor]_[nama materi]_[nama tabel]`, spasi bisa menggunakan `_` _(underscore)_. 
> **Contoh nama tabel:** `11_database_prosedural_buku` 

Untuk membuat koneksi database, kamu perlu membuat file koneksi sendiri terlebih dahulu di folder yang sedang kamu kerjakan. Kami sudah menyediakan `config.php` pada direktori root `/` untuk memuat seluruh konfigurasi yang tertulis di `.env` _(termasuk informasi database)_. Oleh karena itu, file koneksi kamu harus `require()` ke file `config.php` ini di root `/`.

Untuk lebih mudahnya, kami menyediakan contoh file koneksi database yang dapat kamu gunakan sebagai file koneksi `connect.php`.
```php
<?php

/**
 * Load Konfigurasi ENV
 * -----------------------------------------
 * Untuk memuat konfigurasi yang ada di file `.env`
 * diperlukan untuk memanggil file `config.php` yang ada di root
 * dengan membawa variabel $path_to_root yang berisi path relatif ke direktori root
 */

$path_to_root = '../..';    // Ini adalah jalan path ke root `/` dari folder yang kamu kerjakan. Ganti jika perlu.
require_once $path_to_root . '/config.php';

/**
 * Koneksi ke Database
 * -----------------------------------------
 * Koneksi menggunakan konfigurasi yang
 * telah ditulis di `.env` dan sudah dimuat
 */

$db_host = $_ENV['DB_HOST'];
$db_port = $_ENV['DB_PORT'];
$db_user = $_ENV['DB_USER'];
$db_pass = $_ENV['DB_PASS'];
$db_name = $_ENV['DB_NAME'];

$connection = @mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);

if (mysqli_connect_error()) {
    echo '<pre>';
    echo 'Tidak dapat terhubung dengan MySQL: ' . mysqli_connect_error(), PHP_EOL;
    echo '-----------------------------------', PHP_EOL;
    echo 'Database host: ' . $db_host, PHP_EOL;
    echo 'Database port: ' . $db_port, PHP_EOL;
    echo 'Database user: ' . $db_user, PHP_EOL;
    echo 'Database name: ' . $db_name, PHP_EOL;
    echo '</pre>';
    die;
}

```

## Percobaan (_Testing_)

Testing hanya dilakukan untuk Algorithm dan tidak diperlukan untuk Basic Learning ataupun Utility. Testing algoritma diperlukan agar suatu algoritma berjalan sesuai dengan yang di harapkan. Kami juga menerapkan unit testing ini pada _Continuous Integration_ kami agar selalu dijaga keandalan kodenya.

Kami menggunakan [PHPUnit](https://phpunit.de/documentation.html) sebagai Unit Testing untuk setiap algoritma yang Kamu buat. Seluruh file testing berada dalam folder `/tests`.

Untuk membuat unit testing, Kamu perlu membuat kelas turunan `TestCase`. Awali penamaan sebuah method dengan _prefix_ `testXxx()`.
Berikut template unit testing yang dapat Kamu gunakan

```php
require_once 'algorithms/autoload.php';

use PHPUnit\Framework\TestCase;

class KelasTestKamu extends TestCase
{
    public function testMethodAnda()
    {
      # Lakukan Test Kamu disini
    }
}
```

Untuk menjalankan seluruh tests, gunakan command:

```bash
composer phpunit
```

Untuk memaksimalkan kelancaran workflow, pastikan Kamu melakukan testing setiap kali Kamu membuat algoritma sebelum mengajukan _*Pull Request*_.

## Pull Request

**_Pull Request_ yang Baik**

- Lakukan fork pada repository kami
- usahakan Kamu membuat branch baru

```bash
git checkout -b <branch_name>
git add .
git commit -m "add: menambahkan algoritma baru"
```

- Lakukan push ke branch Kamu dan kemudian *open *pull request\*\*

**Saran Pesan Commit:**

- `add` Untuk menambah algoritma atau tambahan lainnya
- `fix` Untuk mengubah algoritma yang sudah ada atau memperbaiki
- `docs` Untuk mengubah atau membuat dokumentasi
- `style` Untuk mengubah atau memperbaiki style kode untuk contohnya bisa dilihat pada commit yang diatas
- `feat` Untuk fitur baru atau _enhancement_

**_Pull Request_ `merged` jika:**

- Mengikuti standar dan arahan dari `CONTRIBUTING.md`
- Lulus test dan cek dari beberapa test yang sudah kami siapkan

**Tambahan:**

- Jika ada kendala atau masalah dalam _pull request_, Kamu bisa laporkan masalah pada [issue](https://github.com/bellshade/PHP/issues)
- Jika ada tes yang tidak lewat atau gagal, kami akan mengecek kembali perubahan.

Untuk _pull request_ kami sarankan untuk menjelaskan secara detail yang Kamu ubah atau tambahkan, dan bersikap sopan, serta selalu berterima kasih, itu salah satu bentuk tata krama yang baik terhadap sesama contributor dan programmer lainnya.

Terima kasih sudah berkontribusi di **Bellshade/PHP**

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

Kami sangat senang Anda dapat ikut berkontribusi dalam implementasi algoritma, struktur data atau memperbaiki error serta merilis implementasi materi basic learning PHP. Semua boleh ikut berkontribusi walaupun hal kecil dengan ketentuan sebagai berikut:

- Hasil pekerjaan Anda adalah buatan Anda sendiri dan tidak ada hak cipta dari orang lain, jika kami menemukan kesamaan maka kami tidak `merged`.
- Hasil kerja Anda akan berlisensi [MIT](LICENSE) ketika permintaan pull Anda sudah di merged
- Hasil kerja Anda wajib mengikuti standar dan style koding dari kami (lihat bagian [Standar penulisan](#standar-penulisan))
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
 ┃ ┃ ┣ 📜index.php
 ┃ ┃ ┗ 📜README.md
```

> Artikel materi ditulis pada `README.md` <br/>
> `index.php` adalah halaman navigasi dan yang menampilkan `README.md` di lokal webserver, kamu dapat mencopy dari folder materi lain


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
 ┃ ┃ ┃ ┣ 📜index.php
 ┃ ┃ ┃ ┣ 📜FileAlgoritmanya.php
 ┃ ┃ ┃ ┗ 📜README.md
 ┃ ┃ ┣ 📜index.php
 ┃ ┃ ┗ 📜README.md
```
> Artikel penjelasan algoritma ditulis pada `README.md` <br/>
> `index.php` adalah halaman navigasi dan yang menampilkan `README.md` di lokal webserver, kamu dapat mencopy dari folder algoritma / kategori algoritma lain

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
 ┃ ┃ ┃ ┣ 📜index.php
 ┃ ┃ ┃ ┣ 📜demo_utility_1.php
 ┃ ┃ ┃ ┣ 📜demo_utility_2.php
 ┃ ┃ ┃ ┣ 📜 .....
 ┃ ┃ ┃ ┗ 📜README.md
 ┃ ┃ ┣ 📜index.php
 ┃ ┃ ┗ 📜README.md
 ```
> Artikel penjelasan utility ditulis pada `README.md` <br/>
> `index.php` adalah halaman navigasi dan yang menampilkan `README.md` di lokal webserver, kamu dapat mencopynya dari folder utility / kategori utility lain

## Standar Penulisan

### Gaya Penulisan PSR-12

Kami menggunakan standar penulisan PSR-12 untuk seluruh implementasi kode Basics & Algorithms. PSR-12 adalah rekomendasi standar PHP untuk gaya dan konvensi penulisan kode. [lihat dokumentasi resmi PSR-12](https://www.php-fig.org/psr/psr-12/)

Untuk _integration_ nya, kami menggunakan [CodeSniffer](https://packagist.org/packages/squizlabs/php_codesniffer) untuk mengecek apakah seluruh kode sudah mengikuti standar gaya penulisan PSR-12.
Package CodeSniffer ini sudah termasuk dalam _composer.json_ untuk Anda gunakan di lokal

Setelah Anda clone repository ini, lakukan instalasi package composer terlebih dahulu

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

Jika menggunakan `phpcbf` masih belum memperbaiki seluruh kesalahan yang ada, Anda harus memperbaikinya secara manual. <br/>Kami sangat sarankan untuk Anda jika menggunakan software text editor Visual Studio Code, Anda dapat menggunakan ekstensi bernama [PHPCS](https://marketplace.visualstudio.com/items?itemName=ikappas.phpcs). Dengan ekstensi itu, Visual Studio Code akan menunjukkan letak kesalahannya jika Anda melakukan kesalahan penulisan.

Pastikan Anda sudah melakukan pengecekan ini sebelum mengajukan _*Pull Request*_ karena ini termasuk salah satu workflow yang dijalankan secara otomatis oleh kami saat Anda mengajukan _*Pull Request*_

### Pedoman Penulisan Lainnya untuk Pembelajaran Dasar (_Basic Learning_)

Selain menggunakan gaya penulisan PSR-12 untuk implementasi kode pada Basic Learning. Ada ketentuan konsistensi yang harus Anda terapkan yaitu:

- Setiap materi pembelajaran berada pada folder tersendiri yang dinamai dengan materi yang berkaitan
- Folder materi memiliki penomoran diawal sebagai _prefix_
- Artikel penjelasan ditulis di `README.md` pada setiap folder materi. jadi kamu perlu membuat `README.md`nya
- Agar mempunyai navigasi, cukup copy saja file `index.php` dari folder materi lain ke folder materi kamu
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

## Percobaan (_Testing_)

Testing hanya dilakukan untuk Algorithm dan tidak diperlukan untuk Basic Learning ataupun Utility. Testing algoritma diperlukan agar suatu algoritma berjalan sesuai dengan yang di harapkan. Kami juga menerapkan unit testing ini pada _Continuous Integration_ kami agar selalu dijaga keandalan kodenya.

Kami menggunakan [PHPUnit](https://phpunit.de/documentation.html) sebagai Unit Testing untuk setiap algoritma yang Anda buat. Seluruh file testing berada dalam folder `/tests`.

Untuk membuat unit testing, Anda perlu membuat kelas turunan `TestCase`. Awali penamaan sebuah method dengan _prefix_ `testXxx()`.
Berikut template unit testing yang dapat Anda gunakan

```php
require_once 'algorithms/autoload.php';

use PHPUnit\Framework\TestCase;

class KelasTestAnda extends TestCase
{
    public function testMethodAnda()
    {
      # Lakukan Test Anda disini
    }
}
```

Untuk menjalankan seluruh tests, gunakan command:

```bash
composer phpunit
```

Untuk memaksimalkan kelancaran workflow, pastikan Anda melakukan testing setiap kali Anda membuat algoritma sebelum mengajukan _*Pull Request*_.

## Pull Request

**_Pull Request_ yang Baik**

- Lakukan fork pada repository kami
- usahakan Anda membuat branch baru

```bash
git checkout -b <branch_name>
git add .
git commit -m "add: menambahkan algoritma baru"
```

- Lakukan push ke branch Anda dan kemudian *open *pull request\*\*

**Saran Pesan Commit:**

- `add` Untuk menambah algoritma atau tambahan lainnya
- `fix` Untuk mengubah algoritma yang sudah ada atau memperbaiki
- `docs` Untuk mengubah atau membuat dokumentasi
- `style` Untuk mengubah atau memperbaiki style kode untuk contohnya bisa dilihat pada commit yang diatas

**_Pull Request_ `merged` jika:**

- Mengikuti standar dan arahan dari `CONTRIBUTING.md`
- Lulus test dan cek dari beberapa test yang sudah kami siapkan

**Tambahan:**

- Jika ada kendala atau masalah dalam _pull request_, Anda bisa laporkan masalah pada [issue](https://github.com/bellshade/PHP/issues)
- Jika ada tes yang tidak lewat atau gagal, kami akan mengecek kembali perubahan.

Untuk _pull request_ kami sarankan untuk menjelaskan secara detail yang Anda ubah atau tambahkan, dan bersikap sopan, serta selalu berterima kasih, itu salah satu bentuk tata krama yang baik terhadap sesama contributor dan programmer lainnya.

Terima kasih sudah berkontribusi di **Bellshade/PHP**

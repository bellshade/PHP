# Contributing

## Contributor

Kami sangat senang anda telah ikut berkontribusi dalam implementasi algoritma, struktur data atau memperbaiki error serta merilis implementasi materi basic learning PHP. Semua boleh ikut berkontribusi walaupun hal kecil dengan ketentuan sebagai berikut:

- hasil pekerjaan anda adalah buatan anda sendiri dan tidak ada hak cipta dari orang lain, jika kami menemukan kesamaan maka kami tidak `merged`.
- hasil kerja anda akan berlisensi [MIT](LICENSE) ketika permintaan pull anda sudah di merged
- hasil kerja anda wajib mengikuti standar dan style koding dari kami (lihat bagian [Standar penulisan](#standar-penulisan))
- jika dibutuhkan, hanya gunakan library package dari composer, sebelumnya silahkan diskusi di [issue](https://github.com/bellshade/PHP/issues)




## Kategori yang ada

### Basic Learning

Basic learning adalah kumpulan implementasi kode materi untuk pemrograman PHP. Dikemas dengan keterangan kode yang mudah di mengerti sehingga bisa dijadikan referensi untuk kalian yang belajar pemrograman PHP.
> Semua implementasi kode untuk Basic Learning bisa ditemukan di `/basics`  

### Algorithm

Algoritma adalah langkah-langkah untuk menyelesaikan suatu pekerjaan dimana terdiri dari 3 bagian utama, yaitu:

- Input/masukan, sebelum menjalankan sebuah algoritma maka hal yang pertama harus dilakukan adalah menerima masukan, input dapat berasal dari pengguna ataupun dari langkah sebelumnya.
- Proses, bagian utama dari algoritma yang melakukan pengolahan input yang akan menghasilkan output.
- Output/keluaran, output adalah hasil dari bagian proses, output ini juga bisa digunakan untuk langkah selanjutnya (jika masih ada).

Algoritma harus dikemas sedemikian rupa sehingga memudahkan pembaca untuk memasukkannya ke dalam program yang lebih besar.

Algoritma harus memiliki:

- memiliki nama _class_ dan fungsi intuitif yang memperjelas tujuannya bagi pembaca
- fleksibel untuk mengambil nilai input yang berbeda
- memiliki docstrings dengan penjelasan yang jelas dan/atau URL ke materi sumber
- memiliki unit testing yang terdapat pada direktori `/algorithms/tests`
- gunakan hasil kembalian / _return_ daripada langsung mencetak ke layar

> Semua implementasi kode untuk Algorithm bisa ditemukan di `/algorithms` 


## Standar penulisan

### Gaya penulisan PSR-12

Kami menggunakan standar penulisan PSR-12 untuk seluruh implementasi kode Basics & Algorithms. PSR-12 adalah rekomendasi standar PHP untuk gaya dan konvensi penulisan kode 
[lihat dokumentasi resmi PSR-12](https://www.php-fig.org/psr/psr-12/)

Untuk _integration_ nya, kami menggunakan [CodeSniffer](https://packagist.org/packages/squizlabs/php_codesniffer) untuk mengecek apakah seluruh kode sudah mengikuti standar gaya penulisan PSR-12. 
Package CodeSniffer ini sudah termasuk dalam _composer.json_ untuk anda gunakan di lokal 

Setelah anda clone repository ini, lakukan instalasi package composer terlebih dahulu
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
Jika menggunakan `phpcbf` masih belum memperbaiki seluruh kesalahan yang ada, anda harus memperbaikinya secara manual. <br/>Kami sangat sarankan untuk anda menggunakan ekstensi bernama [PHPCS](https://marketplace.visualstudio.com/items?itemName=ikappas.phpcs). Dengan ekstensi itu, visual studio code akan menunjukkan letak kesalahannya jika anda melakukan kesalahan penulisannya

Pastikan anda sudah melakukan pengecekan ini sebelum mengajukan _Pull Request_ karena ini termasuk salah satu workflow yang dijalankan secara otomatis oleh Github Action saat anda mengajukan _Pull Request_

### Pedoman penulisan lainnya untuk Basic Learning

Selain menggunakan gaya penulisan PSR-12 untuk implementasi kode pada Basic Learning. Ada ketentuan standardisasi yang harus anda terapkan yaitu:
- Setiap file harus berada pada folder kategori sesuai dengan materi yang di implementasikan.<br/>Contoh: file _array_basic.php_ harus berada pada folder _array_ 
- Setiap materi harus memiliki penjelasan yang mudah dimengerti
- Penamaan variabel dan fungsi menggunakan `snake_case`

### Pedoman penulisan lainnya untuk Algorithm

Salah satu perbedaan yang mencolok untuk penulisan pada Algorithm adalah selain harus mengikuti standard PSR-12, penulisannya juga menggunakan teknik paradigma pemrograman berorientasi objek (OOP) dengan ketentuan sebagai berikut:
- Penamaan variabel dan method menggunakan _camelCase_
- Setiap Algoritma harus berupa _class_ dan menggunakan method
- Setiap _class_ Algoritma berada didalam folder kategori yang berkaitan. <br/>Contoh: _PathFinding.php_ berada didalam folder _BackTracking_ dst.
- Penggunaan namespace berlabuh pada direktori `/algorithms/` <br/>
Contoh: file `algorithms/BackTracking/PathFinding.php` memiliki `namespace BackTracking;`
- Setiap output Algoritma harus dikembalikan nilainya dari sebuah method daripada langsung ditampilkan di halaman.
- Harus disertai keterangan penjelasan kode yang mudah dimengerti

Untuk menjalankan _class_ algoritma yang sudah dibuat, lakukan instantiasi _class_ pada `algorithms/index.php`. Seluruh algoritma dijalankan pada file itu, jadi pastikan anda juga memberikan keterangan kode yang cukup jelas.

Secara default, `index.php` ini menggunakan file `autoload.php` yang disediakan untuk melakukan pemanggilan `class` terinstatiasi secara otomatis berdasarkan namespacenya. 


## Testing

Testing hanya dilakukan untuk Algorithm dan tidak diperlukan untuk Basic Learning. Testing diperlukan agar suatu algoritma berjalan sesuai dengan yang di harapkan. Kami juga menerapkan unit testing ini pada GitHub Actions agar selalu dijaga keandalan kodenya.


**Implementasi Unit Testing coming soon**

Anda dapat melewati langkah ini sampai workflow Unit Testing berjalan


## Pull Request

**Pull request yang baik**

- lakukan fork pada repository kami
- setelah melakukan fork anda dibebaskan untuk mengubah atau menambah algoritma
  - untuk pull request merubah diusahakan anda menerapkan algoritma yang lebih baik dan lebih mudah
- setelah merubah,menambah, atau perbaikan dokumentasi, usahakan anda membuat branch baru

```bash
git checkout -b <branch_name>
git add .
git commit -m "add: menambahkan algoritma baru"
```

- lakukan push ke branch anda dan kemudian open pull request

**saran pesan commit**

- `add` untuk menambah algoritma atau tambahan lainnya
- `fix` untuk mengubah algoritma yang sudah ada atau memperbaiki
- `docs` untuk mengubah atau membuat dokumentasi
- `style` untuk mengubah atau memperbaiki style kode untuk contohnya bisa dilihat pada commit yang diatas

pull request `merged` jika:

- mengikuti standar dan arahan dari `CONTRIBUTING.md`
- lulus test dan cek dari beberapa test yang sudah kami siapkan

**tambahan**

- jika ada kendala atau masalah dalam pull request, anda bisa laporkan masalah pada [issue](https://github.com/bellshade/PHP/issues)
- jika ada test yang tidak lewat atau gagal, kami akan mengecek kembali perubahan.

untuk pull request kami sarankan untuk menjelaskan secara detail yang anda ubah atau tambahkan, dan bersikap sopan, serta selalu berterima kasih, itu salah satu bentuk tata krama yang baik terhadap sesama contributor dan programmer lainnya. Terima kasih sudah berkontribusi di **Bellshade/PHP**
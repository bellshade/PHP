# 📂 SESSION dan COOKIE

Hai apa kabar? 👋🏻 Selamat datang kembali di repositori PHP.

Oke, sebelumnya kamu telah mempelajari materi tentang [Penanganan File](../10_file_handling), bagaimana seru, kan? Kami harap kamu bisa memahami dan mengimplementasikannya dengan baik.

Oke, selanjutnya pada kesempatan kali ini kita akan membahas tentang dua variabel *superglobal*, yaitu *Session* dan *Cookie* dan pada materi kali ini, kami harap kamu dapat:

- Membuat Session dan Cookie
- Mengubah Session dan Cookie, serta
- Menghapus Session dan Cookie

## ⚡ Daftar Isi

- [✨ SESSION](#-session)
  - [📝 Membuat Session](#-membuat-session)
  - [📝 Mengambil Session](#-mengambil-session)
    - [Contoh 1 - Mengambil/Menampilkan Session di Satu Halaman yang Sama](#contoh-1---mengambilmenampilkan-session-di-satu-halaman-yang-sama)
    - [Contoh 2 - Mengambil/Menampilkan Session di Halaman yang Berbeda](#contoh-2---mengambilmenampilkan-session-di-halaman-yang-berbeda)
  - [📝 Mengubah Session](#-mengubah-session)
  - [📝 Menghapus Session](#-menghapus-session)
    - [Contoh 1 - Menghapus Semua Sesi](#contoh-1---menghapus-semua-sesi)
    - [Contoh 2 - Menghapus Sesi Tertentu](#contoh-2---menghapus-sesi-tertentu)
- [✨ COOKIE](#-cookie)
  - [📝 Membuat Cookie](#-membuat-cookie)
  - [📝 Mengubah Session](#-mengubah-session-1)
  - [📝 Menghapus Cookie](#-menghapus-cookie)

## ✨ SESSION

Sebelum lanjut ke **cara membuat session**, terlebih dahulu mari kita kenalan dulu dengan Session, jadi;

> 🤔 Apa itu session?

Nah *Session* atau **sesi adalah** salah satu cara untuk menyimpan informasi (ke dalam variabel) untuk digunakan di beberapa halaman yang informasinya tidak disimpan di komputer pengguna.

Ilustrasinya seperti saat kamu menggunakan sebuah aplikasi, kamu membukanya, lalu melakukan beberapa perubahan, dan kemudian menutupnya. Nah session sangat mirip dengan itu.

Jadi, session menyimpan informasi tentang sasuatu yang tersedia untuk semua halaman dalam satu aplikasi, baik web atau lainnya, dan sesi akan hilang/terhapus saat aplikasi itu di tutup.

> **📌 CATATAN :**
>
> Perlu kamu ingat, *session* tidak cocok digunakan sebagai tempat penyimpanan permanen, jika kamu ingin tempat penyimpanan yang permanen, maka kamu bisa menggunakan database.

Oke selanjutnya.

### 📝 Membuat Session

Nah, untuk membuat *session*, pertama-tama kamu perlu menjalankan web server milikmu, seperti **XAMPP** atau web server lainnya. Kalau belum tau caranya, kamu bisa melihatnya [di sini](../1_hello_world/README.md#2-hello-world-2_hello_worldphp)

Oke, dalam bahasa pemrograman PHP, *session* disimpan ke dalam variabel *supergrlobal* yaitu `$_SESSION` dalam bentuk [Array Asosiatif](../7_array_mendalam#2-array-asosiatif) yang mana terdapat *key* dan *value*

Jadi, untuk membuat session dalam bahasa pemrograman PHP cukup mudah, silakan perhatikan contoh berikut:

```php
<?php

session_start(); // Memulai session

// Membuat session
$_SESSION["nama"] = "Feri Irawan";
$_SESSION['tim'] = 'PHP';

echo $_SESSION["nama"]; // Hasil: Feri Irawan
echo $_SESSION["tim"]; // Hasil: PHP
```

[![Demo](https://img.shields.io/static/v1?&label=Lihat%20Demo&message=%3e&color)](1_set_session.php#L8-L23)

Nah, dengan melihat contoh di atas, maka dapat diketahui bahwa cara membuat session dapat dilakukan dengan:

- Session selalu dimulai dengan fungsi `session_start()`
- Nilai session disimpan ke dalam variabel `$_SESSION`

> **📌 CATATAN :**
>
> Fungsi `session_start()` HARUS selalu berada tepat setelah tag `<?php`. Sebelum tag HTML apapun.

Oke, lanjut!

### 📝 Mengambil Session

Nah, seperti yang telah di jelaskan di atas bahwa, session dapat digunakan di semua halaman dalam satu aplikasi. Maka selanjutnya kita akan mempelajari bagaimana cara mengambil informasi yang tersimpan pada session **di satu halaman yang sama** dan **di halaman yang berbeda**.

> 🤔 Bagimana cara mengambil data dari session?

Untuk mengambil data/informasi yang berada di sesi (*session*) cukup mudah, silakan perhatikan kedua contoh di bawah ini.

#### Contoh 1 - Mengambil/Menampilkan Session di Satu Halaman yang Sama

Nah, kita misalkan di sini kita punya file bernama `1_set_session.php` dengan isi seperti berikut ini.

```php
<?php

session_start(); // Memulai session

// Membuat session
$_SESSION["nama"] = "Feri Irawan";
$_SESSION["tim"] = "PHP";

// Menampilkan session
echo $_SESSION["nama"] . PHP_EOL;
echo $_SESSION["tim"];
```

> `PHP_EOL` berfungsi untuk membuat baris baris baru saat menampilkan hasil

Nah selanjutnya, simpan *file* tersebut, kemudian buka di browser (jangan lupa aktifkan web server), maka kamu akan melihat hasil.

```plaintext
Feri Irawan
PHP
```

[![Demo](https://img.shields.io/static/v1?&label=Lihat%20Demo&message=%3e&color)](2_get_session.php#L27-L32)

Jadi, untuk mengambil atau menampilkan data yang ada di *session* pada satu halaman yang sama bisa dilakukan dengan:

- Memulai *session* dengan fungsi `session_start()`
- Membuat *session*, dan
- Menampilkan *session* menggunakan fungsi `echo` atau fungsi lainnya

#### Contoh 2 - Mengambil/Menampilkan Session di Halaman yang Berbeda

Nah di atas kamu sudah tau cara membuat dan menampilkan data yang tersimpan di *session* di satu halaman yang sama, yaitu di file `1_set_session.php`.

Selanjutnya, mari kita coba menampilkan data *session* yang berada di file `1_set_session.php` di halaman lain atau file yang lain (misal: `2_get_session.php`).

Oke, mari kita buat file bernama `2_get_session.php` yang berisi skrip PHP berikut, kemudian simpan.

```php
<?php

session_start(); // Memulai session

// Menampilkan session
echo $_SESSION["nama"];
```

Setelah itu, coba buka kembali file `1_set_session.php` lalu file `2_get_session.php` di browser. Alhasil kamu akan melihat teks berikut:

```plaintext
Feri irawan
```

Jadi dengan melihat contoh di atas, kamu dapat ketahui bahwa untuk manampilkan informasi yang sudah dibuat di halaman lain, lalu ditampilkan di halaman lain pula dapat dilakkukan seperti berikut:

- *Session* sudah dibuat di halaman/file lain (`1_set_session.php`)
- Setelah itu memulai *session* dengan fungsi `session_start()` di halaman yang akan menampilkan data *session* (`2_get_session.php`)
- Kemudian menggunakan fungsi `echo` atau fungsi lainnya untuk menampilkan data.

Nah, cukup mudah bukan?

### 📝 Mengubah Session

Nah, karna session disimpan dalam bentuk [Array Asosiatif](../7_array_mendalam#2-array-asosiatif),maka untuk mengubah data yang berada di sesi bisa dilakukan seperti halnya dengan mengubah data pada [Array Asosiatif](../7_array_mendalam#2-array-asosiatif), Contoh:

```php
<?php

session_start(); // Memulai session

// Membuat session
$_SESSION["judul_materi"] = "SESSION dan COOKIE";

// Mengubah session
$_SESSION["judul_materi"] = "Hello World!";

echo $_SESSION["judul_materi"]; // Hasil: Hello World
```

[![Demo](https://img.shields.io/static/v1?&label=Lihat%20Demo&message=%3e&color)](3_update_session.php#L27-L42)

Nah dengan melihat contoh di atas dapat diketahui bahwa, untuk mengubah *session* dapat dilakukan dengan cara:

- Memulai *session*
- Membuat *session* (jika sebelumnnya *session* masih kosong)
- Lalu membuat *session* dengan *key* yang sama dengan *key* *session* sebelumnnya.

> Mengubah session sama halnya dengan menimpa nilai variabel sebelumnya dengan nilai lainnya

### 📝 Menghapus Session

Menghapus session cukup mudah, kamu dapat menggunakan beberapa fungsi yang sudah disediakan oleh PHP, coba perhatikan kedua contoh berikut:

#### Contoh 1 - Menghapus Semua Sesi

```php
<?php

session_start(); // Memulai session

// Menghapus session
session_unset();
session_destroy();
```

[![Demo](https://img.shields.io/static/v1?&label=Lihat%20Demo&message=%3e&color)](4_delete_session.php#L48-L65)

Dengan begitu, semua data yang tersimpan dalam session akan dihapus (variabel `$_SESSION` dikosongkan)

#### Contoh 2 - Menghapus Sesi Tertentu

```php
<?php

session_start(); // Memulai session

// Menghapus session
unset($_SESSION['judul_materi']);
```

[![Demo](https://img.shields.io/static/v1?&label=Lihat%20Demo&message=%3e&color)](4_delete_session.php#L28-L44)

Dengan begitu, session dengan key `judul_materi` akan dihapus, kecuali session yang lain

Nah jadi seperti itulah cara membuat, mengubah, dan menghapus session.

Oke, selanjutnya.

## ✨ COOKIE

Langsung saja.

> 🤔 Apa itu *cookie?*

Cookie bukanlah seseorang yang handal dalam memasak *hehe*.

Tetapi, dalam bahasa pemrograman seperti PHP, **Cookie adalah** file kecil yang disematkan oleh server di komputer pengguna. Setiap kali komputer yang sama meminta halaman dengan browser, maka cookie juga akan dikirim lalu disematkan di browser tersebut.

Cookie bisa digunakan di halaman manapun seperti session.

Mungkin di beberapa web atau aplikasi kamu pernah melihat fitur bernama "Ingat saya" yang biasanya digunakan untuk mengingat data yang di inputkan pengguna saat login ke aplikasi tersebut.

Tujuannya agar saat pengguna menggunakan aplikasi itu lagi di lain waktu, pengguna sudah tidak pelu masuk dengan akun mereka lagi, akan tetapi langkah tersebut langsung dilewati atau dilompati oleh aplikasi. Nah, dengan *cookie*, kamu bisa membuat fitur seperti itu diaplikasi/web milikmu *lho*

> Jadi, bagaimana cara membuat *cookie* di PHP?

### 📝 Membuat Cookie

Dalam bahasa pemrograman PHP bentuk data pada *cookie* sama seperti *session*, yaitu data disimpan dalam bentuk [Array Asosiatif](../7_array_mendalam#2-array-asosiatif)

Untuk membuat cookie, PHP telah menyediakan fungsi `setcookie()` dan kamu bisa menggunakannya, berikut struktur dari fungsi ini:

```php
setcookie(
    string $name,               // Nama cookie
    string $value    = "",      // Nilai cookie
    int    $expires  = 0,       // Tanggal kedaluarsa (timestamp)
    string $path     = "",      // Lokasi cookie itu berlaku
    string $domain   = "",      // Domain cookie itu berlaku
    bool   $secure   = false,   // Koneksi cookie itu berlaku (HTTP/HTTPS)
    bool   $httponly = false    // Apakah cookie hanya diperbolehkan pada koneksi HTTP saja?
): bool                         // Fungsi ini akan mengembalikan boolean
```

Keterangan:

- `string` artinya parameter tersebut harus di isi tipe data *string*
- `int` artinya parameter tersebut harus di isi *integer*
- `bool` artinya parameter tersebut harus di isi *boolean*

Nah, dengan melihat struktur fungsi `setcookie()` di atas, maka kita tahu bahwa cookie memiliki umur atau tanggal kedaluarsa. Jadi, cookie yang tidak diset waktu kedaluarsanya akan bertahan pada saat itu juga.

Contoh:

```php
<?php

// Membuat cookie yang bertahan 0 jam
setcookie('nama', 'Feri Irawan');

// Membuat cookie yang bertahan 1 jam
// Cookie ini berlaku untuk semua halaman
setcookie('tim', 'PHP', time() + 3600);

// Membuat cookie yang bertahan 1 jam
// Cookie ini hanya berlaku di direktori `/basics/11_cookie_dan_session`
setcookie('umur', '17', time() + 3600, "/basics/11_cookie_dan_session");

// Membuat cookie yang bertahan 1 jam
// Cookie ini hanya berlaku di direktori `/basics/11_cookie_dan_session` di domain http://localhost atau https://localhost
setcookie('buah_manis', 'Rambutan', time() + 3600, "/basics/11_cookie_dan_session", "localhost");

// Membuat cookie yang bertahan 1 jam
// Cookie ini hanya berlaku di direktori `/basics/11_cookie_dan_session` di domain https://localhost dengan koneksi yang aman (HTTPS)
setcookie('buah_masam', 'Belimbing', time() + 3600, "/basics/11_cookie_dan_session", "localhost", true);

// Membuat cookie yang bertahan 1 jam
// Cookie ini hanya berlaku di direktori `/basics/11_cookie_dan_session` di domain http://localhost dengan protocol HTTP saja
setcookie('buah_pahit', 'Pare', time() + 3600, "/basics/11_cookie_dan_session", "localhost", true, true);

echo $_COOKIE["nama"];       // Hasil: Feri Irawan
echo $_COOKIE["tim"];        // Hasil: PHP
echo $_COOKIE["umur"];       // Hasil: 17
echo $_COOKIE["buah_manis"]; // Hasil: Rambutan
echo $_COOKIE["buah_masam"]; // Hasil: Belimbing
echo $_COOKIE["buah_pahit"]; // Hasil: Pare
```

[![Demo](https://img.shields.io/static/v1?&label=Lihat%20Demo&message=%3e&color)](5_set_cookie.php#L10-L21)

Nah jika skrip tersebut dijalankan di browser (seperti yang ada di Demo di atas) Kemudian kamu melakukan ***Inspect Element*** dan membuka tab  ***Application > Cookies***, lalu **memilih salah satu domain** yang disediakan, maka kamu akan melihat daftar cookie di atas telah berhasil disimpan di browsermu.

![Daftar session yang berhasil disematkan](https://user-images.githubusercontent.com/57158078/140638566-8bdce4a1-619e-4d4e-997d-b948b3034888.jpg)

Bagaimana cukup mudah, bukan?

Oke, selanjutnya.

### 📝 Mengubah Session

Cara mengubah cookie mirip dengan membuat cookie, kamu hanya perlu melakukannya seperti berikut:

```php
<?php

// Mengubah nilai cookie dengan key `buah_manis`
// Yang awalnya adalah:
// setcookie('buah_manis', 'Rambutan', time() + 3600, "/basics/11_cookie_dan_session", "localhost");

// Menjadi
// Cookie dengan nilai semangka, bertahan selama 30 menit
setcookie("buah_manis", "Semangka", time()+ 1800);

echo $_COOKIE["buah_manis"]; // Hasil: Semangka
```

[![Demo](https://img.shields.io/static/v1?&label=Lihat%20Demo&message=%3e&color)](6_update_cookie.php#L10-L21)

Nah, dengan melihat contoh di atas dapat kamu ketahui bahwa, cara mengubah cookie dapat dilakukan seperti membuat cookie itu sendiri, namun dengan nilai yang berbeda tentunya.

### 📝 Menghapus Cookie

Cara yang bisa dilakukan untuk menghapus data cookie yang tersimpan adalah dengan **menyetel nilai dari cookie itu sendiri menjadi *string* kosong** dan **menyetel waktu kedaluarsa menjadi `0` atau kurang dari `0`**.

Contoh:

```php
<?php

// Menyetel nilai cookie jadi string kosong
// Dan menyetel waktu kedaluarsa jadi (-3600) (kedaluarsa 1 jam yang lalu)
setcookie("buah_masam", "", time() - 3600);
```

[![Demo](https://img.shields.io/static/v1?&label=Lihat%20Demo&message=%3e&color)](7_delete_cookie.php)

Sangat mudah bukan?

Oke sepertinya materi tentang kedua variabel *superglobal*, yaitu SESSION dan COOKIE cukup sampai di sini. Semoga penjelasan di atas mudah untuk dibaca dan dipahami.

> Agar lebih mahir, sering-seringlah mengimplementasikan skrip-skrip yang ada di atas. Jika ada yg tidak dimengerti kamu bisa bergabung di Server Discord WPU untuk menanyakannya, atau kamu bisa googling juga untuk itu.

| Sebelumnya                                 | Berikutnya                                                       |
| ------------------------------------------ | ---------------------------------------------------------------- |
| [10. Penanganan File](../10_file_handling) | [12. Database Dasar Prosedural](../12_database_dasar_prosedural) |

Terima kasih, dan tetap semangat!

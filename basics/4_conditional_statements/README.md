# Pengkondisian

Pengkondisian adalah sebuah cara untuk menjalankan kumpulan baris kode yang berbeda berdasarkan dengan kondisi yang berbeda pula.

Seperti halnya bahasa pemrograman lainnya, materi pengkondisian bisa dibilang "wajib" untuk dipelajari, mengingat ada berbagai macam kasus dunia nyata yang membutuhkan pengkondisian untuk menyelesaikannya. Terdapat 2 cara untuk melakukan pengkondisian dalam PHP, yaitu `if...elseif...else` dan `switch`.

## Daftar Isi

- [Pengkondisian](#pengkondisian)
  - [Daftar Isi](#daftar-isi)
  - [1. If, Else If dan Else (*1_if_elseif_else.php*)](#1-if-else-if-dan-else-1_if_elseif_elsephp)
    - [Cara penggunaan If, Else If, dan Else](#cara-penggunaan-if-else-if-dan-else)
      - [1. If](#1-if)
      - [2. Else](#2-else)
      - [3. Else If](#3-else-if)
      - [4. If Else - Shorthand](#4-if-else---shorthand)
  - [2. Switch (*2_switch.php*)](#2-switch-2_switchphp)
    - [Cara penggunaan Switch](#cara-penggunaan-switch)

## 1. If, Else If dan Else ([*1_if_elseif_else.php*](1_if_elseif_else.php))

*If*, *Else If* dan *Else* adalah salah satu cara pengkondisian yang digunakan untuk satu atau lebih kondisi. Cara kerjanya adalah dengan melakukan *check* apakah hasil suatu ekspresi PHP (operasi artimatika, perbandingan, dll.) dinyatakan benar atau salah.

Jika ekspresi tersebut benar, maka PHP akan menghasilkan nilai `true` yang mana kode di dalam blok kode `if` atau `else if` akan dijalankan. Kondisi selanjutnya tidak akan dilakukan proses *check* dikarenakan kondisi saat ini sudah terpenuhi.

Jika ekspresi tersebut salah, maka PHP akan menghasilkan nilai `false` yang mana kode di dalam blok kode `if` atau `else if` tidak akan dijalankan. PHP akan melanjutkan proses *check* ke kondisi selanjutnya (bila ada).

Ada beberapa hal yang harus diperhatikan dalam penggunaan *If*, *Else If*, dan *Else* ini, yakni sebagai berikut:

- `kondisi` dan `kondisi_#` dapat berupa nilai tetap maupun ekspresi.
- `if` dapat dipakai sendiri dan juga bersamaan dengan `else if` dan `else`.
- `else if` dapat dipakai bersamaan dengan `if` dan `else`, tapi tidak dapat dipakai sendiri.
- `else` dapat dipakai bersamaan dengan `if` dan `else if`, tapi tidak dapat dipakai sendiri.
- `if` harus selalu dipakai di bagian awal untuk kondisi pertama, diikuti dengan `else if` dan `else`.
- `else` harus selalu dipakai di bagian akhir dimana kondisi-kondisi sebelumnya tidak terpenuhi.
- `else if` dapat dipakai berulang-ulang.
- `if...else` juga memiliki *shorthand* yang mana akan dijelaskan di bawah.

### Cara penggunaan If, Else If, dan Else

#### 1. If

```php
<?php

if (kondisi) {
  // Lakukan sesuatu di sini jika kondisi terpenuhi
}
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](1_if_elseif_else.php#L17-L44)

#### 2. Else

```php
<?php

if (kondisi) {
  // Lakukan sesuatu di sini jika kondisi pertama terpenuhi
} else {
  // Lakukan sesuatu di sini jika kondisi sebelumnya tidak terpenuhi
}
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](1_if_elseif_else.php#L49-L82)

#### 3. Else If

```php
<?php

if (kondisi_1) {
  // Lakukan sesuatu di sini jika kondisi pertama terpenuhi
} else if (kondisi_2) {
 // Lakukan sesuatu di sini jika kondisi kedua terpenuhi dan kondisi sebelumnya tidak terpenuhi
} else {
 // Lakukan sesuatu di sini jika semua kondisi sebelumnya tidak terpenuhi
}
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](1_if_elseif_else.php#L87-L113)

#### 4. If Else - Shorthand

```php
<?php

(ekspresi ? /* Lakukan sesuatu di sini bila kondisi terpenuhi */ : /* Lakukan sesuatu di sini bila kondisi tidak terpenuhi */)
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](1_if_elseif_else.php#L118-L140)

## 2. Switch ([*2_switch.php*](2_switch.php))

Switch juga merupakan salah satu cara pengkondisian yang bisa digunakan untuk banyak kondisi. Cara kerjanya adalah dengan membandingkan ekspresi PHP (operasi aritmatika, perbandingan, dll.) yang diberikan dengan kondisi-kondisinya.

Berbeda dengan *If*, *Else If*, dan *Else*, `switch` memiliki *keyword* `continue` dan `break` yang digunakan untuk mengatur jalannya kode program setelah suatu kondisi telah terpenuhi.

Jika hasil perbandingannya sama, maka blok kode di dalam *case* kondisinya akan dijalankan, dan akan dilanjutkan ke kondisi berikutnya ataupun berhenti di kondisi saat ini, tergantung *keyword* `continue` atau `break` yang digunakan.

Jika hasil perbandingannya tidak sama, maka blok kode di dalam *case* kondisinya tidak akan dijalankan dan akan dilanjutkan proses perbandingannya ke kondisi selanjutnya.

Hal-hal yang perlu diperhatikan dalam penggunaan `switch` adalah sebagai berikut:

- `kondisi_#` dapat berupa nilai tetap maupun ekspresi.
- Jika kondisi berupa angka, maka tidak perlu dibungkus kutip `''` ataupun kutip dua `""`.
- Jika kondisi berupa huruf, maka harus dibungkus kutip `''` ataupun kutip dua `""`.
- Kondisi `default` hanya digunakan sekali dan harus berada di bagian akhir blok kode `switch`.
- Kondisi `default` akan dijalankan ketika seluruh kondisi-kondisi sebelumnya tidak terpenuhi.
- Ketika *keyword* `break` maupun `continue` tidak dipakai, PHP akan tetap melanjutkan proses perbandingan ekspresi dengan kondisi selanjutnya (seperti memakai *keyword* `continue`).
- *keyword* `break` dan `continue` tidak boleh digunakan secara bersamaan dalam satu kondisi.
- `case` bisa digunakan berulang-ulang.

### Cara penggunaan Switch

```php
<?php

switch (ekspresi) {
 case kondisi_1:
  // Lakukan sesuatu di sini jika ekspresi sama dengan kondisi_1
 break;
 case kondisi_2:
  // Lakukan sesuatu di sini jika ekspresi sama dengan kondisi_2 dan kondisi sebelumnya tidak terpenuhi
 break;
 case kondisi_3:
  // Lakukan sesuatu di sini jika ekspresi sama dengan kondisi_3 dan kondisi sebelumnya tidak terpenuhi
 break;
 default:
  // Lakukan sesuatu di sini jika ekspresi tidak sama dengan semua kondisi diatas
}
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](2_switch.php#L16-L86)

> *__Catatan__:*

- *Untuk contoh kasus setiap materi yang ada di sini, kamu bisa kunjungi file php khusus masing-masing materi dengan cara klik link yang tertera di judul tiap materi atau klik tombol Lihat Contoh di cara penggunaan sintaksnya ya.*
- *Jika kamu melihat materi ini menggunakan local web server, kamu bisa melihat setiap materi dengan cara klik link nama file.php khusus masing-masing materi di Demo Materi paling atas atau di kanan bawah, atau juga bisa klik tombol Lihat Contoh di cara penggunaan sintaksnya ya.*

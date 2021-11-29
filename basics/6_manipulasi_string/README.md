# Manipulasi String

PHP menyediakan berbagai fungsi dan fitur untuk memanipulasi _string_ agar suatu teks dapat sesuai dengan yang kita inginkan. Berikut adalah contoh-contoh dari beberapa fungsi ini

## Daftar Isi

- [1. Mengambil Properti String](#1-mengambil-properti-string)
  - [Menghitung Banyaknya Karakter](#menghitung-banyaknya-karakter)
  - [Menghitung Banyaknya Kata](#menghitung-banyaknya-kata)
  - [Mencari Posisi Kata Dari Sebuah Teks](#mencari-posisi-kata-dari-sebuah-teks)
  - [Menghitung Banyaknya Kata Tertentu](#menghitung-banyaknya-kata-tertentu)
- [2. Pemotongan String](#2-pemotongan-string)
  - [Memotong Dari Kiri, Kanan dan Keduanya](#memotong-dari-kiri-kanan-dan-keduanya)
- [3. Kapitalisasi String](#3-kapitalisasi-string)
  - [Mengubah Karakter Menjadi Huruf Kecil](#mengubah-karakter-menjadi-huruf-kecil)
  - [Mengubah Karakter Menjadi Huruf Besar](#mengubah-karakter-menjadi-huruf-besar)
  - [Mengubah Karakter Pertama Menjadi Huruf Besar](#mengubah-karakter-pertama-menjadi-huruf-besar)
  - [Mengubah Karakter Pertama Setiap Kata Menjadi Huruf Besar](#mengubah-karakter-pertama-setiap-kata-menjadi-huruf-besar)
  - [Mengubah Karakter Pertama Menjadi Huruf Kecil](#mengubah-karakter-pertama-menjadi-huruf-kecil)
- [4. String Array](4-string-array)
  - [implode()](#implode)
  - [explode()](#explode)
  - [str_split()](#str-split)
  - [join()](#join)
- [5. Escape & Formatting](#5-escape-and-formatting)
  - [addslashes](#addslashes)

## 1. Mengambil Properti String

### Menghitung Banyaknya Karakter

Untuk menghitung jumlah karakter yang terdapat dalam sebuah _string_ kamu bisa menggunakan `strlen()`

Berikut contohnya :

```php
<?php

$text = "Ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Jumlah karakter: ' . strlen($text), PHP_EOL;  // Output: 37
```

<a href='1_properti_string.php#menghitung-banyaknya-karakter' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### Menghitung Banyaknya Kata

PHP menyediakan fungsi `str_word_count($text)`. Cukup tambahkan _text_ pada parameternya

```php
<?php

$text = "Ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Jumlah kata: ' . str_word_count($text), PHP_EOL;  // Output: 7
```

<a href='1_properti_string.php#menghitung-banyaknya-kata' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### Mencari Posisi Kata Dari Sebuah Teks

Manfaat yang lebih nyata adalah dapat mengecek suatu teks tertentu ada dalam sebuah string. <br/>
Untuk itu kamu bisa gunakan `strpos($string, $apayangdicari)`

fungsi `strpos()` akan mengembalikan nilai index posisi dari string yang akan dicari.

> _Catatan:_ Index posisi ini mulai dari 0

<p align="center">
    <img src="../../assets/content/basics/5_string_manipulation/strpos.gif">
</p>

**Contoh :**

```php
<?php

$text = "Ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo "Posisi kata 'contoh': " . strpos($text, 'contoh'), PHP_EOL;  // Output: 11
```

<a href='1_properti_string.php#mencari-posisi-dari-sebuah-kata' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### Menghitung Banyaknya Kata Tertentu

Jika kamu ingin menemukan kata tertentu dalam sebuah string, kamu dapat menggunakan `substr_count($string, "yangmaudicari")`

<p align="center">
    <img src="../../assets/content/basics/5_string_manipulation/substr_count.gif">
</p>

**Contoh :**

```php
<?php

$text = "ini adalah ini contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo "Jumlah kata 'ini': " . substr_count($text, 'ini'), PHP_EOL;  // Output: 2
```

<a href='1_properti_string.php#menghitung-banyaknya-kata-tertentu' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

## 2. Pemotongan String

Pemotongan string akan sangat sering sekali digunakan untuk pengembangan web. Misalnya untuk membatasi paragraf, menghapus format tertentu dan lain sebagainya.

### Memotong Dari Kiri, Kanan dan Keduanya

Kamu dapat menggunakan `ltrim($string, 'karakternya')` untuk memotong dari kiri berdasarkan karakter.

<p align="center">
    <img src="../../assets/content/basics/5_string_manipulation/ltrim.gif">
</p>

`rtrim($string, 'karakternya')` untuk memotong dari kanan berdasarkan karakter, dan<br/>

<p align="center">
    <img src="../../assets/content/basics/5_string_manipulation/rtrim.gif">
</p>

`trim($string, 'karakternya')` untuk memotong dari kedua sisi berdasarkan karakter tertentu<br/>

<p align="center">
    <img src="../../assets/content/basics/5_string_manipulation/trim.gif">
</p>

**Contoh :**

```php
<?php

$text = "ini adalah ini contoh teks yang saya buat";
$ltrim = ltrim($text, 'inibuat');
$rtrim = rtrim($text, 'inibuat');
$trim = trim($text, 'inibuat');
```

<a href='2_pemotongan_string.php' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

## 3. Kapitalisasi String

Kapitalisasi _string_ akan sangat dibutuhkan dalam pengembangan web. Contoh kasusnya adalah ketika menyamakan format nama dari _user_ yang sering berbeda beda dan kebutuhkan lainnya.

### Mengubah Karakter Menjadi Huruf Kecil

Untuk mengubah karakter menjadi huruf kecil semua yang berada pada sebuah _string_, kamu bisa menggunakan fungsi `strtolower()`. Berikut contohnya :

```php
<?php

$text = "Ini Adalah coNtoh teKs yAng Saya Buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Setelah Dikecilkan: ' . strtolower($text), PHP_EOL;  // Output: ini adalah contoh teks yang saya buat
```

<a href='3_kapitalisasi_string.php#strtolower' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### Mengubah Karakter Menjadi Huruf Besar

Untuk mengubah karakter menjadi huruf besar semua yang berada pada sebuah string, kamu bisa menggunakan fungsi `strtoupper()`. Berikut contohnya :

```php
<?php

$text = "Ini Adalah coNtoh teKs yAng Saya Buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasilnya: ' . strtoupper($text), PHP_EOL;  // Output: INI ADALAH CONTOH TEKS YANG SAYA BUAT
```

<a href='3_kapitalisasi_string.php#strtoupper' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### Mengubah Karakter Pertama Menjadi Huruf Besar

Untuk mengubah karakter pertama menjadi huruf besar yang berada pada sebuah _string_, kamu bisa menggunakan fungsi `ucfirst()`. Berikut contohnya :

```php
<?php

$text = "ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasilnya: ' . ucfirst($text), PHP_EOL;  // Output: Ini adalah contoh teks yang saya buat
```

<a href='3_kapitalisasi_string.php#ucfirst' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### Mengubah Karakter Pertama Setiap Kata Menjadi Huruf Besar

Untuk mengubah karakter pertama pada setiap kata menjadi huruf besar yang berada pada sebuah string, kamu bisa menggunakan fungsi `ucwords()`. Berikut contohnya :

```php
$text = "ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasilnya: ' . ucwords($text), PHP_EOL;  // Output: Ini Adalah Contoh Teks Yang Saya Buat
```

<a href='3_kapitalisasi_string.php#ucwords' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### Mengubah Karakter Pertama Menjadi Huruf Kecil

Untuk mengubah karakter pertama menjadi huruf kecil yang berada pada sebuah string, kamu bisa menggunakan fungsi `lcfirst()`. Berikut contohnya :

```php
$text = "INI ADALAH CONTOH TEKS YANG SAYA BUAT";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasilnya: ' . lcfirst($text), PHP_EOL;  // Output: iNI ADALAH CONTOH TEKS YANG SAYA BUAT
```

<a href='3_kapitalisasi_string.php#lcfirst' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

## 4. _String Array_

_String array_ merupakan fungsi/fitur yang disediakan oleh PHP untuk melakukan manipulasi `string` menjadi `array` ataupun sebaliknya.

### implode()

Fungsi `implode()` digunakan untuk membuat `array` menjadi `string`.

**Cara Penggunaan :**

`implode($pemisah, $array)`

- `$pemisah` | opsional, bertipe data `string`, memberi pemisah diantara elemen `array`
- `$array` | wajib, bertipe data `array`, `array` yang akan dijadikan `string`

**Contoh :**

```php
<?php

$daftar_buah = ['apel', 'nanas', 'pisang', 'mangga'];

print_r($daftar_buah);

$string_buah = implode(",", $daftar_buah);

echo $string_buah;
```

<a href='4_string_array.php#L9-L32' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### explode()

Fungsi `explode()` merupakan kebalikan dari fungsi `implode()`, dimana fungsi ini digunakan untuk membuat `string` menjadi `array`.

**Cara Penggunaan :**

`explode($pemisah, $string, $limit)`

- `$pemisah` | wajib, bertipe data `string`, memberi batas dalam menentukan nilai pada setiap elemen `array`
- `$string` | wajib, bertipe data `string`, `string` yang akan dijadikan `array`
- `$limit` | opsional, bertipe data `integer`, menentukan berapa banyak elemen `array` yang akan dibuat

**Contoh :**

```php
<?php

$teks = "Bellshade memang keren";
print_r($teks);

// penggunaan tanpa limit
$teks_array = explode(" ", $teks);
print_r($teks_array);

// penggunaan dengan limit
$teks_array = explode(" ", $teks, 1);
print_r($teks_array);
```

<a href='4_string_array.php#L34-L69' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### str_split()

Fungsi `str_split()` sama seperti fungsi `implode()`, akan tetapi dalam menentukan elemen `array` menggunakan panjang dari `string` yang akan diubah.

**Cara Penggunaan :**

`str_split($string, $panjang)`

- `$string` | wajib, bertipe data `string`, sebuah `string` yang akan diubah
- `$panjang` | opsional, bertipe data `integer`, nilai untuk menentukan panjang setiap elemen `array`

**Contoh :**

```php
$teks = "Bellshade memang keren";
print_r($teks);

// penggunaan tanpa panjang
$teks_array = str_split($teks);
print_r($teks_array);

// penggunaan dengan panjang
$teks_array = str_split($teks, 5);
print_r($teks_array);
```

<a href='4_string_array.php#L71-L110' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### join()

Fungsi `join()` merupakan _alias_ atau nama lain dari fungsi `implode()`.

**Cara Penggunaan :**

`join($pemisah, $array)`

- `$pemisah` | opsional, bertipe data `string`, memberi pemisah diantara elemen `array`
- `$array` | wajib, bertipe data `array`, `array` yang akan dijadikan `string`

**Contoh :**

```php
$daftar_buah = ['apel', 'nanas', 'pisang', 'mangga'];

print_r($daftar_buah);

$string_buah = join(",", $daftar_buah);

echo $string_buah;
```

<a href='4_string_array.php#L112-L135' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

## 5. Escape & Formatting

### addslashes()

Add slashes adalah sebuah function yang digunakan untuk menambahkan backslash `\` pada sebuah string, untuk melakukannya kita harus memasukkan string ke dalam function `addslashes()`.

Ada beberapa kegunaan mengapa perlu adanya escape menggunakan backslash yaitu saat:

1. String yang terdapat `''`
2. String yang terdapat `""`
3. String yang terdapat `\\`

Mengapa dalam sebuah string perlu ditambahkan backslash `\`?, karena string selalu diawali dengan tanda petik `'` atau `"`. Bagaimana jika ingin menambahkan petik didalam sebuah string? misalnya `Jum'at`, salah satu caranya bisa dimasukkan kedalam identifier string petik 2 seperti ini `"Jum'at"` atau misalnya jika penggunaan petik dua `"` tidak dimungkinkan, maka harus di _"escape"_ dengan tanda `\`. Sehingga menjadi seperti ini `'Jum\'at'`

Langsung saja ke demonya,

<strong>Demo #1</strong><br/>
Berikut jika sebuah string menggunakan petik `'`.

```php
$text = addslashes("Ayo belajar di 'bellshade'");
echo "$text";
```

_output:_

<img  src="../../assets/content/basics/5_string_manipulation/kutip''.png" >

<a href='5_add_slashes.php#menghitung-banyaknya-kata' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

<br/>
<br/>
<strong>Demo #2</strong><br/>
Berikut contoh kegunaan sebuah string yang menggunakan petik dua `"`.

```php
$text = addslashes('Ayo belajar di "bellshade"');
echo "$text";
```

_output:_

<img  src="../../assets/content/basics/5_string_manipulation/kutip2''.png" >

<a href='5_add_slashes.php#menghitung-banyaknya-kata' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

<br/>
<br/>
<strong>Demo #3</strong><br/>
Berikut contoh kegunaan sebuah string yang menggunakan backslash `\`.

```php
$text = addslashes(" Ayo belajar di \bellshade\ ");
echo "$text";
```

_output:_
<img  src="../../assets/content/basics/5_string_manipulation/slash''.png" >

<a href='5_add_slashes.php#menghitung-banyaknya-kata' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

> _Referensi:_ https://www.w3schools.com/php/func_string_addslashes.asp

---

### stripslashes()

Apa fungsi `stripslashes()`?
> `stripslashes()` merupakan fungsi dalam php yang digunakan untuk  untuk menghilangkan backslash dalam sebuah kalimat atau string.

 Mengapa perlu mengahapus slash dalam sebuah string?
> jika kita ingin membuat sistem registrasi, maka user bebas untuk memasukkan username sesuai yang dia inginkan, tapi tidak menutup kemungkinan bisa saja user itu menambahkan backslash `\` pada form nya dan itu dapat mengganggu proses query bahkan mengagalkan proses tersebut, fungsi `stripslashes()` disini ialah akan memaksa untuk menghapus backslash `\` pada string jika ada agar tidak menganggu proses query tersebut.

### DEMO

### Sebelum menggunakan stripslashes()

```php
$text = "Ayo belajar \ di bellshade";
echo "$text";
```

#### Output

<img  src="../../assets/content/basics/5_string_manipulation/stripslashes.png" >

### Sesudah menggunakan stripslashes()

```php
$text = "Ayo belajar \di bellshade";
$text1 = stripslashes($text);
echo "$text1";
```

### Output

<img  src="../../assets/content/basics/5_string_manipulation/stripslashes0.png" >

---

> Referensi
> https://www.w3schools.com/php/func_string_stripslashes.asp

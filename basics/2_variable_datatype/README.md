# Variabel dan Tipe Data

Sama seperti bahasa pemrograman lainnya, variabel digunakan sebagai tempat untuk menyimpan data sementara.
Variabel bisa digunakan untuk menyimpan  berbagai jenis tipe data, seperti *integer*, *string*, *boolean* dan lainnya.

## Daftar Isi

- [Penulisan Variabel](#1-penulisan-variabel)
- [Tipe Data](#2-tipe-data)
  - [String](#string)
  - [Integer](#integer)
  - [Float](#float)
  - [Boolean](#boolean)
  - [Array](#array)
  - [Object](#object)
  - [NULL](#null)
  - [Resource](#resource)
- [Variabel dalam String](#3-variabel-dalam-string)
  - [Variabel Dalam String Petik Satu](#variabel-dalam-string-petik-satu)
  - [Variabel Dalam Sting Petik Dua](#variabel-dalam-sting-petik-dua)
  - [Variabel Dalam String Sintaks *Heredoc*](#variabel-dalam-string-sintaks-heredoc)
- [Array](#4-array)
  - [Membuat Array](#membuat-array)
  - [Jenis-Jenis Array](#jenis-jenis-array)
  - [Menambah Data ke Dalam Array](#menambah-data-ke-dalam-array)
  - [Mengubah Data Array](#mengubah-data-array)
  - [Menghapus Data Array](#menghapus-data-array)
- [Konstanta](#5-konstanta)
- [Variabel telah Ditetapkan](#6-variabel-telah-ditetapkan)

## 1. Penulisan Variabel

Berikut aturan penulisan yang baik dan benar variabel pada PHP:

 1. Diawali dengan tanda `$` (*dollar*), fungsinya untuk mendefiniskan bahwa ini adalah sebuah variabel.
 2. Nama variabel ditulis setelah tanda `$`
 3. Nama variabel tidak boleh diawali dengan angka.
 4. Nilai (*value*) variabel ditulis setelah tanda `=` dan diakhiri dengan `;`

Contoh:

```php
<?php

$nama  = 'Feri Irawan';  // variabel dengan data string (valid)
$umur  = 17;             // variabel dengan data integer (valid)
$1buah = 'Apel';         // variabel dengan awalan angka (invalid)

echo $nama; // output: Feri Irawan
echo $umur; // output: 17
```

> **CATATAN :**
>
> Nama variabel bersifat sensitif terhadap huruf besar dan kecil (*Case Sensitive*)
> Jadi jika kamu menggunakannya, pastikan kamu menulisnya dengan memperhatikan huruf besar dan kecilnya.

Contoh:

```php
<?php

$nama = 'Feri Irawan';  // variabel dengan data string
$umur = 17;             // variabel dengan data integer

echo $Nama; // output: 
echo $UMUR; // output: 
```

Nah, dengan melihat contoh-contoh di atas kamu telah mengetahui cara penulisan variabel yang benar.
<br/>
<br/>

## 2. Tipe Data

Dalam pemrograman PHP tentang penulisan tipe data, PHP termasuk _static typing_ yang artinya tipe data tidak dituliskan secara eksplisit. Melainkan PHP sudah secara otomatis menentukan tipe datanya berdasarkan value yang telah ditentukan. Jadi kita tidak perlu menuliskan tipe datanya langsung. Tapi alangkah baiknya jika kita mengetahui berbagai jenis tipe data yang dapat dipahami oleh PHP.

Pada contoh sebelumnya kita telah menuliskan berberapa tipe data, seperti *string* dan *integer*. Selanjutnya, kita akan membahas lengkap tentang tipe data pada PHP.

Berikut tipe data yang didukung PHP:

| Jenis    | Deskripsi                                                                                                                                                                                                           |
| -------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| String   | Tipe data berupa teks atau kalimat.                                                                                                                                                                                 |
| Integer  | Tipe data berupa bilangan bulat, seperti 1, 2, 3, dan seterusnya.                                                                                                                                                   |
| Float    | Tipe data berupa bilangan dengan titik atau bisa di sebut bilangan desimal.                                                                                                                                         |
| Boolean  | Tipe data berupa status yang isinya ada dua yaitu `true` dan `false`, ini seperti **YA** dan **TIDAK** atau **BENAR** dan **SALAH**.                                                                                |
| Array    | Tipe data yang dapat menampung beberapa tipe data lagi di dalamnya.                                                                                                                                                 |
| Object   | Tipe data yang memungkinkan penyimpanan data dan juga informasi tentang cara memproses data yang diinputkan atau yang ada di dalamnya. Tipe data yang satu ini digunakan pada Pemrograman Berorientasi Objek (OOP). |
| NULL     | Tipe data yang nilainya kosong                                                                                                                                                                                      |
| Resource | Tipe data yang menyimpan referensi ke fungsi dan sumber daya di luar PHP.                                                                                                                                           |

<a href='1_data_type.php' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>
<br/>
<br/>

### String

*String* adalah salah satu tipe data pada PHP yang berupa karakter, teks atau kalimat.

Ada beberapa cara untuk menulis sebuah string, berikut adalah cara yang bisa dilakukan:

1. Petik satu
2. Petik dua
3. Sintaks *heredoc*
4. Sintaks *nowdoc*

<br/>
<br/>
#### 1. Petik Satu

String yang diawali dan diakhiri dengan tanda petik satu (`'`)
```php
$text = 'Hello World';
```
<a href='1_data_type.php#L10-L21' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

<br/>
<br/>

#### 2. Petik Dua

String yang diawali dan diakhriri dengan tanda petik dua (`"`)
```php
$text = "Hello World";
```
<a href='1_data_type.php#L24-L29' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

<br/>
<br/>

#### 3. Sintaks *Heredoc*

String yang diawali dengan tanda `<<<LABEL` dan diakhiri dengan `LABEL`
```php
$buah = <<<NAMA_BUAH
Apel
Mangga
Jeruk
NAMA_BUAH;
```
<a href='1_data_type.php#L32-L76' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

<br/>
<br/>

#### 4. Sintaks *Nowdoc*

String yang diawali dengan tanda `<<<'LABEL'` dan diakhiri dengan `LABEL`. Perbedaannya dengan heredoc adalah pada sintaks nowdoc, tidak ada parsing variabel didalamnya sehingg tidak dapat memberikan variabel didalam. (lihat: [3. Variabel dalam String](#3-variabel-dalam-string))
```php
$buah = <<<'NAMA_BUAH'
Apel
Mangga
Jeruk
$variabel
NAMA_BUAH;
```
<a href='1_data_type.php#L79-L93' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>
> Penulisan string menggunakan sintaks *heredoc* dan *nowdoc* dapat digunakan untuk menulis string yang terdiri atas beberapa baris.

<br/>
<br/>

### Integer

Sesuai dengan deskripsi yang ada pada tabel di atas, **integer adalah** tipe data yang merupakan bilangan bulat positif atau negatif.
Tipe data ini sering digunakan untuk operasi matematika.
```php
$x = 1;
```
<a href='1_data_type.php#L97-L108' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

<br/>
<br/>

### Float

Float adalah tipe data yang berupa bilangan dengan titik (desimal).

> Dalam bahasa pemrograman, titik digunakan sebagai pengganti dari koma untuk bilangan desimal.

```php
$x = 1.5;
```
<a href='1_data_type.php#L112-L117' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

<br/>
<br/>

### Boolean

Boolean merupakan tipe data yang isinya ada dua pilihan yaitu `true` dan `false`, ini seperti **YA** dan **TIDAK** atau **BENAR** dan **SALAH**.
```php
$x = true;
$y = false;
```
<a href='1_data_type.php#L127-L141' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

Boolean biasa digunakan pada suatu pengondisian, yang mana boolean digunakan untuk menyatakan apakah kondisi yang dimaksud telah terpenuhi/benar.

<br/>
<br/>

### Array

Untuk penjelasan mengenai array, kamu bisa membacanya [di sini.](#4-array-3_arrayphp)

<br/>
<br/>

### Object (tingkat menengah)

Tipe data yang memungkinkan penyimpanan data dan juga informasi tentang cara memproses data yang diinputkan atau yang ada di dalamnya. Tipe data yang satu ini digunakan pada Pemrograman Berorientasi Objek (OOP).

```php
class Mobil
{
    public $nama;
    public function __construct(string $nama)
    {
        $this->nama = $nama;
    }
}

$mobil = new Mobil('Honda');

echo $mobil->nama; // Hasil: Honda
```

> INFO:
>
> Karna ini masih dalam materi dasar, untuk tipe data *Object* kami hanya akan memberikan contoh sederhana untuk tipe data tersebut.
> Tapi jangan khawatir, materi tentang Object akan berlajut pada materi Pemrograman Berorientasi Objek (OOP).

<br/>
<br/>

### NULL

NULL adalah tipe data khusus yang hanya memiliki satu nilai yaitu: `NULL`. Null dapat diartikan sebagai kosong, atau tak bernilai. Jika sebuah variabel tidak memiliki nilai (null), maka variabel tersebut termasuk variabel null.

```php
$kosong;   // Variabel kosong (null)
$nama = null; // Variabel kosong (null) juga
```

Jika ada variabel yang dibuat tanpa nilai, maka otomatis akan di isi `NULL`
<a href='1_data_type.php#L145-L160' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

Variabel yang sebelumnya telah memiliki nilai juga dapat dikososngkan dengan menggunakan NULL.

<a href='1_data_type.php#L163-L168' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

> **CATATAN:**
>
> Tipe data null bersifat tidak sensitif terhadap huruf besar atau kecil (*Case Insensitive*).

<br/>
<br/>

### Resource

Resouce (sumber daya) bukanlah tipe data yang sebenarnya. Ini adalah penyimpanan referensi ke fungsi dan sumber daya di luar PHP.
Klik tombol berikut untuk melihat contoh sederhana penggunaan resource.

<a href='1_data_type.php#L172-L188' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

<br/>
<br/>

## 3. Variabel dalam String

Nah, di PHP, sebuah variabel dapat digunakan kembali di dalam sebuah tipe data string, dengan betujuan untuk membuat string tersebut menjadi dinamis.

Berikut ini aturan untuk menulis variabel dalam string

1. Variabel yang digunakan telah ada.
2. String ditulis dengan petik satu/dua, sintak heredoc.

<br/>
<br/>

### Variabel Dalam String Petik Satu

Pada string yang ditulis dengan petik satu, untuk merangkai string dengan variabel harus menggunakan `.` Tanda titik tersebut merupakan penghubung antar string / variabel.

```php
$name = 'Feri Irawan';
$text = 'Halo ' . $name; // Output: Halo Feri Irawan
```
<a href='2_variable_in_string.php#L5-L28' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>
<br/>
<br/>
### Variabel Dalam String Petik Dua
Berbeda dengan petik satu, jika menggunakan petik 2 kamu dapat menuliskan variabel didalam string langsung. 
```php
$name = 'Feri Irawan';
$text = "Halo $name"; // Output: Halo Feri Irawan
```
<a href='2_variable_in_string.php#L31-L64' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

<br/>
<br/>

### Variabel Dalam String Sintaks *Heredoc*
Di penulisan string heredoc, kamu dapat menuliskan langsung pada string sama seperti petik dua.
```php
$text = <<<TENTANG_SAYA
Nama: $name
Umur: $umur
TENTANG_SAYA;
```
<a href='2_variable_in_string.php#L67-L98' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

<br/>
<br/>

## 4. Array

Sesuai dengan penjelasan pada [bagian 2](#2-tipe-data--1_data_typephp) di atas, kita sudah ketahui kalau **array merupakan** salah satu tipe data yang dapat menampung beberapa data lain di dalamnya seperti string, integer, float, dan tipe data lainnya.

### Membuat Array

Ini sangat berguna jika kita ingin menampung banyak data dengan kategori yang sama. Misalnya data buah, dari pada kita menulisnya seperti berikut:

```php
<?php

$buah1 = 'Apel';
$buah2 = 'Mangga';
$buah3 = 'Jeruk';
```

Lebih baik kita bisa menuliskannya seperti ini:

```php
<?php

$buah = ['Apel', 'Mangga', 'Jeruk'];
// atau
$buah = array('Apel', 'Mangga', 'Jeruk')
```

Nah, dengan melihat contoh di atas, dapat kita ketahui bahwa penulisan array dapat dilakukan dengan dua cara, yaitu:

1. Menggunakan tanda kurung siku, yang dimana tanda `[` sebagai pembuka dan tanda `]` sebagai penutup (direkomendasikan).
2. Menggunakan $function$ `array()`, yang dimana `array(` sebagai pembuka dan `)` sebagai penutup.

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](3_array.php#L5-L40)

> Jika kamu bingung apa itu $function$, kamu jangan khawatir, karna kamu akan mempelajarinya di meteri berikutnya.

### Jenis-Jenis Array

Dalam PHP, array terbagi menjadi 2 jenis, yaitu:

1. Array numerik (array yang memiliki index dan nilai). Array numerik selalu memiliki index yang dimulai dari nol (0).

   [![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](3_array.php#L43-L47)

2. Array asosiatif (array yang memiliki key dan nilai). Key digunakan sebagi pengganti dari index.

   [![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](3_array.php#L50-L57)

> **INFO:**
>
> Array numerik dan array asosiatif dapat digabung.
>
> [![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](3_array.php#L60-L69)

### Menambah Data ke Dalam Array

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](3_array.php#L72-L89)

### Mengubah Data Array

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](3_array.php#L92-L127)

### Menghapus Data Array

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](3_array.php#L130-L161)

## 5. Konstanta

Konstanta (*constant*) merupakan variabel yang nilainya tetap seperti saat pertama kali dideklarasikan (tidak dapat diubah nilainya).

Dalam bahasa pemrograman PHP, pembuatan konstanta berbeda dengan pembuatan variabel pada umumnya. Konstanta dibuat dengan menggunakan $function$ `define()`, dengan aturan sebagai berikut:

1. Nama konstanta harus *string.*
2. Penulisan nama menggunakan huruf besar (kapital) atau huruf kecil (disarankan menggunakan  huruf kapital).
3. Nama konstanta tidak boleh diawali dengan angka.
4. Nama konstanta tidak boleh menggunakan tanda hubung yang lain selain `_` (*underscore*)

> **CATATAN:**
>
> Nama konstanta bersifat sensitif terhadap huruf besar dan kecil.

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](4_constant_variable.php#L5-L28)

Deklarasi variabel konstanta pada PHP juga dapat dilakukan dengan menggunakan kata kunci `const` disusul dengan `NAMA_KONSTANTA` beserta `nilai` dari konstanta yang dibuat.
> **INFO:**
>
> Deklarasi variabel konstanta ini seperti deklarasi variabel konstanta pada bahasa pemrograman JavaScript

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](4_constant_variable.php#L21-L46)

## 6. Variabel telah Ditetapkan

Variabel telah ditetapkan (*predefined variables*) adalah variabel bawaan PHP yang bersifat "superglobal" dan dapat diakses di tempat tertentu dalam kode.

Berikut beberapa variabel *superglobals* dalam bahasa pemrogramana PHP:

|   Nama    | Deskripsi                                                                                                                                                                                                           |
| :-------: | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| $GLOBALS  | Variabel *superglobal* PHP yang digunakan untuk mengakses variabel global dari mana saja dalam kode PHP (termasuk dari dalam $function$ atau method).                                                               |
| $_SERVER  | Variabel *superglobal* PHP yang menyimpan informasi tentang *header*, *path*, dan lokasi kode.                                                                                                                      |
| $_REQUEST | Variabel *superglobal* PHP yang digunakan untuk mengumpulkan data setelah mengirimkan formulir HTML.                                                                                                                |
|  $_POST   | Variabel *superglobal* PHP yang digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML dengan `method="post"`                                                                                 |
|   $_GET   | Variabel *superglobal* PHP yang digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML dengan `method="get"` dan juga dapat mengumpulkan data yang dikirim dalam URL.                         |
|  $_FILES  | Variabel *superglobal* PHP yang digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML dengan `enctype="multipart/form-data`, dengan input `type="file"`                                      |
|   $_ENV   | Variabel *uperglobal* yang nilainya berupa array asosiatif yang menyimpan variabel *environment* yang tersedia untuk skrip saat ini. Sebagian besar variabel ini disediakan oleh shell di mana parser PHP berjalan. |
| $_COOKIE  | Variabel *superglobal* PHP yang dugunakan untuk mengumpulka data yang di simpan di *cookie* browser.                                                                                                                |
| $_SESSION | Variabel *superglobal* PHP yang dugunakan untuk mengumpulka data yang di simpan di sesi browser.                                                                                                                    |

> Jika kamu masih bingung tentang *Predefined Variables*, kamu jangan khawatir, karna materi tentang variabel-variabel yang telah ditetepkan akan berlajut pada materi berikutnya.

|              Sebelumnya              |          Berikutnya           |
| :----------------------------------: | :---------------------------: |
| [1. Hello World!](../1_hello_world/) | [3. Operator](../3_operator/) |

Tetap semangat!

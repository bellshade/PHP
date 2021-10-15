1. Mengambil Property String
2. Pemotongan String
3. Kapitalisasi String
4. Konversi String Kedalam Array
    - explode()
    - implode()
    - str_split()
    _ join()
5. Escape dan Formating String
    - addslashes()
    - stripslashes()
    - htmlspecialchars()
    - htmlspecialchars_decode()
6. Manipulasi String
    - str_pad()
    - wordwrap()
    - str_shuffle()
    - str_repeat()
    - str_replace()
    - strtr()

# Manipulasi String

PHP menyediakan berbagai fungsi dan fitur untuk memanipulasi string agar suatu teks dapat sesuai dengan yang kita inginkan. Berikut adalah contoh-contoh dari beberapa fungsi ini

## 1. Mengambil properti  String

### Menghitung banyaknya karakter
Untuk menghitung jumlah banyaknya karakter yang terkandung dalam sebuah string kamu bisa menggunakan `strlen()`
Berikut contohnya : 
```php
$text = "Ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Jumlah karakter: ' . strlen($text), PHP_EOL;  // Output: 37
```

<a href='1_properti_string.php#menghitung-banyaknya-karakter' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>


### Menghitung banyaknya kata
PHP menyediakan fungsi `str_word_count($text)`. Cukup tambahkan text pada parameternya

```php
$text = "Ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Jumlah kata: ' . str_word_count($text), PHP_EOL;  // Output: 7
```
<a href='1_properti_string.php#menghitung-banyaknya-kata' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### Mencari posisi kata dari sebuah teks
Manfaat yang lebih nyata adalah dapat melihat apakah suatu teks tertentu ada dalam string. <br/>
Untuk itu kamu bisa gunakan `strpos($string, $apayangdicari)`

fungsi `strpos()` akan mengembalikan nilai index posisi dari string yang akan dicari.. 
> _Catatan:_ Index posisi ini mulai dari 0

<p align="center">
    <img src="../../assets/content/basics/5_string_manipulation/strpos.gif">
</p>
contoh: 

```php
$text = "Ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo "Posisi kata 'contoh': " . strpos($text, 'contoh'), PHP_EOL;  // Output: 11
```
<a href='1_properti_string.php#mencari-posisi-dari-sebuah-kata' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### Menghitung banyaknya kata tertentu
Jika kamu ingin menemukan kata tertentu dalam sebuah string, 
<br/>kamu dapat gunakan `substr_count($string, "yangmaudicari")`

<p align="center">
    <img src="../../assets/content/basics/5_string_manipulation/substr_count.gif">
</p>


```php
$text = "ini adalah ini contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo "Jumlah kata 'ini': " . substr_count($text, 'ini'), PHP_EOL;  // Output: 2
```
<a href='1_properti_string.php#menghitung-banyaknya-kata-tertentu' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

## 2. Pemotongan String
Pemotongan string bakal sangat sering sekali digunakan untuk pengembangan web. Misalnya untuk membatasi paragraf, menghapus format tertentu dan lain sebagainya.

### Memotong dari kiri, kanan dan keduanya

anda dapat menggunakan `ltrim($string, 'karakternya')` untuk memotong dari kiri berdasarkan karakter<br/>

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

```php
$text = "ini adalah ini contoh teks yang saya buat";
$ltrim = ltrim($text, 'inibuat'); 
$rtrim = rtrim($text, 'inibuat'); 
$trim = trim($text, 'inibuat'); 
```
<a href='2_pemotongan_string.php' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

## 3. Kapitalisasi String
Kapitalisasi string akan sangat dibutuhkan dalam pengembangan web. Contoh kasusnya adalah ketika menyamakan format nama dari user yang sering berbeda beda dan kebutuhkan lainnya.

### Mengubah karakter menjadi huruf kecil
Untuk mengubah karakter menjadi huruf kecil semua yang berada pada sebuah string, kamu bisa menggunakan fungsi `strtolower()`. Berikut contohnya :

```php
$text = "Ini Adalah coNtoh teKs yAng Saya Buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Setelah Dikecilkan: ' . strtolower($text), PHP_EOL;  // Output: ini adalah contoh teks yang saya buat
```

<a href='3_kapitalisasi_string.php#strtolower' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### Mengubah karakter menjadi huruf besar
Untuk mengubah karakter menjadi huruf besar semua yang berada pada sebuah string, kamu bisa menggunakan fungsi `strtoupper()`. Berikut contohnya :

```php
$text = "Ini Adalah coNtoh teKs yAng Saya Buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasilnya: ' . strtoupper($text), PHP_EOL;  // Output: INI ADALAH CONTOH TEKS YANG SAYA BUAT
```

<a href='3_kapitalisasi_string.php#strtoupper' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### Mengubah karakter pertama menjadi huruf besar
Untuk mengubah karakter pertama menjadi huruf besar yang berada pada sebuah string, kamu bisa menggunakan fungsi `ucfirst()`. Berikut contohnya :

```php
$text = "ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasilnya: ' . ucfirst($text), PHP_EOL;  // Output: Ini adalah contoh teks yang saya buat
```

<a href='3_kapitalisasi_string.php#ucfirst' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### Mengubah karakter pertama setiap kata menjadi huruf besar
Untuk mengubah karakter pertama pada setiap kata menjadi huruf besar yang berada pada sebuah string, kamu bisa menggunakan fungsi `ucwords()`. Berikut contohnya :

```php
$text = "ini adalah contoh teks yang saya buat";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasilnya: ' . ucwords($text), PHP_EOL;  // Output: Ini Adalah Contoh Teks Yang Saya Buat
```

<a href='3_kapitalisasi_string.php#ucwords' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

### Mengubah karakter pertama menjadi huruf kecil
Untuk mengubah karakter pertama menjadi huruf kecil yang berada pada sebuah string, kamu bisa menggunakan fungsi `lcfirst()`. Berikut contohnya :

```php
$text = "INI ADALAH CONTOH TEKS YANG SAYA BUAT";
echo 'Contoh Tulisan: ' . $text, PHP_EOL;
echo 'Hasilnya: ' . lcfirst($text), PHP_EOL;  // Output: iNI ADALAH CONTOH TEKS YANG SAYA BUAT
```

<a href='3_kapitalisasi_string.php#lcfirst' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>


## 4. Konversi Antara String dan Array

### 4.1 Konversi Dari String Menjadi Array

### explode()
Fungsi explode adalah memecah atau membagi sebuah data string menjadi beberapa bagian yang dipisahkan oleh separator "pemisah" dimana setiap bagian di konversikan menjadi elemen array().

Syntax :
```php
explode ( string $separator , string $string [, int $limit = PHP_INT_MAX ] ) : array
```
#### Paramater

|    Nama    |   Tipe Data   |    Input     |   Keterangan                                                           |
|:----------:|:-------------:|:------------:|------------------------------------------------------------------------|
| `separator`| String        | Wajib di isi | Nilai pemisah string                                                   |
| `string`   | String        | Wajib di isi | Sting yang akan di konversi                                            |
| `limit`    | String        | Opsional     | Banyaknya elemen array yang akan di bentuk default value `PHP_INT_MAX` |

#### Hasil

Pecahan string berupa Array().
- Jika `limit` diset positif maka setelah pembagian string, jika elemen array melebehi `limit` sisa dari elemen digabungkan kedalam elemen limit tertingi
- jika `limit` diset negatif maka setelah pembagian string, total seluruh elemen akan dikurangi dengan limit di mulai dari elemen terakhir (`limit` tertingi).
- Jika `limit` diset `0` maka akan di menghasilkan `1` elemen array tanpa adanya pemecahan string (seluruh `string` di konversikan menjadi `1` elemen array).

#### Contoh Penggunaan

Berikut contoh baris kode penggunaan explode :
```php
<?php
    $string = "ular melingkar dipagar pak umar";         //String yang akan di konversi

    $contoh1 = explode (" ", $string);                   //separator spasi
    $contoh2 = explode (" ", $string, 3);                //limit postitif
    $contoh3 = explode (" ", $string, -3);               //Limit Negatif
    $contoh4 = explode (" ", $string, 6);

    echo '<pre>';
    echo 'Contoh 1 : ';
    print_r($contoh1);
    echo 'Contoh 2 : ';
    print_r($contoh2);
    echo 'Contoh 3 : ';
    print_r($contoh3);
    echo 'Contoh 4 : ';
    print_r($contoh4);
    echo '</pre>';
?>
```
Bila kita jalankan baris kode diatas akan menghasilkan hal dibawah ini :
```html
Contoh 1 : Array
(
    [0] => ular
    [1] => melingkar
    [2] => dipagar
    [3] => pak
    [4] => umar
)
Contoh 2 : Array
(
    [0] => ular
    [1] => melingkar
    [2] => dipagar pak umar
)
Contoh 3 : Array
(
    [0] => ular
    [1] => melingkar
)
Contoh 4 : Array
(
    [0] => ular melingkar dipagar pak umar
)
```
[![](https://img.shields.io/static/v1?&label=Contoh%20Kode&message=%3e&color)](4_manipulasi_string_explode.php)


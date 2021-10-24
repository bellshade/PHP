# Operator

Dalam bahasa pemrograman, operator digunakan untuk melakukan operasi terhadap variabel dan nilai. Dalam PHP, operator dibagi menjadi beberapa bagian yakni:

- [Operator](#operator)
  - [Operator Aritmatika](#operator-aritmatika)
    - [Penambahan](#penambahan)
    - [Pengurangan](#pengurangan)
    - [Perkalian](#perkalian)
    - [Pembagian](#pembagian)
    - [Modulus](#modulus)
    - [Exponensial](#exponensial)
  - [Operator Penugasan](#operator-penugasan)
    - [Pembagian operator penugasan](#pembagian-operator-penugasan)
    - [Operator Penugasan Aritmatik](#operator-penugasan-aritmatik)
    - [Operator Penugasan Bitwise](#operator-penugasan-bitwise)
    - [Operator Penugasan Lainnya](#operator-penugasan-lainnya)
  - [Operator Pembanding](#operator-pembanding)
  - [Operator Logika](#operator-logika)
  - [Operator Bitwise](#operator-bitwise)
    - [Bitwise And](#bitwise-and)
    - [Bitwise OR](#bitwise-or)
    - [Bitwise XOR](#bitwise-xor)
    - [Bitwise Not](#bitwise-not)
    - [Bitwise Shift](#bitwise-shift)
  - [Operator Increment/Decrement](#operator-incrementdecrement)
  - [Operator String](#operator-string)
  - [Operator Array](#operator-array)
    - [Operator Lainnya](#operator-lainnya)
    - [Tenary Operator](#tenary-operator)
    - [Null Coalesce Operator](#null-coalesce-operator)
    - [Referensi](#referensi)

## Operator Aritmatika

Masih ingat dengan dasar matematika Kabataku (kali bagi tambah kurang), yang kita pelajari di sekolah?.

Operator aritmatika digunakan dengan cara yang sama dengan pelajaran tersebut.

Operator aritmatika digunakan untuk memanipulasi bilangan-bilangan numerik sederhana, seperti yang sering kita lakukan dalam sehari-hari seperti penjumlahan, pengurangan, perkalian, pembagian dan lainnya.

Secara umum operator aritmatika disusun sebagai berikut :

**Table Operator Aritmatika**

| Symbol | Nama        | Contoh   | Keterangan                                                         |
| ------ | ----------- | -------- | ------------------------------------------------------------------ |
| `+`    | Penambahan  | $a + $b  | Jumlah dari nilai $a dan $b                                        |
| `-`    | Pengurangan | $a - $b  | Selisih dari nilai $a dan $b                                       |
| `*`    | Perkalian   | $a * $b  | Perkalian dari nilai $a dan $b                                     |
| `/`    | Pembagian   | $a / $b  | Nilai $a dibagi dengan nilai $b                                    |
| `%`    | Modulus     | $a % $b  | Sisa dari nilai $a di bagi nilai $b                                |
| `**`   | Exponensial | $a ** $b | Hasil dari nilai $a pangkat nilai $b ( $a <sup><em>$b</em></sup> ) |

> **Catatan :**
>
> Operator Aritmatika Hanya digunakan untuk operasi numerik,
> Untuk manipulasi *string* dapat menggunkan operator string

### Penambahan

Penambahan adalah operasi yang paling dasar, dalam bentuk sederhananya penjumlahan adalah penggabungan 2 angka atau bilangan menjadi satu angka atau bilangan dari jumlah dari angka atau bilangan tersebut (seperti 2 + 3 = 5).

Dalam PHP operator penjumlahan menggunakan simbol/syntax `+`.

Contoh :

```php
<?php

$a = 10;
$b = 15;

echo ($a + $b);     // Hasil 25
echo (12 + 15);     // Hasil 27
```

### Pengurangan

Sama dengan operator penambahan. Pengurangan juga upaya dalam menggabungkan dua suku angka bilangan menjadi satu suku angka atau bilangan, dengan hasil selisih dari kedua suku angka atau bilangan (3 - 2 = 1).

Dalam PHP operator ini menggunkan simbol/syntax `-`.

Contoh :

```php
<?php

$a = (int) 15;
$b = (int) 10;

echo ($a-$b);       // Hasil 5
echo (15-9);        // Hasil 6
```

> **Catatan :**
>
> Syntax `+`, `-` juga digunakan dalam operasi penentuan indentitas dari bilangan seperti (+5) yang lebih dikenal dengan
>
> Bilangan positif dan (-5) yang lebih dikenal dengan bilangan negatif.
>
> Berlaku sebagaimana dalam aritmatika bahwa (+) x (+) = (+), (+) x (-) = (-), (-) x (+) = (-), (-) x (-) = (+) atau lebih jelasnya +(-5) = (-5) dan -(-5) = (+5)

### Perkalian

Perkalian dalam PHP menggunakan simbol/syntax (`*`)

Contoh penggunaan :

```php
<?php

$a = (int) 4;
$b = (int) 2;

echo ($a*$b);   // Hasil 8
echo (4*2);     // Hasil 8
```

### Pembagian

Pembagian dalam PHP menggunakan simbol/syntax (`/`)

Operator pembagian (`/`) akan menghasilkan nilai `float` kecuali kedua bilangan ditentukan dalam tipe `integer` (atau string yang dikonversikan menjadi *int*) dan hasil pembagian berupa bilangan bulat, maka dalam hal ini akan menghasilkan nilai `integer`.

Contoh penggunaan :

```php
<?php

$a = (int) 4;
$b = (int) 2;

echo ($a/$b);   // Hasil 2
echo (4/2);     // Hasil 2
```

### Modulus

Modulus adalah operasi yang menghasilkan nilai sisa bagi antara 2 buah bilangan integer.

Contoh:

1. `3/2 = 1` sisa `1`, maka `3 % 2 = 1`.
2. `9/4 = 2` sisa `1`, maka `9 % 4 = 1`.
3. `6/3 = 2` sisa `0` maka `6 % 3 = 0` .

Karena operator modulus hanya bisa memproses data dengan tipe integer maka operator modulus akan mengkonversi kedua operand/bilangan menjadi `integer` secara paksa.

Hasil dari operator modulus (`%`) akan memiliki tanda nilai yang sama dengan tanda pada nilai pembilang, — (jika pembilang bernilai positif maka hasilnya akan bernilai positif, jika pembilang bernilai negatif maka hasil akan bernilai negatif, tidak terpengaruh terhadap penyebut yang memiliki nilai positif ataupun negatif).

Contoh penggunaan :

```php
<?php

echo (5 % 2)."/n";   // Hasil 1
echo (5 % -2)."/n";  // Hasil 1
echo (-5 % 2)."/n";  // Hasil -1
echo (-5 % -2)."/n"; // Hasil -1
```

### Exponensial

Exponensial lebih dikenal secara umum sebagai bilangan pangkat atau dalam penulisan fungsi Matematika ditulis ~ <em>x <sup>y</sup></em>

Dalam PHP penulisan exponensial menggunakan simbol/syntax (`**`).

Contoh :

```php
<?php 

$a =(int) 2;
$b =(int) 3;

echo ($a ** $b);    // Hasil 8
echo (2 ** 3);      // Hasil 8
```

Demo kode dapat dilihat [disini](./1_operator_aritmatika.php)

## Operator Penugasan

Operator penugasan dasarnya adalah "`=`", mungkin pemikiran awal kita meng-anggap bahwa ini  sama dengan (sebanding), nyatanya bukan itu maksudnya tetapi nilai variabel pada sisi sebelah kiri operator ditentukan/ditetapkan sebagaimana ekspresi yang terdapat pada bagian sebelah kanan dari operator.

Contoh:

```php
<?php

$a = ($b = 4) + 3 // $a ditetapkan dengan nilai 7 dan $b ditetapkan dengan nilai 4 dimana $a = 4 + 3
```

### Pembagian operator penugasan

### Operator Penugasan Aritmatik

|  Contoh  | Persamaan/Bentuk Lain | Keterangan                                              |
| :------: | :-------------------: | ------------------------------------------------------- |
| $a += $b |     $a = $a + $b      | Penambahan nilai `$a` sebesar nilai `$b`                |
| $a -= $b |     $a = $a - $b      | Pengurangan nilai `$a` sebesar nilai `$b`               |
| $a *= $b |     $a = $a * $b      | Menggandakan (perkalian) nilai `$a` sebanyak nilai `$b` |
| $a /= $b |     $a = $a / $b      | Pembagian nilai `$a` sebanyak nilai `$b`                |
| $a %= $b |     $a = $a % $b      | Modulus sama seperti pada operator Aritmatika           |

Operator Aritmatika dapat dipelajari lebih lanjut [disini](#operator-aritmatika)

### Operator Penugasan Bitwise

| Contoh    | Persamaan/Bentuk Lain | Keterangan    |
| :-------- | :-------------------: | ------------- |
| $a &= $b  |     $a = $a & $b      | Bitwise `And` |
| $a \|= $b |     $a = $a \| $b     | Bitwise `or`  |
| $a ^= $b  |     $a = $a ^ $b      | Bitwise `Xor` |
| $a <<= $b |     $a = $a << $b     | Shift         |
| $a >>= $b |     $a = $a >> $b     | Shift         |

Operator *Bitwise* dapat dipelajari lebih lanjut [disini](#operator-bitwise)

### Operator Penugasan Lainnya

|  Contoh   | Persamaan/Bentuk Lain | Keterangan          |
| :-------: | :-------------------: | :------------------ |
| $a .= $b  |     $a = $a . $b      | Penggabungan string |
| $a ??= $b |     $a = $a ?? $b     | Null Coalesce       |

Untuk *Null Coalesce* dapat dipelajari lebih lanjut [disini](#null_coalesce_operator)

## Operator Pembanding

Operator pembanding ini digunakan untuk membandingkan dua variabel yang nilainya sama atau berbeda.

| Operator | Nama             |  Contoh   | Keterangan                                                                                          |
| :------: | ---------------- | :-------: | --------------------------------------------------------------------------------------------------- |
|    ==    | Sama/Setara      | $a == $b  | Akan bernilai `true` apabila nilai `$a` sama dengan `$b`                                            |
|   ===    | Identik          | $a === $b | Akan bernilai `true` apabila `$a` dan `$b` nilai dan tipe datanya itu sama                          |
|    !=    | Tidak sama       | $a != $b  | Akan bernilai `true` apabila nilai `$a` tidak sama dengan `$b`                                      |
|   \<>    | Tidak sama       | $a <> $b  | Sama seperti di atas                                                                                |
|   !==    | Tidak identik    | $a !== $b | Akan bernilai `true` apabila `$a` dan `$b` nilai **atau** tipe datanya itu tidak sama               |
|    \>    | Lebih besar dari |  $a > $b  | Akan bernilai `true` apabila nilai `$a` lebih besar dari `$b`                                       |
|    \<    | Lebih kecil dari |  $a < $b  | Akan bernilai `true` apabila nilai `$a` lebih kecil dari `$b`                                       |
|   \>=    | Lebih besar dari |  $a > $b  | Akan bernilai `true` apabila nilai `$a` lebih besar dari atau sama dengan `$b`                      |
|   \<=    | Lebih kecil dari |  $a < $b  | Akan bernilai `true` apabila nilai `$a` lebih kecil dari atau sama dengan `$b`                      |
|   \<=>   | Spaceship        | $a <=> $b | Akan bernilai -1 apabila `$a < $b`, bernilai `0` apabila `$a == $b`, bernilai `1` apabila `$a > $b` |

Contoh kodenya dapat dilihat [di sini](./3_comparison_operator.php).

## Operator Logika

Operator logika ini digunakan untuk menggabungkan pernyataan yang bersifat kondisional.

| Operator  | Nama |   Contoh   | Keterangan                                                                                                                 |
| :-------: | ---- | :--------: | -------------------------------------------------------------------------------------------------------------------------- |
| and / &&  | And  |  $x && $y  | Akan bernilai `true` apabila `$x` **dan** `$y` bernilai `true`                                                             |
| or / \|\| | Or   | $x \|\| $y | Akan bernilai `true` apabila `$x` **atau** `$y` bernilai `true`                                                            |
|    xor    | Xor  | $x xor $y  | Akan bernilai `true` apabila **hanya di antara** `$x` **atau** `$y` yang bernilai `true`, sebaliknya akan bernilai `false` |
|    \!     | Not  |    !$x     | Akan bernilai `true` apabila `$x` bernilai `false` dan sebaliknya.                                                         |

Contoh kodenya dapat dilihat [di sini](./4_logical_operator.php).

## Operator Bitwise

*Bitwise* operator adalah operator yang disediakan oleh PHP untuk pengolahan, evaluasi dan manipulasi logika dari bilangan biner (*Binary*).
Bilangan biner adalah bilangan yang hanya terdisi dari 2 angka yaitu angka `0` dan `1` sebagai contoh angka 7 dalam bilangan biner di tulis sebagai `0111` dalam 4 bits data.

Bilangan biner pada dasarnya bahasa yang paling cepat dipahami mesin. Pada dasarnya mesin atau komputer kamu menerima perintah atau data dalam bentuk *Binary* (Binner)

Bilamana bilangan yang di eksekusi tidak berbentuk bilangan biner maka secara default PHP akan mengkonversi bilangan tersebut menjadi bilangan biner.

Operator bilangan biner ini sangat jarang digunakan, kecuali kamu menulis program khusus untuk memproses bilangan biner.

Pembagian operator *bitwise* sebagai berikut :

| Symbol | Nama           |    Contoh    | Keterangan                                                                                                                                                                                                     |
| :----: | -------------- | :----------: | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
|   &    | And            | 0001 & 0011  | Menghasilkan bilangan biner baru dari penggabungan dua bilangan biner di mana data yang diambil adalah bit 1 dalam barisan yang sama, sedangkan yang lainnya dianggap 0 pada contoh 3 & 1 mengasilkan 1 (0001) |
|   \|   | OR (inclusive) | 0001 \| 0011 | Menghasilkan bilangan biner baru dari penggabungan dua bilangan biner di mana bits yang diambil adalah semua bits dalam barisan yang bernilai 1, dalam contoh 1 \| 3 menghasilkan 3 (0011)                     |
|   ^    | OR (exclusive) | 0001 ^ 0011  | Menghasilkan bilangan biner dengan mengambil bits dalam barisan yang tidak bernilai sama, dalam contoh 1 ^ 3 menghasilkan 2 (0010).                                                                            |
|   ~    | Not            |    ~ 0001    | Menghasilkan bilangan biner berupa semua bits dalam barisan kecuali bits yang terdapat pada variabel, pada contoh menghasilkan -2 (1111111111111111111111111111111111111111111111111111111111111110) 64bits    |
|  <<=   | Shift Left     |  0001 <<= 2  | Menghasilkan bilangan biner dengan menggeser bit unit ke arah kiri sebanyak nilai(operand) yang ditetapkan disebelah kanan operator, pada contoh 1(0001) <<= 2 menghasilkan 4 (0100).                          |
|  >>=   | Shift Right    |  0001 >>= 1  | Menghasilkan bilangan biner dengan menggeser bit pada baris ke arah kanan sebanyak nilai (operand) yang ditetapkan disebelah kanan operator, pada contoh 1(0001) >>= 1 menghasilkan 0 (0000).                  |

Berdasarkan table di atas dapat dijabarkan sebagai berikut :

### Bitwise And

*Bitwise and* merupakan operator penggabungan bilangan biner dimana nilai bit yang diambil adalah `1 & 1 = 1`, `1 & 0 = 0` dan `0 & 0 = 0`, untuk lebih jelasnya kita perhatikan perhitungan di bawah ini :

```php
$a =(integer) 1; // Dalam biner (0001) 4bits
$b =(integer) 3; // Dalam biner (0011) 4bits

$c = $a & $b

// Dalam perhitungan biner
// $a = 1      0 0 0 1    4bits
// $b = 3      0 0 1 1    4bits
//            --------- & (and)
// $c = ??     0 0 0 1    4bits

// Atau $c dalam bentuk desimal = 1
```

Pada contoh perhitungan di atas dapat kita simpulkan bahwa operator `bitwise AND` menggabungkan 2 bilangan biner dengan cara mengambil bit yang identik, selain bits yang identik diisi oeh nilai `0`.

### Bitwise OR

Operator *Bitwise inclusive OR* (`|`) merupakan operator untuk menggabungkan bilangan biner dengan mengambil bit-bit dalam barisan yang mengandung nilai 1, barisan yang tidak terdapat nilai 1 akan diisi oleh nilai `0`

Contoh perhitungannya sebagai berikut :

```php
$a = 3;     // Dalam bentuk biner (0011) 4bits
$b = 4;     // Dalam bentuk biner (0100) 4bits

$c = $a | $b       // Operator OR bitwise

// Perhitungan
// $a = 3          0 0 1 1     4bits
// $b = 4          0 1 0 0     4bits
//                --------- |  (OR)
// $c = ?          0 1 1 1     4bits
// Atau nilai $c dalam desimal = 7
```

Dari contoh di atas dapat kita lihat bahwa barisan yang mengandung nilai 1 akan diisi oleh nilai satu, sedangkan yang lainnya akan diisi oleh nilai 0.

### Bitwise XOR

Operator *Bitwise exclusive OR ~ XOR* (`^`) merupakan operator penggabungan bilangan biner di mana hasil didapat berdasarkan pencocokan (*comparison*) barisan bilangan biner dimana barisan yang identik akan mendapat nilai 0 sedangkan yang tidak sama mendapat nilai 0.

Contoh perhitungan :

```php

$a = 1;     // Dalam bentuk biner (0001) 4bits
$b = 3;     // Dalam bentuk biner (0011) 4bits

$c = $a ^ $b        // XOR bitwise

// Perhitungan XOR
// Barisan         1 2 3 4

// $a = 1          0 0 0 1     4bits
// $b = 3          0 0 1 1     4bits
//                --------- ^  (XOR)
// $c = ?          0 0 1 0     4bits
// Atau dalam bentuk desimal $c bernilai 2
```

Dari perhitungan di atas dapat kita simpulkan bahwa operator *Bitwise Xor* akan mencocokan nilai dalam barisan dimana barisan yang identik akan mendapat nilai 0 dan barisan yang tidak identik mendapatkan nilai 1.

### Bitwise Not

*Operator Not* akan membalikan nilai bit sebuah variabel dari 0 menjadi 1, dan 1 menjadi 0

Dalam hal ini PHP membalikan semua bit dalam kasus sistem 64 bits. PHP menjadikan variabel dalam bentuk biner 64 bits (digit). Sehingga bila kita membalikan nilai dari 8 akan terjadi perhitungan sebagai berikut.

```php
$a = ~ 8;       // Bitwise Not

// Perhitungan
// 8               00000000 00000000 00000000 00000000 00000000 00000000 00000000 00001000
//                 ------------------------------------------------------------------------
// $a = ~8         11111111 11111111 11111111 11111111 11111111 11111111 11111111 111101111

// $a dalam bentuk desimal = -9
```

### Bitwise Shift

*Bitwise shift* terdiri dari 2 yaitu shift ke kiri dan shift ke kanan, operator ini akan menggeser nilai biner dari variabel ke arah yang ditentukan sebanyak nilai (*operand*) yang terdapat pada bagian kanan operator.

Untuk pemahaman kita perhatikan perhitungan di bawah ini :

```php
$a = 2;         // dalam bentuk biner (0010) 4bits

$b = $a <<= 2;  // Shift Left
$c = $a >>= 1;  // Shift Right

// Perhitungan
// barisan           5 4 3 2 1 

// $a                  0 0 1 0                     4bits
//                   ---------    <<=/>>= (shift)
// $b                0 1 0 0 0    dalam 4 bits (1 0 0 0)
// $c                    0 0 1    dalam 4 bits (0 0 0 1)

// Atau dalam desimal nilai $b = 8 dan nilai $c = 1
```

Dari perhitungan di atas kita lihat bahwa operator *shift* ini menggeser bilangan biner ke kiri maupun ke kanan sesuai arah yang ditentukan sebanyak nilai operand bagian kanan operator dengan aturan setiap pergeseran ke kiri nilai paling kanan akan diisi oleh 0, dan setiap pergeseran kanan nilai paling kanan akan dihapus.

Demo code dapat dilihat [disini](./5_bitwise_operator.php)

## Operator Increment/Decrement

*Increment*/*Decrement* adalah menaikan atau menurunkan satu angka atau huruf berdasarkan urutannya.

PHP mendukung *C-style pre* dan *post-increment* dan *decrement operator*

> **Catatan :**
>
> *Increment* dan *Decrement* hanya dapat digunakan pada type data numerik dan string. data ber-type Array, Object, Boolean, dan
>
> Resource tidak akan memiliki efek terhadap operator ini.
>
> Menurunkan nilai `Null` tidak akan menghasilkan nilai baru, tetapi menaikan nilai `Null` akan menghasilkan nilai `1`.

*Increment* dan *Decrement* Operator:

| Operator | Nama           | Keterangan                                                |
| :------: | -------------- | --------------------------------------------------------- |
|   ++$a   | pre-Increment  | Menaikan nilai $a sebanyak 1, kemudian menghasilkan $a.   |
|   $a++   | post-Increment | Menghasilkan $a, kemudian menaikan nilai $a sebanyak 1.   |
|   --$a   | pre-Decrement  | Menurunkan nilai $a sebanyak 1, kemudian menghasilkan $a. |
|   $a--   | post-Decrement | Menghasilkan $a, kemudian menurunkan nilai $a sebanyak 1. |

Sebagai contoh :

```php
<?php

// Variabel
$a = 6;

// Post Increment
echo $a++;      // Hasil $a sebelum increment (6)
echo $a;        // Hasil $a setelah increment (7)

// Pre Increment
echo ++$a;      // Hasil $a setelah increment (7)
echo $a;        // Hasil $a setelah increment (7)

// Post Decrement
echo $a--;      // Hasil $a sebelum decrement (6)
echo $a;        // Hasil $a setelah decrement (5)

// Pre Decrement
echo --$a;      // Hasil $a setelah decrement (5)
echo $a         // Hasil $a setelah decrement (5)

```

PHP mengikuti sistem Bahasa Perl's dalam melakukan operasi aritmatika terhadap variabel karakter/huruf, bukan seperti yang dijalankan oleh Bahasa C.

Sebagaimana dalam ekspresi `$a = 'Z' ; $a++;` pada PHP dan Perl's akan menghasilkan 'AA', sedangkan Bahasa C akan mengkonversi menjadi nilai ASCII dari huruf `Z` ( yaitu 90 ), dan kemudian menambahkan 1 sehingga menghasilkan nilai `'` (ASCII 91).

Untuk contoh dapat dilihat [disini](./7_increment_decrement_operator.php)

## Operator String

Ada dua jenis operator *string*, yang pertama adalah operator penggabungan *string* atau dikenal sebagai concatenation operator (`'.'`), dimana menghasilkan gabungan *string* dari *argument* bagian kiri dan kanan operator. Kedua adalah operator penggabungan penugasan atau dikenal dengan concatenation assignment operator (`'.='`), dimana menghasilkan penambahan *argument* dari bagian kanan operator kedalam *argument* yang terdapat di bagian kiri operator.

Contoh :

```php
<?php

// Variabel
$a = 'nama';

// Concatenation operator
echo 'nama' . ' saya';      // Hasil 'nama saya'
echo $a . ' saya';          // Hasil 'nama saya'

// Concatenation asignment operator
echo $a .= ' saya';         // Hasil 'nama saya'
```

Demo kode terdapat [disini](./8_string_operator.php)

Untuk selengkapnya dapat dipelajari di materi [String Manipulation](../6_manipulasi_string/)

## Operator Array

Operator *Array* kebanyakan adalah operator perbandingan (*Comparison Operator*) yang menghasilkan nilai boolean.

Operator *Array* dikelompokkan sebagaimana terdapat dalam tabel berikut:

| Contoh    | Nama          | Keterangan                                                                                                            |
| --------- | ------------- | --------------------------------------------------------------------------------------------------------------------- |
| $a + $b   | Union         | Menggabungkan data Array $a dengan data Array $b                                                                      |
| $a == $b  | Equlity       | Menghasilkan nilai `true` jika Array $a dan $b memiliki key/value yang sama                                           |
| $a === $b | Identity      | Menghasilkan nilai `true` jika Array $a dan $b memiliki key/value yang sama serta urutan dan type yang sama (identik) |
| $a != $b  | Inequality    | Menghasilkan nilai `true` jika Array $a tidak sama dengan Array $b                                                    |
| $a <> $b  | Ineguality    | Sama dengan penjelasan di atas                                                                                        |
| $ !== $b  | Non-Indetical | Menghasilkan nilai `true` jika $a dan $b tidak identik                                                                |

> **Catatan :**
>
> Variabel `$a` dan `$b` merupakan data `Array()`

Operator penggabungan atau Union menghasilkan nilai hasil penambahan data `Array()` bagian kanan kedalam data `Array()` bagian kiri dari operator, dalam kasus di atas $b[ ] di tambahkan kedalam $a[ ], lebih jelasnya perhatikan contoh di bawah ini.

Contoh *union* `Array()`:

```php
<?php

$a = array('a' => 'Nila', 'b' => 'Gurame');
$b = array('a' => 'Bawal', 'b' => 'Lele', 'c' => 'Bucuk');

$c = $a + $b;       //union $a dan $b
echo "Union dari \$a dan \$b: \n";
var_dump($c);

$c = $b + $a;       //Union $b dan $a
echo "Union dari \$b dan \$a: \n";
var_dump($c);

$a += $b;           //Union $a += $b sama dengan $a dan $b
echo "Union dari \$a += \$b: \n";
var_dump($a);
```

Bila kode di atas dieksekusi pada terminal akan mengasilkan :

```php
Union dari $a dan $b:
array(3) {
  ["a"]=>
  string(4) "nila"
  ["b"]=>
  string(6) "gurame"
  ["c"]=>
  string(5) "bucuk"
}

Union dari $b dan $a:
array(3) {
  ["a"]=>
  string(5) "bawal"
  ["b"]=>
  string(4) "lele"
  ["c"]=>
  string(5) "bucuk"
}

Union dari $a += $b:
array(3) {
  ["a"]=>
  string(4) "nila"
  ["b"]=>
  string(6) "gurame"
  ["c"]=>
  string(5) "bucuk"
}
```

Demo kode dapat kamu lihat [disini](./9_array_operator.php)

Perbedaan terhadap *Comparison* dan *Indentity* dapat dilihat dari contoh di bawah ini  :

```php
<?php

// Variabel
$a = array("bayam", "kangkung");
$b = array(1 => "kangkung", "0" => "bayam");

var_dump($a == $b);         // Equality menghasilkan nilai bool(true)
var_dump($a === $b);        // Identity menghasilkan nilai bool(false)
```

Selengkapnya mengenai tipe data Array dapat dipelajari [disini](../2_variabel_datatype/#array)

### Operator Lainnya

Salah satu operator khusus dalam PHP yaitu Operator *Tenary* (*Conditional*) dan Operator *Null Coalesce*.

### Tenary Operator

*Conditional Operator* lainnnya adalah Operator *Tenary* `?;`
Operator *tenary* biasa digunakan untuk mempersingkat penulisan kode *conditional statement* yaitu `if...else`.

Contoh :

```php
<?php

// Conditonal Statement
if (empty($data['name'])) {
    $name = "Kondiak";
} else {
    $name = $data['name'];
}
```

Dengan menggunakan Operator *Tenary* dapat dituliskan sebagai berikut :

```php
<?php

$name = (empty($data['name'])) ? "Kondiak" : $data['name'] ;
```

Demo kode dapat dilihat [disini](./tenary_operator.php)

> **Catatan :**
>
> - Perlu diingat bahwa *Tenary operator* digunakan pada *conditional statement* yang sederhana.
> - Untuk *Conditional Statement* yang rumit, lebih baik menggunakan *Conditional Statement* biasa seperti `if...elseif...else`, `switch`, atau lainnya.

Pembasahan lebih lanjut mengenai *Conditional Statements* terdapat [disini](../4_conditional_statements)

### Null Coalesce Operator

Operator *Null Coalesce* `??` juga tersedia dalam PHP.

*Null Coalesce* merupakan operator *type comparison* dimana operator akan mengecek nilai (*value*) suatu variabel apakah tersedia atau tidak (`Null`).

Untuk lebih lanjut coba perhatikan contoh di bawah ini :

```php
<?php

if(isset($data['name'])){
    $name = $data['name'];
} else {
    $name = "Kondiak";
}
```

Dalam contoh di atas expresi akan mengecek apakah $data['name'] tersedia dan memiliki nilai, jika tersedia maka variabel $name diset dengan nilai $data['name'], bila tidak tersedia maka data $name diset default dengan nilai (string) "Kondiak".

Contoh kode di atas dapat dituliskan dalam bentuk operator *Null Coalesce* sebagai berikut :

```php
<?php

$name = $data['name'] ?? "Kondiak";
```

Contoh di atas `(var) = (expr1) ?? (expr2)` menghasilkan `(var) = (expr2)` jika `(expr1)` bernilai `Null`, sebaliknya `(var) = (expr1) jika (expr1)` bernilai tidak Null (`notNull`).

> **Catatan**
>
> - Operator *Null Coalesce* merupakan sebuah ekspresi, jadi tidak meng-evaluasi suatu variabel, tetapi meng-evaluasi suatu ekspresi
> - Operator *Null Coalesce* digunakan untuk mempersingkat penulisan code
>
> ```php
> <?php
> 
> $ikan1 = null;
> $ikan2 = null;
> $ikan3 = "Bawal";
> $ikan4 = "Gurame";
>
> echo $ikan1 ?? $ikan2 ?? $ikan3 ?? $ikan4;       // Hasil "Bawal"
> echo $ikan1 ?? $ikan2 ?? $ikan4 ?? $ikan3;       // Hasil "Gurame"
> ```

### Referensi

- [W3School - PHP Operator](https://www.w3schools.com/php/php_operators.asp)
- [php.net - Manual](https://www.php.net/manual/en/)

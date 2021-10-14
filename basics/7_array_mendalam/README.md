# Array Mendalam
Dalam materi ini kita bahas mengenai Array lebih lanjut.
1. [Array](#1-array)
    - [Apa itu Array](#apa-itu-array)
    - [Bagaimana membuat Array](#bagaimana-membuat-array)
    - [Mengakses elemen Array](#mengakses-elemen-array)
2. [Jenis Array](#2-jenis-array)
    - [Array Index](#1-array-index)
    - [Array Asosiatif](#2-array-asosiatif)
3. [Array Multi Dimensi](#3-array-multi-dimensi)
4. [Manipulasi Array](#4-manipulasi-array)
    - [Menghitung ukuran array](#menghitung-ukuran-array)
        - [sizeof](#a-sizeof)
        - [count](#b-count)
    - [Mendapatkan nilai dari array](#mendapatkan-nilai-dari-array)
        - [array_keys](#a-arraykeys)
        - [array_values](#b-arrayvalues)
    - [Mengubah element pada array](#mengubah-element-pada-array)
        - [array_push](#a-arraypush)
        - [array_pop](#b-arraypop)
        - [array_shift](#c-arrayshift)
        - [array_unshift](#d-arrayunshift)

## 1. Array
### Apa itu Array
Pada [materi](../2_variable_datatype) sebelumnya kita sudah berkenalan dengan tipe data berbentuk Array, jadi apa itu Array?.
Sebuah Array adalah data struktur yang dapat menyimpan beberapa atau lebih elemen(parameter/nilai/variable) dalam satu variable, dan elemen ini tersimpan dalam bentuk pasangan key-value yang saling terhubung satu sama lain. Dalam pelaksanaan nya kita dapat menggunakan array kapan saja saat kita ingin menyimpan daftar elemen(tabel elemen).

Array dapat menampung hampir semua tipe data dan bisa menampung berbagai macam tipe data dalam satu array, walaupun demikian dalam pelaksanaannya penggunaan Array memiliki elemen dengan tipe data yang sama.

Bahasa Pemograman PHP tidak memproses atau meng-alokasikan memori sebagai mana pada bahasa pemograman lain memproses memori untuk array, sehingga array dalam php hampir tidak memiliki keterbatasan kecuali maksimum memori yang dapat digunakan oleh php itu sendiri. sebagai contoh dalam bahasa pemograman lain array memiliki alokasi memori saat di deklarsikan dan array tersebut memiliki ukuran tetap, tidak dapat di tambahkan atau dikurangi (array bertipe statis), berbeda dengan array dalam PHP bersifat dinamis, dimana kita dapat menambah dan mengurangi ukuran dari array tersebut, dan memiliki kebebasan penuh dalam menetukan key dari elemen array.
>** Catatan **
>Key dari array bertipe Integer atau string, untuk tipe decimal otomatis di konversi kedalam integer oleh php

Array sering di-sinonim-kan sebagai tabel, walaupun bukan, tetapi tabel sering di-implementasikan dalam bentuk array.

sebagai contoh kita memiliki parameter berisi beberapa nama kota di indonesia, jika tidak memiliki array maka kita akan mebuat begitu banyak variable, di mana setiap kota memiliki variable sendiri, dengan array kita hanya butuh mendeklarasikan satu variable, contoh :
```php
<?php
    $kota = array('Padang','Payakumbuh','Solok','Batu Sangkar','Pariaman');
?>
``` 
Seperti kita lihat dalam contoh kita telah memiliki sebuah varibale `$kota` yang berisi beberapa nama kota, dan array ini dapat kita tambahkan elemen baru di waktu lain.

Kita dapat menggunakan berbagai macam cara untuk berinteraksi dengan array dan hal ini akan kita perlajari bersama pada materi berikutnya.


### Bagaimana Membuat Array
Setelah kita mengenal apa itu Array, sekarang kita akan mencoba membuat atau menginialisasikan sebuah Array.
Ada beberapa macam cara untuk membuat array, pada umumnya array di buat dengan fungsi `array()` yang akan menugaskan suatu variable menjadi sebuah Array.
```php
<?php
    $data = array();
?>
```
Dari kode diatas dapat kita lihat variable `$data` ditugaskan sebagai sebuah Array dengan nilai Kosong. Kemudian sejak PHP 5.4 diperkenalkan penggunaan kurung siku dalam mendeklarasikan sebuah Array
```php
<?php
    $variable = [];
?>
```
kedua syntax diatas memiliki fungsi yang sama, kemudian mari kita tambahkan elemen kedalam Array.
```php
<?php
    $variable = [];     //membuat sebuah variable array dengan nama variable
    
    // Menambahkan elemen
    $variable[] = 'Padang';
    $variable[] = 'Batu Sangkar';
    $variable[] = 'Payahkumbuh';

    //Tampilkan elemen array
    echo '<pre>';
    print_r($variable);
?>
```
Baris kode di atas akan menghasilkan data di bawah ini:
```html
Array
(
    [0] => Padang
    [1] => Batu Sangkar
    [2] => Payahkumbuh
)
```
Kode diatas juga bisa ganti dengan syntax yang lebih pendek dengan mendeklarasikan array dan nilainya sekaligus
```php
<?php
    $variable = ['Padang', 'Batu Sangkar', 'Payahkumbuh'];
?>
```
[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](1_array.php#L10-L28)

### Mengakses Elemen Array
Setelah membuat dan menyimpan array, tentunya kita akan mengakses elemen pada array pada saat dibutuhkan, untuk mengakses kita dapat mengguakan syntax sebagai berikut :
```php
<?php
    $var[index];        //Array Index
    $var['key'];        //Array Asosiatif
?>
```
Pada materi [`Bagaimana Membuat Array`](#bagaimana-membuat-array), kita telah membuat sebuat array yang berisi nama kota yaitu 'Padang', 'Batu Sangkar', 'Payakumbuh'. Sekarang kita ingin menggunakan nilai 'Batu Sangkar' dan melakukan echo ke tampilan. Array di atas berupa array linear dengan key berupa index yang dimulai dari `0`, nilai 'Batu Sangkar' terdapat di barisan kedua sehingga memiliki index `1`, untuk mengakses nya kita gunakan syntax sebagai berikut :
```php
<?php
    echo $kota[1];
?>
``` 
dengan demikian kita telah bisa membuat dan mengakses sebuah Array.

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](1_array.php#L29-L34)

## 2. Jenis Array
Berdasarkan Jenis Key yang terdapat dalam elemen Array, Array dapat dikelompokan menjadi 2 yaitu :
### 1. Array Index
Array yang memiliki Key/Index berupa angka/bilangan integer akan tergabung dalam Array jenis ini atau disebut Numerical Index Array, array yang kita buat pada contoh-contoh di atas termasuk kedalam jenis Array Index, dimana index nya berupa integer yang dibuat secara otomotis oleh sistem dengan nilai pertama dari index adalah `0`.

Untuk Array Index yang key awalnya tidak kita definisikan maka secara otomatis menjadi `0`, sebagai contoh :
```php
<?php
    $kota = ['Padang', 'Batu Sangkar', 'Payakumbuh'];
?>
```
Karena tidak ditemukan key yang didefinisikan maka sistem secara otomotis membuat index key berupa `Integer` yang di mulai dari `0`, sehinga menghasilkan

| Key | Nilai                                   |
|:---:| ----------------------------------------|
| [`0`] | Padang                                  |
| [`1`] | Batu Sangkar                            |
| [`2`] | Payakumbuh                              |

kita juga bisa mendifinisikan index pertama dari Array tersebut, sebagai contoh :
```php
<?php
    $kota = [5 => 'Padang', 'Batu Sangkar', 'Payakumbuh'];
?>
```
maka index dari array tersebut dimulai dari 5 yaitu : `5` = Padang, `6` = Batu Sangkar, `7` = Payakumbuh. Berbeda dengan beberapa bahasa pemograman lain bukan, dimana index sebuah array harus dimulai dari `0`.
Dan hal ini berlaku bila index yang di definisikan adalah index pertama, bagai mana jika index yang kita definisikan bukan index pertama, ini tetap bisa dilakukan, PHP akan mengenali dimana saat index terdefinisi, tetapi sebelum ditemukan index yang terdefinisi PHP secara otomotis tetap membuat index yang dimulai dari `0`, sebagai contoh:
```php
<?php
    $kota ['Padang', 'Bukit Tinggi', 8 => 'Batu Sangkar', 'Payakumbuh', 'Padang Panjang'];    //Nilai Kedua memiliki index berupa Integer

    print_r($kota);                                         //Menampilkan Hasil
?>
```
Syntax di atas secara otomotis PHP mengenali bahwa pada index ketiga key terdefinisikan sebagai (`integer`) `8`, dengan demikian PHP tidak memulai index dari `8` tetapi tetap dari `0` untuk elemen yang terdapat sebelum key `8` ditemukan dan melajutkan key `8` untuk elemen yang terdapat setelahnya, sehingga hasil `print_r` diatas akan menghasilkan,
```html
Array
(
    [0] => Padang
    [1] => Bukit Tinggi
    [8] => Batu Sangkar
    [9] => Payakumbuh
    [10] => Padang Panjang
)
```
Wah.. cukup dinamis bukan!!!
> ** Penting **
>
> Kesimpulan : dalam PHP Array Index adalah array yang memiliki key berupa angka Integer, bilangan desimal atau lainnya akan di konversi menjadi integer oleh php dan data bertipe boolean akan di konversi menjadi integer dengan nilai `0` dan `1`.

Untuk memahami lebih lanjut kita dapat pelajari contoh kode.

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](2_jenis_array.php#L11-L22)

### 2. Array Asosiatif
Array Asosiatif tidak jauh beda dengan array index, yang membedakan hanya key array asosiatif berupa `string`. jadi kita tidak akan membahas lebih lanjut.
Inti nya semua Array yang key nya telah di definisikan berupa `string` termasuk dalam array asosiatif ini.
contoh membuat array asosiatif:
```php
<?php
    $propinsi = ['nama' => 'Sumatera Barat', 'ibukota' => 'Padang'];        //Membuat Array

    print_r($propinsi);                                                     //Menampilkan Array
?>
```
dari contoh di atas kita memiliki sebuah array dengan dua elemen, dimana elemen pertama memiliki key berupa `string` yang bernilai `nama` dan elemen kedua key juga berupa `string` yang bernilai `ibukota`. Sehingga hasil dari perintah `print_r` yang kita buat akan menampilkan.
```html
Array
(
    [nama] => Sumatera Barat
    [ibukota] => Padang
)
```
Untuk mengakses data tersebut sama caranya dengan Array index hanya key yang tadi berupa index kita rubah menjadi string contoh kita ingin memanggil data Padang.
```php
<?php
    echo $kota['ibukota'];          //tampilkan elemen array dengan key ibukota
?>
```
[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](1_jenis_array.php#L24-L29)

** TAMBAHAN **

Array Index dan Array Asosiatif dapat digabungkan menjadi satu, dengan aturan sama yang terdapat dalam *Array Index* bagi elemen yang key nya tidak terdefinisikan.
contoh :
```php
    $data = ['mangga', 'apel', 'sayur' => 'bayam', 'lauk' => 'daging', 8 => 'jeruk', 'markisa'];

    print_r($data);
```
perintah `print_r` diatas akan menapilkan hasil
```html
Array
(
    [1] => mangga
    [2] => apel
    [sayur] => bayam
    [lauk] => daging
    [8] => jeruk
    [9] => markisa
)
```
[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](1_array.php#L31-L45)

Akhirnya kita sudah mengenal apa itu array index dan array asosiasif.

## 3. Array Multi Dimensi
Pada pembahasan diatas kita sudah membuat dan mengkases data array dengan nilai elemennya berupa integer dan string, dan kita juga sudah mengetahui bahwa array dapat menampung tipe data hampir apa saja, termasuk data array itu sendiri.

Bila terdapat data Array dalam nilai elemen sebuah Array maka Array itu disebut Array Multi Dimensi(*Multidimensional Array*), Array yang telah kita pelajari sebelumnya adalah Array Linear (Array Satu Dimensi).

Dalam pelajaran matematika di sekolah kita pernah mempelajari yang namanya matrix, nah Array Dua dimensi juga dikenal sebagi Array Matrix (*matrice array*). dimana Array Dua Dimensi(*note :* Termasuk kedalam Multi Dimensi Array) memiliki Kolom dan Baris seperti tabel. dan Table sering di implementasikan kedalam Array Dua Dimensi ini.

sebagai contoh :
```php
<?php
    $data = [
        ['AA','AB'],
        ['BA','BB']
    ];
?>
```
Maka array diatas akan membentuk matrix berukuran 2x2 seperti ilustrasi
<p align="center">
    <img src="../../assets/content/basics/7_array_mendalam/memori_array.png">
</p>

untuk mengakses nilai array tersebut kita memakai syntax <code> $data[baris][kolom] </code> atau dengan metode perulangan [Nested Foreach](../5_perulangan/#nested-foreach).
```php
<?php
    echo $data[1][0];   //hasil BA
?>
```
[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](3_1_array_multidimensi.php)

untuk lebih memahami coba kita implementasikan sebuah tabel kedalam array.

* ### tabel 1. contoh

| No |username| nama |status          |
|:--:|:-------|:-----|:---------------|
| 1 |wildanie12|Badar Wildani|Member, Owner|
| 2 |mhaikalla|M Haikal Anatam|Member, Contributor|
| 3 |adhywiranto44|Adhy Wiranto|Member, Admin|
| 4 |nomadkode|Ramset|Member, Admin|
| 5 |kondiak|Ricky Hadinata|Contributor|

Tabel di atas kita simpan kedalam satu variable data bertipe array dengan cara :
```php
<?php
    $tabelcontoh = [
        1 => ['username' => 'wildanie12', 'nama' => 'Badar Wildani', 'status' => ['Member', 'Owner']],          //Baris pertama dari tabel
        2 => ['username' => 'mhaikalla', 'nama' => 'M Haikal Anatam', 'status' => ['Member', 'Contributor']],   //Baris kedua dari tabel
        3 => ['username' => 'adhywiranto44', 'nama' => 'Adhy Wiranto', 'status' => ['Member', 'Admin']],        //Baris ketiga dari tabel
        4 => ['username' => 'nomadkode', 'nama' => 'Ramset', 'status' => ['Member', 'Admin']],                  //Baris keempat dari tabel
        5 => ['username' => 'kondiak', 'nama' => 'Ricky Hadinata', 'status' => 'contributor']                   //Baris kelima dari tabel
    ];
?>
```
kode diatas telah menyimpan data [tabel 1. Contoh](#tabel-1-contoh) kedalam Multi Dimensi Array (tepatnya tiga dimensi array), saat kita melakukan perintah `print_r` terhadap array tersebut akan menghasilkan tampilan seperti ini

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](3_2_implementasi_table_array.php)

Untuk mengakses data tabel tersebut kedalam tabel kita dapat menggunaan beberapa metode perulangan. [![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](3_3_array_kedalam_table.php)

> **Dimensi Array**
> Walaupun Array memiliki dimensi yang tidak terbatas, tetapi array yang memiliki 4 dimensi dan lebih akan sulit dikelola, sehingga akan lebih efisien menggunakan array berdimensi sebatas 3.

Untuk contoh penggunaan matrix Array kita bisa pelajari implementasi [Algoritma BackTracking pada PathFinding](../../algorithms/BackTracking/PathFinding) atau [algoritma Sorting](../../algorithms/Sorting) untuk linear Array.

## 4. Manipulasi Array

Disaat menggunakan array kita akan dihadapkan dengan berbagai skenario yang mengharuskan kita melakukan manipulasi pada array, seperti menambah value, menghapus value, dan lainnya.

Terdapat berbagai macam manipulasi array yang dapat kita lakukan, yaitu :

### Menghitung ukuran array

Untuk menghitung elemen yang terdapat didalam sebuah Array dapat menggunakan dua fungsi yaitu `sizeof()` dan `count()`, kedua syntax tersebut memiliki tujuan dan fungsi yang sama, dimana `sizeof()` adalah nama lain dari `count()`. dengan penggunaan syntax sebagai berikut

#### a. sizeof

```php
sizeof(array $arr, int $mode = 0) : int
```

**Parameter**

- `$arr` Diisi dengan variable array yang akan dicari jumlah elementnya _(wajib diisi)_
- `$mode` Diisi dengan nilai **0** atau **1** _(opsional)_
    - **0** atau **COUNT_NORMAL** - Default, tidak akan menghitung element dari array multidimensi di dalamnya _(linear)_.
    - **1** atau **COUNT_RECURSIVE** - Akan menghitung jumlah element dari array multidimensi di dalamnya _(recursive)_.

**Hasil**

- Jumlah element pada array
 
**Contoh penggunaan**

```php
$creators = ['taylor otwell', 'caleb porzio', 'evan you'];

echo sizeof($creators);  // 3
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](4_manipulasi_array_sizeof_1.php)

atau 

```php
$tools = [
    [
        'author' => 'taylor otwell',
        'products' => ['laravel', 'forge', 'vapor'],
    ],
    [
        'author' => 'caleb porzio',
        'products' => ['alphine.js', 'laravel livewire'],
    ],
];

echo sizeof($tools);        // 2
echo sizeof($tools, false); // 2
echo sizeof($tools, 0);     // 2
echo sizeof($tools, true);  // 11
echo sizeof($tools, 1);     // 11
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](4_manipulasi_array_sizeof_2.php)

#### b. count

```php
count(array $arr, int $mode = 0) : int
```

**Parameter**

- `$arr` Diisi dengan variable array yang akan dicari jumlah elementnya _(wajib diisi)_
- `$mode` Diisi dengan nilai **0** atau **1** _(opsional)_
    - **0** atau **COUNT_NORMAL** - Default, tidak akan menghitung element dari array multidimensi di dalamnya _(linear)_.
    - **1** atau **COUNT_RECURSIVE** - Akan menghitung jumlah element dari array multidimensi di dalamnya _(recursive)_.

**Hasil**

- Jumlah element pada array

**Contoh Penggunaan**

```php
$array = [
    ['sepeda', 'motor', 'mobil'],
    ['gantole', 'helikopter', 'pesawat'],
];

echo count($array);                     //COUNT_NORMAL Mode menghasilkan nilai : 2
echo count($array, COUNT_RECURSIVE);    //COUNT_RECURSIVE Mode menghasilkan nilai : 8
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](4_manipulasi_array_count.php)

### Mendapatkan nilai dari array

#### a. array_keys

Untuk mendapatkan key dari suatu array.

```php
array_keys(array $arr, ?string $value = null, ?bool $strict) : array
```

**Parameter**

- `$arr` array yang akan digunakan _(wajib diisi)_
- `$value` nilai dari key yang akan kita ambil _(opsional)_
- `$strict` apakah spesifik dengan tipe datanya atau tidak? _(opsional)_

**Hasil**

- `Array`

**Contoh Penggunaan**

```php
$cars = [
    'japan' => 'toyota',
    'germany' => 'bmw',
];

print_r(array_keys($cars));                 // ['japan', 'germany']
print_r(array_keys($cars, 'bmw'));          // ['germany']
print_r(array_keys($cars, 'bmw', true));    // ['germany']
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](4_manipulasi_array_array_keys.php)

#### b. array_values

Untuk mendapatkan nilai dari suatu array.

```php
array_values(array $arr) : array
```

**Parameter**

- `$arr` array yang akan digunakan _(wajib diisi)_

**Hasil**

- `Array`

**Contoh Penggunaan**

```php
$cars = [
    'japan' => 'toyota',
    'germany' => 'bmw',
];

print_r(array_values($cars));   // ['toyota', 'bmw']
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](4_manipulasi_array_array_values.php)

### Mengubah element pada array

#### a. array_push

Untuk menambahkan element pada bagian **akhir** array.

<p align="center">
    Sebelum <code>array_push</code> :<br>
    <img src="../../assets/content/basics/7_array_mendalam/array push __sebelum_push.svg" alt="Sebelum array push">
</p>

<p align="center">
    Setelah <code>array_push</code> :<br>
    <img src="../../assets/content/basics/7_array_mendalam/array push __setelah_push.svg" alt="Setelah array push">
</p>

```php
array_push(array &$arr, mixed ...$values) : int
```

> **mixed** berarti bertipe data campuran <br>
> **...$values** berarti dapat diisi nilai `1,2,3`, contoh: `array_push($letters, 'a', 'b')`

**Parameter**

- `$arr` array tujuan
- `$values` nilai element baru, yang akan ditambahkan

**Hasil**

- Jumlah element setelah ditambahkan

**Contoh Penggunaan**

```php
$cars = ['bmw', 'toyota'];

array_push($cars, 'daihatsu');          // 3
array_push($cars, 'mitsubisi', 'audi'); // 5

// $cars = ['bmw', 'toyota', 'daihatsu', 'mitsubisi', 'audi']
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](4_manipulasi_array_array_push.php)

#### b. array_pop

Untuk mengeluarkan element bagian **akhir** pada array.

<p align="center">
    Sebelum <code>array_pop</code> :<br>
    <img src="../../assets/content/basics/7_array_mendalam/array pop __sebelum_pop.svg" alt="Sebelum array pop">
</p>

<p align="center">
    Setelah <code>array_pop</code> :<br>
    <img src="../../assets/content/basics/7_array_mendalam/array pop __setelah_pop.svg" alt="Setelah array pop">
</p>

```php
array_pop(array &$arr) : mixed
```

**Parameter**

- `$arr` array yang akan dikeluarkan element terakhirnya.

**Hasil**

- Element yang dikeluarkan.

**Contoh Pengunaan**

```php
$cars = ['bmw', 'toyota'];

array_pop($cars);   // 'toyota'

// $cars = ['bmw']
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](4_manipulasi_array_array_pop.php)

#### c. array_shift

Untuk mengeluarkan element **pertama** pada array.

<p align="center">
    Sebelum <code>array_shift</code> :<br>
    <img src="../../assets/content/basics/7_array_mendalam/array shift __sebelum_shift.svg" alt="Sebelum array shift">
</p>

<p align="center">
    Setelah <code>array_shift</code> :<br>
    <img src="../../assets/content/basics/7_array_mendalam/array shift __setelah_shift.svg" alt="Setelah array shift">
</p>

```php
array_shift(array &$arr) : mixed
```

> **mixed** berarti bertipe data campuran. <br>
> tanda **&** pada `$arr` berarti akan mengubah nilai dari `$arr`

**Parameter**

- `$arr` array yang akan dikeluarkan element pertamanya.

**Hasil**

- Element yang dikeluarkan.

**Contoh Penggunaan**

```php
$cars = ['bmw', 'toyota'];

array_shift($cars);   // 'bmw'

// $cars = ['toyota']
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](4_manipulasi_array_array_shift.php)

#### d. array_unshift

Untuk menambahkan element di posisi **pertama** pada array.

<p align="center">
    Sebelum <code>array_unshift</code> :<br>
    <img src="../../assets/content/basics/7_array_mendalam/array unshift __sebelum_unshift.svg" alt="Sebelum array unshift">
</p>

<p align="center">
    Setelah <code>array_unshift</code> :<br>
    <img src="../../assets/content/basics/7_array_mendalam/array unshift __setelah_unshift.svg" alt="Setelah array unshift">
</p>

```php
array_unshift(array &$arr, mixed ...$values) : int
```

> **mixed** berarti bertipe data campuran. <br>
> tanda **&** pada `$arr` berarti akan mengubah nilai dari `$arr`. <br>
> **...$values** berarti dapat diisi nilai `1,2,3`, contoh: `array_push($letters, 'a', 'b')`

**Parameter**

- `$arr` array yang akan ditambahkan element pertamanya.
- `$values` nilai element baru, yang akan ditambahkan.

**Hasil**

- Jumlah element setelah ditambahkan

**Contoh Penggunaan**

```php
$cars = ['bmw', 'toyota'];

array_push($cars, 'daihatsu');          // 3
array_push($cars, 'mitsubisi', 'audi'); // 5

// $cars = ['mitsubisi', 'audi', 'daihatsu', 'bmw', 'toyota']
```

[![](https://img.shields.io/static/v1?&label=Lihat%20Contoh&message=%3e&color)](4_manipulasi_array_array_unshift.php)

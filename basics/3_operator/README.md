# Operator

Dalam bahasa pemrograman, operator digunakan untuk melakukan operasi terhadap variabel dan nilai. Dalam PHP, operator dibagi menjadi beberapa bagian yakni:
1. [Operator Aritmatika](#operator-aritmatika)
    - [Penambahan](#penambahan)
    - [Pengurangan](#pengurangan)
    - [Perkalian](#perkalian)
    - [Pembagian](#pembagian)
    - [Modulus](#modulus)
    - [Pangkat/Exponensial](#exponensial)
2. [Operator Penugasan/Assignment](#operator-penugasan)
    - [Penugasan Aritmatik](#operator-penugasan-aritmatik)
    - [Penugasan Bitwise](#operator-penugasan-bitwise)
    - [Penugasan Lainnyas](#operator-penugasan-lainnya)
3. [Operator Pembanding/Comparison](#operator-pembanding)
4. [Operator Logika/Logical](#operator-logical)
5. [Operator Bitwise](#operator-bitwise)
    - [Bitwise AND](#bitwise-and)
    - [Bitwise Or (Inclusive OR)](#bitwise-or)
    - [Bitwise Xor (Exclusive OR)](#bitwise-xor)
    - [Bitwise Non](#bitwise-non)
    - [Bitwise Shift](#bitwise-shift)
6. Conditional Assignment
7. [Operator Increment/Decrement](#operator-increment/decrement)
8. [Operator String](#operator-string)
9. [Operator Array](#operator-array)
10. Lainnnya

## Operator Aritmatika
Masih ingat dengan dasar matematika Kabataku (kali bagi tambah kurang), yang kita pelajari di sekolah?.
Operator aritmatika digunakan dengan cara yang sama dengan pelajaran tersebut.

Operator Aritmatika digunakan untuk memanipulasi bilangan-bilangan numerik sederhana, seperti yang sering kita lakukan dalam sehari-hari seperti penjumlahan, pengurangan, perkalian, pembagian dan lainnya.

Secara umum operator aritmatika disusun sebagai berikut :

<b>Table Operator Aritmatika</b>

| Symbol | Nama | Contoh | Keterangan                                                                                                                                                                                                          |
| --- | ----------- | ---- |------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `+` | Penambahan | $a + $b | Jumlah dari nilai $a dan $b
| `-` | Pengurangan | $a - $b | Selisih dari nilai $a dan $b
| `*` | Perkalian | $a * $b | Perkalian dari nilai $a dan $b
| `/` | Pembagian | $a / $b | nilai $a dibagi dengan nilai $b
| `%` | Modulus | $a % $b | sisa dari nilai $a di bagi nilai $b
| `**` | Exponensial | $a ** $b | Hasil dari nilai $a pangkat nilai $b ( $a <sup><em>$b</em></sup> )

> ** Catatan **
> Operator Aritmatika Hanya digunakan untuk operasi numerik,
> Untuk manipulasi string dapat menggunkan operator string

<br>
### Penambahan

Penambahan adalah operasi yang paling dasar, dalam bentuk sederhananya penjumlahan adalah penggabungan 2 angka atau bilangan menjadi satu angka atau bilangan dari jumlah dari angka atau bilangan tersebut (seperti 2 + 3 = 5).

Dalam PHP operator penjumlahan menggunakan symbol/syntax `+`.

contoh :

```php
<?php
    $a = 10;
    $b = 15;

    echo ($a + $b);     //hasil 25
    echo (12 + 15);     //hasil 27
?>
```
<br>
### Pengurangan
Sama dengan operator penambahan. Pengurangan juga upaya dalam menggabungkan dua suku angka bilangan menjadi satu suku angka atau bilangan, dengan hasil selisih dari kedua suku angka atau bilangan (3 - 2 = 1).

Dalam PHP operator ini menggunkan symbol/syntax `-`.

contoh :
```php
<?php
    $a = (int) 15;
    $b = (int) 10;

    echo ($a-$b);       //hasil 5
    echo (15-9);        //hasil 6
?>
```
> ** Catatan **
> Syntax `+`, `-` juga digunakan dalam operasi penentuan indentitas dari bilangan seperti (+5) yang lebih dikenal dengan 
> bilangan positif dan (-5) yang lebih dikenal dengan bilangan negatif <br>
> berlaku sebagaimana dalam aritmatika bahwa (+) x (+) = (+), (+) x (-) = (-), (-) x (+) = (-), (-) x (-) = (+) atau lebih jelasnya +(-5) = (-5) dan -(-5) = (+5)


### Perkalian
Perkalian dalam PHP mengguankan symbol/syntax (`*`)

contoh penggunaan :
```php
<?php
    $a = (int) 4;
    $b = (int) 2;

    echo ($a*$b);   //hasil 8
    echo (4*2);     //hasil 8
?>
```

### Pembagian
Pembagian dalam PHP menggunakan symbol/syntax (`/`)

Operator pembagian (`/`) akan menghasil nilai `float` kecuali kedua bilangan di tentukan dalam type `integer` ( atau string yang di konversikan menjadi int ) dan hasil pembagian berupa bilangan bulat, maka dalam hal ini akan menghasilkan nilai `integer`.

contoh penggunaan :
```php
<?php
    $a = (int) 4;
    $b = (int) 2;

    echo ($a/$b);   //hasil 2
    echo (4/2);     //hasil 2
?>
```
### Modulus
Modulus adalah nilai sisa dari hasil pembagian, dimana pembagian tidak habis, bila pembagian hasil makan nilai modulus adalah Nol (0) sebagai contoh modulus 7:4 = 3 dan modulus 8:4 = 0 dimana 7:4 menghasilkan 1 bilangan bulat dan bersisa 3, sedangankan 8:4 menghasilkan 2 bilangan bulat tanpa ada sisa pembagian.

Dalam Operator modulus (`%`) sebelum memproses data sistem akan mengkonversi kedua operand/bilangan ke datatype `integer` dengan menghilangkan angka desimal dalam bilangan terlebih dahulu.

Hasil dari opertor modulus (`%`) akan memiliki tanda nilai yang sama dengan tanda pada nilai pembilang, — (jika pembilang bernilai positif maka hasilnya akan bernilai positif, jika pembilang bernilai negatif maka hasil akan bernilai negatif, tidak terpengaruh terhadap penyebut yang memiliki nilai positif ataupun negatif).

contoh penggunaan :
```php
<?php
    echo (5 % 2)."/n";   //hasil 1
    echo (5 % -2)."/n";  //hasil 1
    echo (-5 % 2)."/n";  //hasil -1
    echo (-5 % -2)."/n"; //hasil -1
?>
```

### Exponensial
Exponensial lebih dikenal secara umum sebagai bilangan pangkat atau dalam penulisan fungsi Matematika ditulis ~ <em>x <sup>y</sup></em>

Dalam PHP penulisan exponensial menggunakan symbol/syntax (`**`).

Contoh :
```php    
<?php 
    $a =(int) 2;
    $b =(int) 3;

    echo ($a ** $b);    //hasil 8
    echo (2 ** 3);      //hasil 8
?>
```
Demo kode dapat dilihat [disini](./1_operator_aritmatika.php)

## Operator Penugasan
Operator penugasan dasarnya adalah "`=`", mungkin pemikiran awal kita meng-anggap bahwa ini  sama dengan ( sebanding ), nyatanya bukan itu maksudnya tetapi nilai variable pada sisi sebelah kiri operator ditentukan/ditetapkan sebagaimana ekspresi yang terdapat pada bahagian sebelah kanan dari operator.

contoh:

```php
<?php
    $a = ($b = 4) + 3 // $a ditetapkan dengan nilai 7 dan $b ditetapkan dengan nilai 4 dimana $a = 4 + 3
?>
```

### Pembagian operator penugasan :

### Operator Penugasan Aritmatik

Contoh | Persamaan/Bentuk Lain | Keterangan
-----|-----------------------|:----------
$a += $b | $a = $a + $b | Penambahan nilai $a sebesar nilai $b
$a -= $b | $a = $a - $b | Pengurangan nilai $a sebesar nilai $b
$a *= $b | $a = $a * $b | Menggandakan ( perkalian ) nilai $a sebanyak nilai $b
$a /= $b | $a = $a / $b | Pembagian nilai $a sebanyak nilai $b
$a %= $b | $a = $a % $b | Modulus sama seperti pada operator Aritmatika

Operator Aritmatika dapat dipelajari lebih lanjut [disini](#operator-aritmatika)


### Operator Penugasan Bitwise

| Contoh | Persamaan/Bentuk Lain | Keterangan                                                                |
| ---- |-----------------------|--------------------------------------------------------------------------|
|$a &= $b| $a = $a & $b  | Bitwise `And`                         
|$a \|= $b| $a = $a \| $b | Bitwise `or`                        
|$a ^= $b| $a = $a ^ $b  | Bitwise `Xor`
|$a <<= $b| $a = $a << $b | Shift
|$a >>= $b| $a = $a >> $b | Shift

Operator Bitwise dapat dipelajari lebih lanjut [disini](#operator-bitwise)


### Operator Penugasan Lainnya

Contoh | Persamaan/Bentuk Lain | Keterangan
:-----|-----------------------|:----------
$a .= $b | $a = $a `.` $b | Penggabungan string
$a ??= $b | $a = $a ?? $b | Null Coalesce

untuk Null Coalesce dapat dipelajari lebih lanjut [disini](#null_coalesce_operator)


## Operator Pembanding
Operator pembanding ini digunakan untuk membandingkan dua variabel yang nilainya sama atau berbeda.

Operator | Nama | Contoh | Keterangan
:-------:|------|:------:|-----------
== | Sama/Setara | $a == $b | Akan bernilai `true` apabila nilai $a sama dengan $b
=== | Identik | $a === $b | Akan bernilai `true` apabila $a dan $b nilai dan tipe datanya itu sama
!= | Tidak sama | $a != $b | Akan bernilai `true` apabila nilai $a tidak sama dengan $b
\<> | Tidak sama | $a <> $b | Sama seperti di atas
!== | Tidak identik | $a !== $b | Akan bernilai `true` apabila $a dan $b nilai **atau** tipe datanya itu tidak sama
\> | Lebih besar dari | $a > $b | Akan bernilai `true` apabila nilai $a lebih besar dari $b
\< | Lebih kecil dari | $a < $b | Akan bernilai `true` apabila nilai $a lebih kecil dari $b
\>= | Lebih besar dari | $a > $b | Akan bernilai `true` apabila nilai $a lebih besar dari atau sama dengan $b
\<= | Lebih kecil dari | $a < $b | Akan bernilai `true` apabila nilai $a lebih kecil dari atau sama dengan $b
\<=> | Spaceship | $a <=> $b | Akan bernilai -1 apabila $a < $b, bernilai 0 apabila $a == $b, bernilai 1 apabila $a > $b

Contoh kodenya dapat dilihat [di sini](./3_comparison_operator.php).

## Operator Logika
Operator logika ini digunakan untuk menggabungkan pernyataan yang bersifat kondisional.

Operator | Nama | Contoh | Keterangan
:-------:|------|:------:|-----------
and / && | And | $x && $y | Akan bernilai `true` apabila $x **dan** $y bernilai `true`
or / \|\| | Or | $x \|\| $y | Akan bernilai `true` apabila $x **atau** $y bernilai `true`
xor | Xor | $x xor $y | Akan bernilai `true` apabila **hanya di antara** $x **atau** $y yang bernilai `true`, sebaliknya akan bernilai `false`
\! | Not | !$x | Akan bernilai `true` apabila $x bernilai `false` dan sebaliknya.

Contoh kodenya dapat dilihat [di sini](./4_logical_operator.php).
## Operator Bitwise
Bitwise operator adalah Operator yang disediakan oleh PHP untuk pengolahan, evalusai dan manipulasi logika dari bilangan binner(Binary).
Bilangan binner adalah bilangan yang hanya terdisi dari 2 angka yaitu angka `0` dan `1` sebagai contoh angka 7 dalam bilangan binner di tulis sebagai `0111` dalam 4 bits data.
bilangan binner pada dasarnya bahasa yang paling cepat dipahami mesin. pada dasarnya mesin atau komputer anda menerima perintah atau data dalam bentuk Binary (Binner)

Bilamana bilangan yang di eksekusi tidak berbentuk bilangan binner maka secara default PHP akan mengkonversi bilangan tersebut menjadi bilangan binner.

Operator bilangan binner ini sangat jarang digunakan, kecuali anda menulis program khusus untuk memproses bilangan binner.

pembagian operator bitwise sebagai berikut :

| Symbol | Nama    | Contoh       | Keterangan                                                                        |
|:------:|---------|:------------:|:----------------------------------------------------------------------------------|
| & | And | 0001 & 0011 | Menghasilkan bilangan binner baru dari penggabungan dua bilangan binner di mana data yang di ambil adalah bit 1 dalam barisan yang sama, sedangkan yang lainnya di anggap 0 pada contoh 3 & 1 mengasilkan 1 (0001)|
| \| | OR (inclusive) | 0001 \| 0011 | Menghasilak bilangan binner baru dari penggabungan dua bilangan binner dimana bits yang di ambil adalah semua bits dalam barisan yang bernilai 1, dalam contoh 1 \| 3 menghasilakan 3 (0011)|
| ^ | OR (exclusive) | 0001 ^ 0011 | Menghasilkan bilangan binner dengan mengambil bits dalam barisan yang tidak bernilai sama, dalam contoh 1 ^ 3 menghasilkan 2 (0010).|
| ~ | Not | ~ 0001 | Menghasilkan bilangan binner berupa semua bits dalam barisan kecuali bits yang terdapat pada variable, pada contoh menghasilkan -2 (1111111111111111111111111111111111111111111111111111111111111110) 64bits|
| <<= | Shift Left | 0001 <<= 2 | Menghasilkan bilangan biner dengan menggeser bit unit ke arah kiri sebanyak nilai(operand) yang ditetapkan disebelah kanan Operator, pada contoh 1(0001) <<= 2 menghasilkan 4 (0100).|
| >>= | Shift Right | 0001 >>= 1 | menghasilkan bilangan biner dengan menggeser bit pada baris kearah kanan sebanyak nilai (operand) yang ditetapkan disebelah kanan Operator, pada contoh 1(0001) >>= 1 menghasilkan 0 (0000).|

Berdasarkan table diatas dapat di jabarkan sebagai berikut :
### Bitwise And
Bitwise and merupakan operator penggabungan bilangan biner dimana nilai bit yang di ambil adalah 1 & 1 = 1, 1 & 0 = 0 dan 0 & 0 = 0, untuk lebih jelasnya kita perhatingan perhitungan di bawah ini :
```html

$a =(integer) 1; //dalam binner (0001) 4bits
$b =(integer) 3; //dalam binner (0011) 4bits

$c = $a & $b

dalam perhitungan binner
$a = 1      0 0 0 1    4bits
$b = 3      0 0 1 1    4bits
           --------- & (and)
$c = ??     0 0 0 1    4bits

atau $c dalam bentuk desimal = 1
```

Pada contoh perhitungan diatas dapat kita ambil dapat disimpulkan bahwa operator bitwise and menggabungan 2 bilangan binner dengan cara mengambil bit yang identik, selain bits yang identik di isi oeh nilai `0`.

### Bitwise OR
Operator bitwise inclusive OR (`|`) merupakan operator untuk menggabungan bilangan binner dengan mengambil bit bit dalam barisan yang mengandung nilai 1, barisan yang tidak terdapat nilai 1 akan di isi oleh nilai `0`

contoh perhitungan nya sebagai berikut :
```html

$a = 3;     //dalam bentuk binner (0011) 4bits
$b = 4;     //dalam bentuk binner (0100) 4bits

$c = $a | $b        //Operator OR bitwise

perhitungan
$a = 3          0 0 1 1     4bits
$b = 4          0 1 0 0     4bits
               --------- | (OR)
$c = ?          0 1 1 1     4bits
atau nilai $c dalam desimal = 7
```

Dari contoh diatas dapat kita lihat bahwa barisan yang mengandung nilai 1 akan di isi oleh nilai satu, sedangkan yang lainnya akan diisi oleh nilai 0.

### Bitwise XOR
Operator Bitwise exclusive OR ~ XOR (`^`) merupakan operator penggabungan bilangan binner di mana hasil di dapat berdasarkan pencocokan (comparison) barisan bilangan biner dimana barisan yang indentik akan mendapat nilai 0 sedangkan yang tidak sama mendapat nilai 0.

contoh perhitungan :

```html

$a = 1;     //dalam bentuk binner (0001) 4bits
$b = 3;     //dalam bentuk binner (0011) 4bits

$c = $a ^ $b        //XOR bitwise

Perhitungan XOR
barisan         1 2 3 4

$a = 1          0 0 0 1     4bits
$b = 3          0 0 1 1     4bits
               --------- ^ (XOR)
$c = ?          0 0 1 0     4bits
atau dalam bentuk desimal $c bernilai 2
```
Dari perhitungan diatas dapat kita simpulkan bahwa operator Bitwise Xor akan mencocokan nilai dalam barisan dimana barisan yang identik akan mendapat nilai 0 dan barisan yang tidak identik mendapatkan nilai 1.

### Bitwise Not
Operator Not akan membalikan nilai bit sebuah variable dari 0 menjadi 1, dan 1 menjadi 0 <br />
Dalam hal ini PHP membalikan semua bit dalam kasus sistem 64 bits. php menjadikan variable dalam bentuk binner 64 bits (digit). sehingga bila kita membalikan nilai dari 8 akan terjadi perhitungan sebagai berikut.

```html
$a = ~ 8;       // Bitwise Not

Perhitungan
8               00000000 00000000 00000000 00000000 00000000 00000000 00000000 00001000
               -------------------------------------------------------------------------
$a = ~8         11111111 11111111 11111111 11111111 11111111 11111111 11111111 111101111

$a dalam bentuk desimal = -9
```

### Bitwise Shift
Bitwise shift terdiri dari 2 yaitu shift ke kiri dan shift ke kana, operator ini akan menggeser nilai binner dari variable kearah yang ditentukan sebanyak nilai (operand) yang terdapat pada bagian kanan operator.

untuk pemahan kita perhatikan perhitungan dibawah ini :
```html
$a = 2;         // dalam bentuk binner (0010) 4bits

$b = $a <<= 2;  // Shift Left
$c = $a >>= 1;  // Shift Right

Perhitungan
barisan           5 4 3 2 1 

$a                  0 0 1 0                     4bits
                  ----------- <<=/>>= (shift)
$b                0 1 0 0 0    dalam 4 bits (1 0 0 0)
$c                    0 0 1    dalam 4 bits (0 0 0 1)

atau dalam desimal nilai $b = 8 dan nilai $c = 1
```
Dari perhitungan diatas kita lihat bahwa operator shift ini menggeser bilangan binner kekiri maupun kekanan sesuai arah yang ditentukan sebanyak nilai opreand bagian kanan operator dengan aturan setiap pergeseran ke kiri nilai paling kanan akan di isi oleh 0, dan setiap pergeseran kanan nilai paling kanan akann di hapus.

Demo code dapat dilihat [disini](./5_bitwise_operator.php)

## Operator Increment/Decrement
Increment/Decrement adalah menaikan atau menurunkan satu angka atau huruf berdasarkan urutannya.

PHP mendukung C-style pre dan post-increment dan decrement operator

> ** Catatan **
> Increment dan Decrement hanya dapat digunakan pada type data numerik dan string. data ber-type Array, Object, Boolean, dan 
> Resource tidak akan memiliki effect terhadapt operator ini. <br>
> Menurunkan nilai `Null` tidak akan menghasilkan nilai baru, tetapi menaikan nilai `Null` akan menghasilkan nilai `1`.

Increment dan Decrement Operator:

| Operator | Nama          | Keterangan                                                                                  |
| :------: | ------------- | ------------------------------------------------------------------------------------------- |
| ++$a     | pre-Increment | Menaikan nilai $a sebanyak 1, kemudian menghasilkan $a.                                     |
| $a++     | post-Increment| menghasilkan $a, kemudian menaikan nilai $a sebanyak 1.                                     |
| --$a     | pre-Decrement | menurunkan nilai $a sebanyak 1, kemudian menghasilkan $a.                                   |
| $a--     | post-Decrement| menghasilkan $a, kemudian menurunkan nilai $a sebanyak 1.                                   |

sebagai contoh :
```php
<?php
    // variable
    $a = 6;

    //Post Increment
    echo $a++;      //hasil $a sebelum increment (6)
    echo $a;        //hasil $a setelah increment (7)

    // Pre Increment
    echo ++$a;      //hasil $a setelah increment (7)
    echo $a;        //hasil $a setelah increment (7)

    // Post Decrement
    echo $a--;      //hasil $a sebelum decrement (6)
    echo $a;        //hasil $a setelah decrement (5)

    // Pre Decrement
    echo --$a;      //hasil $a setelah decrement (5)
    echo $a         //hasil $a setelah decrement (5)
?>
```

PHP mengikuti sistem Bahasa Perl's dalam melakukan operasi aritmatika terhadap variable karakter/huruf, bukan seperti yang di jalan oleh Bahasa C.

Sebagaimana dalam ekspresi <code>$a = 'Z' ; $a++; </code> pada PHP dan Perl's akan menghasilkan 'AA', sedangan Bahasa C akan mengkonversi menjadi nilai ASCII dari huruf `Z` ( yaitu 90 ), dan kemudian menambahkan 1 sehingga menghasilkan nilai `'` (ASCII 91).

untuk contoh dapat di lihat [disini](./7_increment_decrement_operator.php)
## Operator String
Ada dua jenis operator string, yang pertama adalah operator penggabungan string atau dikenal sebagai concatenation operator (`'.'`), dimana menghasilkan gabungan string dari argument bagian kiri dan kanan operator. Kedua adalah operator penggabungan penugasan atau dikenal dengan concatenation assignment operator (`'.='`), dimana menghasilkan penambahan argument dari bagian kanan operator kedalam argument yang terdapat di bagian kiri operator.

contoh :
```php
<?php
    // Variable
    $a = 'nama';

    //concatenation operator
    echo 'nama' . ' saya';      //hasil 'nama saya'
    echo $a . ' saya';          //hasil 'nama saya'

    //concatenation asignment operator
    echo $a .= ' saya';         //hasil 'nama saya'
?>
```

demo code terdapat [disini](./8_string_operator.php)

untuk selengkapnya dapat di pelajari [string manipulation](../6_manipulasi_string/)
## Operator Array
Operator Array kebanyakan adalah operator perbandingan(Comparison Operator) yang menghasilakn nilai boolean.
Operator Array di kelompokan sebagaimana terdapat dalam tabel berikut:

|Contoh|Nama|Keterangan                                                                         |
|------|----|-----------------------------------------------------------------------------------|
|$a + $b|Union|Menggabungkan data Array $a dengan data Array $b|
|$a == $b|Equlity|Menghasilkan nilai `true` jika Array $a dan $b memiliki key/value yang sama|
|$a === $b|Identity|Menghasilkan nilai `true` jika Array $a dan $b memiliki key/value yang sama serta urutan dan type yang sama (indentik)|
|$a != $b|Inequality|Menghasilkan nilai `true` jika Array $a tidak sama dengan Array $b|
|$a <> $b|Ineguality|Sama dengan penjelasan di atas|
|$ !== $b|Non-Indetical|Menghasilkan nilai `true` jika $a dan $b tidak identik|
> ** Catatan **
> variable $a dan $b merupakan data Array()

Operator penggabungan atau Union menghasilkan nilai hasil penambahan data Array( ) bagian kanan kedalam data Array( ) bagian kiri dari operator, dalam kasus diatas $b[ ] di tambahkan kedalam $a[ ], lebih jelasnya perhatikan contoh dibawah ini.

contoh union Array( ):
```php
<?php
$a = array('a'=>'nila', 'b'=>'gurame');
$b = array('a'=>'bawal', 'b'=>'lele', 'c'=>'bucuk');

$c = $a + $b;       //union $a dan $b
echo "Union dari \$a dan \$b: \n";
var_dump($c);

$c = $b + $a;       //Union $b dan $a
echo "Union dari \$b dan \$a: \n";
var_dump($c);

$a += $b;           //Union $a += $b sama dengan $a dan $b
echo "Union dari \$a += \$b: \n";
var_dump($a);
?>
```
bila code diatas dieksekusi pada terminal akan mengasilkan :
```html
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

demo code dapat anda lihat [disini](./9_array_operator.php)

Perbedaan terhadap Comparison dan Indentity dapat dilihat dari contoh di bawah ini  :

```php
<?php
    //Variable
    $a = array("bayam", "kangkung");
    $b = array(1 => "kangkung", "0" => "bayam");

    var_dump($a == $b);         //Equality menghasilkan nilai bool(true)
    var_dump($a === $b);        //Identity menghasilkan nilai bool(false)
?>
```

Selengkapnya mengenai data type Array dapat dipelajari [disini](../2_variable_datatype/#array)

### Operator Lainnya
salah satu operator khusus dalam PHP yaitu Operator Tenary (Conditional) dan Operator Null Coalesce Operator.

### Tenary Operator
Conditional Operator lainnnya adalah Operator Tenary `?;`
Operator tenary biasa digunakan untuk mempersingkat penulisan code conditional statement yaitu `If..Else`.

contoh :
```php
<?php
    //Conditonal Statement
    If(emty($data['name'])) {
        $name = "kondiak";
    } else {
        $name = $data['name'];
    }
?>
```
dengan menggunakan Operator Tenary dapat di tuliskan sebagai berikut :
```php
<?php
    $name = (empty($data['name'])) ? "kondiak" : $data['name'] ;
?>
```

demo code dapat dilihat [disini](./tenary_operator.php)

> ** Catatn **
> - Perlu diingat bahwa tenary operator digunakan pada conditional statement yang sederhana.
> - Untuk Conditional Statement yang rumit, lebih baik menggunakan Conditional Statement biasa seperti `If..elseif..else`, `switch`, atau lainnya.

Pembasahan lebih lanjut menganenai Conditional Statements terdapat [disini](../4_conditional_statements)

### Null Coalesce Operator
Operator Null Coalesce `??` juga tersedia dalam PHP.
Null Coalesce merupakan operator type comparison dimana operator akan mengecek value suatu variable apakah tersedia atau tidak (`Null`).

untuk lebih lanjut coba perhatikan contoh dibawah ini :
```php
<?php
    if(isset($data['name'])){
        $name = $data['name'];
    } else {
        $name = "kondiak";
    }
?>
```

dalam contoh di atas expresi akan mengecek apakah $data['name'] tersedia dan memiliki nilai, jika tersedia maka variable $name di set dengan nilai $data['name'], bila tidak tersedia maka data $name di set default dengan nilai (string) "kondiak".

contoh code di atas dapat di tuliskan dalam bentuk operator Null Coalesce sebagai berikut :
```php
<?php
    $name = $data['name'] ?? "kondiak";
?>
```
contoh diatas (var) = (expr1) ?? (expr2) menghasilkan (var) = (expr2) jika (expr1) bernilai `Null`, sebaliknya (var) = (expr1) jika (expr1) bernilai tidak Null (`notNull`).

> ** catatan ** <br />
> - Operator Null Coalesce merupakan sebuah ekspresi, jadi tidak meng-evaluasi suatu variable, tetapi meng-evaluasi suatu ekspresi <br />
> - Operator Null Coalesce digunakan untuk mepersingkat penulisan code
> ```php
><?php
>    $ikan1 = null;
>    $ikan2 = null;
>    $ikan3 = "bawal";
>    $ikan4 = "gurame";
>
>    echo $ikan1 ?? $ikan2 ?? $ikan3 ?? $ikan4;       //hasil "bawal"
>    echo $ikan1 ?? $ikan2 ?? $ikan4 ?? $ikan3;       //hasil "gurame"
>?>
> ```

### Referensi
- [W3School - PHP Operator](https://www.w3schools.com/php/php_operators.asp)
- [php.net - Manual](https://www.php.net/manual/en/)

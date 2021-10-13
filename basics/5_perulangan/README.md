Daftar Materi Perulangan.
1. [Perulangan For](#1-perulangan-for)
2. [Perulangan Foreach](#2-perulangan-foreach)
3. [Perulangan While](#3-perulangan-while)
4. [Perulangan Do While](#4-perulangan-do-while)

# Perulangan
Loop digunakan untuk mengeksekusi blok kode yang sama berulang kali, selama kondisi tertentu benar atau bernilai true.

Berikut adalah jenis loop yang ada di PHP.

|  Jenis   | Keterangan                                                                                    |
| :------: | --------------------------------------------------------------------------------------------- |
|   [for](#1-perulangan-for)    | loop melalui blok kode beberapa kali                                                          |
| [foreach](#2-perulangan-foreach)  | loop melalui blok kode untuk setiap elemen dalam array                                        |
|  [While](#3-perulangan-while)   | loop melalui blok kode selama kondisi yang ditentukan benar                                   |
| [do while](#4-perulangan-do-while) | loop melalui blok kode satu kali, dan kemudian mengulangi loop selama kondisi yang ditentukan |

## 1. Perulangan For
Perulangan for atau secara umum dikenal dengan For Loops adalah metode perulangan paling komplex dalam bahasa pemograman PHP.

For Loops secara umum ditulis dalam contoh baris code berikut :
```php
<?php
    for(exp1, exp2, exp3)
        statement
?>
```
Perulangan Loop akan mengeksekusi expresi pertama (exp1) sesaat setelah prosedure loop dimulai dan ini hanya dieksekusi sekali selama putaran perulangan terjadi, dimana pada umumnya expresi pertama berisi argument penugasan/assignment. Contoh : $i = 1;

Expresi kedua (exp2) pada umumnya berisi conditional statement dimana perulangan ini akan mengevaluasi nilai expresi kedua, selama expresi kedua menghasilkan nilai `true` maka statement perulangan akan terus dieksekusi. contoh exp2 : $i < 10;

Diakhir setiap sirkulas Perulangan, ekspresi ketiga (exp3) akan dieksekusi. dan kemudian memulai sirkulasi selanjutnya, selama expresi kedua menghasilkan nilai true.

Setiap ekspresi bisa saja kosong atau memiliki lebih dari 1 (satu) argument yang dipisahkan oleh tanda `,`. 
semua argument yang ada dalam ekspresi kedua akan dieksekusi dan hanya argument terakhir yang diperhitungan sebagai hasil expresi. Jika ekspresi kedua ini kosong, maka perulangan akan berjalan terus, seolah expresi kedua ini selalu menghasilkan nilai true, untuk menghentikan perulangan seperti ini kita dapat membuat conditional statement untuk menentukan kapan perulangan berakhir.

Diagram alur perulangan For :
<p align="center">
    <img src="../../assets/content/basics/5_perulangan/for_loop.png">
</p>

dari diagram diatas kita bisa menulis code contoh sebagai berikut:
```php
<?php
    // contoh 1.For secara umum
    for ($i = 1; $i <= 5; $i++;){
        echo $i;
    }

    //Contoh 2. Alternatif Colon Syntax
    for($i = 1; $i <= 5; $i++):
        Echo $i;
    endfor;

    // contoh 3. For tanpa truth expression
    for ($i = 1; ; $i++){
        if($i>5){
            break;
        }else{
            echo $i;
        }
    }

    // contoh 4. For tanpa expression
    $i = 1;
    for ( ; ; ){
        if($i>5){
            break;
        } else {
            echo $i;
            $i++;
        }
    }

    // contoh 5. expression memiliki 2 argument atau lebih
    for ($i = 1, $j = 0; $i <= 5; $j += $i, print $i, $i++);
?>
```
keempat contoh di atas menghasilkan nilai yang sama yaitu 1 2 3 4 5.

contoh penggunaan for dalam berinteraksi dengan dara Array( ), terdapat [disini](./1_for.php)

## 2. Perulangan Foreach
perulangan Foreach atau dapat di artikan dalam bahasa Indonesia sebagai 'Untuk Setiap', dari arti kata ini dapat disimpulkan bahwa syntax ini digunakan untuk berinteraksi dengan variable yang memiliki data/arguments lebih dari satu atau lebih tepatnya kita sebut data Array(). Selain dari data Array() foreach juga dapat digunakan untuk perulangan data ber-tipe Object.

Perulangan foreach tidak dapat digunakan pada pada data ber-tipe selain Array() dan Object, atau variable yang tidak di insialisasikan. Memaksakan penggunaan perulangan pada data tersebut akan menimbulkan pesan kesalahan (`error`) pada aplikasi yang kita buat.

sebelum melanjutkan lebih baik kita pahami terlebih dulu mengenai data tipe [Array()](../2_variable_datatype/#membuat-array), dimana setiap elemen dari data Array() memiliki pasangan key dan value (kunci dan nilai).

secara umum fungsi foreach di tuliskan dalam bentuk seperti ini
```php
    foreach(Array|Object $variable as [$key =>] $value){
        statement
    }
```
Kode di atas Pada setian elemen dari Array atau Object, PHP akan mentransfer nilai yang terdapat pada elemen Array atau Object yang terdapat pada parameter $variable kedalam parameter $value, dan key dari elemen menjadi parameter $key. Untuk key berupa opsional jika kita membutuhkan nilai key dari suatu elemen.

Kemudian paremeter $key dan $value dapat digunakan dalam statemen atau tugas yang kita buat di dalam fungsi foreach tersebut.
contoh 1.
```php
<?php
    $nomor = [20,30,40];

    foreach($nomor as $value){
        echo $value . '\n';
    }
?>
```
Baris kode di atas akan mentrasfer setiap nilai dari elemet parameter $nomor menjadi parameter $value dan dalam statemen kita perintahkan kan untuk menampilan nilai $value tersebut. foreach akan bekerja melakukan perulangan untuk melakukan transformasi sampai mencapai elemen terakhir dari array. Sehingga bari kode diatas akan menghasilkan
```html
20
30
40
```

Bentuk lain dengan menambahkan opsi key dalam parameter foreach,
contoh 2.
```php
<?php
    $data = ['propinsi' => 'Banten', 'kabupaten' => 'Kota Tangerang', 'kecamatan' => 'Batu Ceper'];

    foreach($data as $key => $value){
        echo ucfirst($key) . ' = ' . $value . '\n';
    }
?>
```
Dengan baris kode diatas key dari elemen array dapat kita gunakan dan telah ditranformasikan kedalam parameter $key
sehingga menghsilkan tampilan sebagai berikut.

>**Penyegaran**
>
>`ucfirst()` diatas merupakan syntax manipulasi string dengan bertujuan menjadikan huruf pertama menjadi huruf besar (Kapital).

```html
Propinsi = Banten
Kabupaten = Kota Tangerang
Kecamatan = Batu Ceper
```

Untuk melakukan perubahan nilai array kita bisa menambahkan operator assigned by reference pada value atau key.
sebagai contoh sebuah array linear berisi nilai integer, yang akan kita lipat gandakan.
```php
<?php
    $nomor = [20, 25, 30];

    foreach($nomor as &$value){                     // & merupakan operator assigned by reference
        $value *= 2;
    }

    print_r($nomor);
?>
```
Kode diatas akan merubah nilai dari elemen nomor menjadi 40, 50, 60. karena kita menggunakan assigned by reference makan nilai elemen terakhir akan mengikuti perubahan terhadap parameter $value, jadi jangan lupa untuk menghentikan opertor ini jika kita tidak ingin nilai dari elemen array kita terus berubah saat nilai baru paramater $value muncul, dengan cara
```php
    foreach($a as &$b){
        statement
    }
    unset($value);          //break terhapad operator assigned by reference
```

Bagaimana dengan Array Multi Dimensi. Mari kita pelajari bersama pada materi dibawah.
### 2.1 Nested Foreach
Sebelumnya kita bisa pelajari terlebih dahulu mengenai [Nested Array atau Array Multi Dimensi](../7_array_mendalam).
Nested Foreach digunakan dalam berinteraksi dengan multi-dimensional array, dengan contoh baris perintah sebagai berikut:
```php
<?php
    /** Multi Dimensional Array */
    $array = array();
    $array[0][0] = "pinus";
    $array[0][1] = "beringin";
    $array[1][0] = "bayam";
    $array[1][1] = "kangkung";

    foreach ($array as $value1){                        //elemen array dimensi satu
        foreach($value1 as $value2){                    //elemen array dimensi dua
            echo $value2;                               //tampilkan setiap elemen
        }
    }
?>
```
Penjelas baris kode diatas tidak jauh beda dengan perulangan foreach pada linear array, hanya karena elemen dari array juga berupa array, maka kita melakukan kembali pada nilai elemen dari array. seperti yang kita peroleh dari bari kode di atas elemen array dari parameter $array di transformasikan kedalam parameter $value1 dimana nilainya juga berupa array, kemudian kita lakukan perulangan lagi pada elemen array yang terdapat pada parameter $value1. sehingga setiap elemen array pada parameter $value1 di transformasikan ke dalam paramater $value2.

>**Penting**
>
>Karena Array di atas berupa matrix array sehingga dapat langsung digunakan nested foreach, untuk menghindari pesan error sebaik dilakukan pengecekan terlebih dahulu terhadap $value1 apakah dia berupa array dengan menggunakan conditional statement seperti if..else dengan expresi is_array(),  `if(is_array($value1)).....`

### List sebagai Pengganti Nested Foreach ###
Cara lain untuk melakukan perulangan pada array multi dimensi bila kita mengetahui ukuran dari array kita dapat menggunakan list dalam perulangan foreach. sebagai contoh kita memiliki matrix array dengan ukuran 2x2.

contoh :
```php
<?php
    $data = array(
        [101,102],
        [201,202]
    );

    foreach($data as list($val1, $val2)){
        echo $val . ', ' . $val2 . '\n'
    }

    //akan menghasilkan
    //101, 102
    //201, 202
?>
```
Baris kode di atas menjelaskan bahwa $val1 menampung nilai pertama dari dan $val2 menampung nilai kedua dari elemen array pada perameter $data.

Jika parameter dalam list melebihan dari nilai yang terdapat dalam elemen parameter $data maka akan memunculkan pesan kesalahan. sebagai contoh tetap menggunakan array diatas.
```php
....
    foreach($data as list($val1, $val2, $val3)){
        echo 'A: ' . $val1 . ', B: ' . $val2 . ', C: ' . $val3 . '\n';
    }

?>
```
maka baris kode diatas akan menghasilkan nilai:
```html
Notice: Undefined offset: 2 in example.php on line ...
A: 101, B: 102, C:

Notice: Undefined offset: 2 in example.php on line ...
A: 201, B: 202, C:
```
dengan demikian kita harus berhati-hati dalam menulis baris kode.
demikian untuk pembahasan perulangan Foreach.

contoh penggunaan foreach dalam php dapat dilihat [disini](./2_foreach.php)

[![](https://img.shields.io/static/v1?&label=Contoh%20Foreach&message=%3e&color)](./2_foreach.php)

## 3. Perulangan While
Perulangan While merupakan perulangan yang paling sederhana pada PHP, perulangan While memiliki syntax sebagai berikut
```php
while(exp)
    statement
```
Tujuan dari baris kode tersebut sangat sederhana yaitu memerintah PHP untuk melakukan sirkulasi perulangan selama ekspresi yang diberikan bernilai `true`, sama seperti for, nilai expresi akan kembali di evalusi setelah satu sirkulasi selesai. Kemudian membuat sirkulasi baru jika ekspresi menghasilkan nilai `true` dan akan berhenti jika ekspresi bernilai `false`. sama dengan conditional statement if ekspresi dapat diberikan dalam bentuk group didalam tanpa kurung ekspresi.
Perhatikan diagram alur dari while.
<p align="center">
    <img src="../../assets/content/basics/5_perulangan/while.png">
</p>
dari diagram alur diatas bisa kita lihat bahwa while hampir sama dengan for dimana while hanya memiliki sebuah ekspresi berupa conditional statement. diagram di atas dapat ditulis dalam baris kode sebagai berikut
```php
<?php
    /** deklarasi parameter $i sesuai diagram bernilai 0 */
    $i = 0;

    /** perulangan while dengan ekspresi selama $i lebih kecil dari 5 */
    while($ < 5){

        /** echo nilai $i dan kemudian $i ditambah 1 (post increment) */
        echo $i++;
    }
?>
```

baris kode di atas akan menghasilkan nilai 01234, jadi selama $i lebih kecil dari 5 PHP akan melakukan tugas yang tertuang dalam statement, jika kita memberikan ekspresi awal bernilai `false` maka perulangan ini tidak dilakukan, dan sebalik nya jika kita memberikan ekspresi yang selalu bernilai true, maka PHP akan selalu akan melakukan perulangan tanpa berhenti seperti contoh di atas kita berikan ekspresi $i >= 0 maka nilai nya akan selalu `true`.

contoh pengguan while dalam PHP dapat dilihat [disini](./3_while.php)

[![](https://img.shields.io/static/v1?&label=Contoh%20While&message=%3e&color)](./3_while.php)

##4. Perulangan Do While
Perulangan Do While hampir sama dengan perulangan While, yang membedakan yang ekpresi akan di evaluasi di akhir dari sirkulasi perulangan, sehingga perintah dalam statement akan selalu terlaksana pertama kali sirkulasi perulangan ini berjalan.

Syntax
```php
Do {
    statement
}while(exp);
```
coba kita pelajari diagram alur dari sirkulasi perulangan Do While di bawah ini.
<p align="center">
    <img src="../../assets/content/basics/5_perulangan/do_while.png">
</p>

Dari diagram bisa kita simpulkan bahwa statememt akan di eksekusi pertama kali sebelum ekspresi di evalusi di akhir perulangan. sesuai diagram alir kita susun baris kode sebagai berikut.
```php
<?php
    /** deklarasi parameter berupa $i dengan nilai awal 6 */
    $i = 6;

    /** perintahkan perulangan Do While selama $i lebih kecil dari 5 */
    do{
        echo $i++;
    }while($i < 5);
?>
```
Baris kode diatas menghasilkan nilai 6, walaupun dari awal nilai $i sudah lebih besar dari 5, tetapi echo terhadap $i tetap dilakukan pada awal sirkulasi perulangan, kemudian ekspresi melakukan evaluasi terhadap $i yang bernilai 7, sehingga 7 > 5 menghasilkan nilai ekspresi `false`, dan perulangan Do While dihentikan.

contoh penggunaan do while dalam php dapat dilihat [disini](./4_do_while.php)

[![](https://img.shields.io/static/v1?&label=Contoh%20Do%20While&message=%3e&color)](./4_do_while.php)

itulah 4 perulangan yang terdapat dalam PHP.
> ** Tips **
>
> Untuk mengkahiri perulangan ditengah-tengah sirkulasi kita dapat menggunakan perintah `goto` seperti contoh ini

```php
<?php
    While($i < 5){
        if($i === 3){
            goto end;
        } else {
            echo $i;
        }
        $i++;
    }

    end;
?>
```

### Referensi

- [W3School - PHP Loops](https://www.w3schools.com/php/php_looping.asp)
- [php.net - Manual](https://www.php.net/manual/en/)

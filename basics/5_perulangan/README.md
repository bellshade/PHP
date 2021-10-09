# Perulangan

Loop digunakan untuk mengeksekusi blok kode yang sama berulang kali, selama kondisi tertentu benar atau bernilai true.

Berikut adalah jenis loop yang ada di PHP.

|  Jenis   | Keterangan                                                                                    |
| :------: | --------------------------------------------------------------------------------------------- |
|  While   | loop melalui blok kode selama kondisi yang ditentukan benar                                   |
| foreach  | loop melalui blok kode untuk setiap elemen dalam array                                        |
|   for    | loop melalui blok kode beberapa kali                                                          |
| do while | loop melalui blok kode satu kali, dan kemudian mengulangi loop selama kondisi yang ditentukan |

## Perulangan For
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

contoh penggunaan for dalam berinteraksi dengan dara Array( ), terdapat [disini](./01_for.php)
###Referensi

- [W3School - PHP Loops](https://www.w3schools.com/php/php_looping.asp)

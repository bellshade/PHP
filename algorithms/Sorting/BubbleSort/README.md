# Bubble Sorting

Bubble Sort adalah metode pengurutan algoritma dengan cara melakukan penukaran data secara terus menerus sampai bisa dipastikan dalam suatu iterasi tertentu tidak ada lagi perubahan/penukaran.

Urutan Kerja Bubble Sorting sebagai berikut :
1. Ambil dua data yang saling berdekatan, bila susunan menaik (Ascending) dimulai dari data paling bawah (index terkecil), sebaliknya untuk susunan menurun mulai dari data paling atas (index terbesar).
2. Bila bila susunan data tidak benar lakukan pertukaran. Untuk susunan naik nilai terkecil berada di bawah, dan sebaliknya untuk susunan menurun.
3. Untuk susuan menaik ambil nilai terbesar dari kedua data tersebut dan bandingkan dengan nilai data yang berada di posisi berdekatan selanjutnya, sebaliknya untuk susunan menurun ambil data terkecil.
4. Ulangi langkah 2 dan 3 sampai tidak ada lagi posisi yang salah.

Penting untuk di ingat saat menyusun secara naik atau turun ( Asc dan Desc ), Penyususan data naik (Asc) dimulai dari index terkecil, dan menukar nilai terbesar ke index lebih besar. Sedangkan penyusunan secara menurun kita mulai dari index terbesar dengan menggeser nilai terkecil ke indek lebih kecil.

Untuk lebih memahami coba kita pelajari hasil kerja Bubble Sort untuk penyusunan data secara naik (Asc) di bawah ini :

![bubble diagram](../../../assets/content/algorithms/Sorting/Bubble/diagram.png)

Pada diagram Tahap 1 dan pada langkah 1, karena penyusunan secara ascending kita ambil nilai dari elemen array dengan index terkecil yaitu data pada elemen array dengan nomor index `0` dan nilai elemen yang berdekatan dengannya yaitu data pada elemen array dengan nomor index `1`, karena nilai dari elemen array dengan nomor index `0` lebih besar dari pada nilai elemen array dengan nomor index `1` maka posisi ini tidak benar, dan kita lakukan pertukaran nilai.

Kemudian pada langkah 2 masih pada tahap 1 nilai elemen array terbesar dari tahap 1 kita ambil dan kita bandingkan dengan nilai pada elemen array dengan nomor index selanjutnya, dimana nilai elemen terbesar pada langkah 1 terdapat pada elemen array dengan nomor index `1` dengan nilai 3 dan elemen array dengan nomor index selanjutnya berada pada elemen array dengan nomor index `2` dengan nilai 4, karena nilai dari elemen array dengan nomor index `1` lebih kecil dari nilai elemen array dengan nomor index `2` maka posisi ini benar, dan kita tidak perlu melakukan pertukaran nilai.

Kemudian langkah ini kita ulangi kembali sampai tidak ada lagi elemen array dengan nomor index selanjutnya yang bisa di bandingkan.

Dari alur di atas dapat kita susun sebuah Pengkondisian yaitu bila nilai elemen array pada index 1 lebih besar dari pada nilai elemen array pada index 2 maka lakukan pertukaran nilai. dimana nomor array index ke 2 adalah nomor index pertama + 1, sehingga bisa ditulis dalam Conditional Statemen sebagai berikut :
```php
<?php
    if ($array[$index] > $array[$index + 1])
    {
        //lakukan pertukaran
    }
?>
```

Sekarang bagaimana melakukan pertukaran nilai antara elemen, kita bisa menggukan sebuah varible untuk menampung salah satu data terlebih dahulu dengan cara.
```php
    $temp = $array[$index];                 //tampung nilai dari elemen array[index] terlebih dahulu
    $array[$index] = $array[$index + 1];    //pindahkan nilai dari elemen $array[index + 1] kedalam elemen $array[index]
    $array[$index + 1] = $temp              //Kembalikan nilai yang kita tampung dari elemen $array[index] kedalam elemen $array[index + 1]
```
dengan demikian kita peroleh baris kode secara untuh seperti ini:
```php
<?php
    if ($array[$index] > $array[$index + 1])
    {
        $temp = $array[$index];
        $array[$index] = $array[$index + 1];
        $array[$index + 1] = $temp;
    }
?>
```
Dari sini kita sudah bisa melakukan pertukaran susunan pada langkah 1, bagaimana dengan langkah 2 dan selanjunya, dari yang kita perhatikan pada diagram diatas, langkah 2 dan selanjutnya merupakan perulangan dari langkah 1, dimana elemen array yang digunakan adalah elemen array yang memiliki nilai terbesar dari langkah sebelumnya, karena kita telah melakukan pertukaran nilai elemen array dimana nilai terbesar terletak pada elemen array dengan index lebih tinggi maka dapat kita pastikan elemen array yang kita pakai selanjutnya adalah elemen array dengan index + 1.

Karena bisa kita pastikan acuan kita adalah nomor index dari array, dimana perulangan selanjutnya menggunakan index lebih besar satu langkah dan perulangan dilakukan sebanyak 3 kali dengan index awal 0. Maka kita dapat menggunakan metode Perulangan For untuk ini, dengan baris kode sebagai berikut;
```php
<?php

    $array = [3,2,4,1];

    for($i = 0; $i < 3; $i++)
    {
        if ($array[$i] > $array[$i + 1])
        {
            $temp = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $temp;
        }
    }

    echo json_encode($array);                   //hasil tahap satu
?>
```
Sekarang kita sudah selesaikan tahap 1, bagaimana dengan tahap 2 dan selanjutnya. Dari gambar hasil kerja dapat kita lihat bahwa ada 3 Tahap, dan Langkah dikerjakan dalam setiap tahap, berdasarkan hal ini kita bisa buatkan sebuah Nested Loop dengan metode perulangan for, dan perulangan for untuk langkah berada dalam perulangan for untuk tahap, dengan aturan for dikerjakan sebanyak 3 kali. sehingga bisa kita tulis baris kode sebagai berikut:
```php
<?php
    $array = [3,2,4,1];

    //loop untuk Tahap
    for ($i = 3; $i > 0; $i--)
    {
        //nested loop untuk langkah
        for($i = 0; $i < 3; $i++)
        {
            if ($array[$i] > $array[$i + 1])
            {
                $temp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $temp;
            }
            echo json_encode($array) . PHP_EOL;         //cek hasil setiap langkah
        }
    }
?>
```
Baris kode diatas akan menghasilkan :
```html
[2,3,4,1]       //Tahap 1
[2,3,4,1]
[2,3,1,4]
[2,3,1,4]       //Tahap 2
[2,1,3,4]
[2,1,3,4]
[1,2,3,4]       //Tahap 3
[1,2,3,4]
[1,2,3,4]
```
Sampi disini baris kode yang kita buat sudah berhasil melakukan sorting terhadap array, tetap ini hanya berlaku untuk array yang terdisi dari 4 elemen, bagaimana jika array yang di sorting kurang atau lebih dari 4 elemen. Tentunya kita harus merubah kebali baris kode ini untuk menyesuaikan kebutuhan kita, coba kita uji dengan array memiliki 6 elemen, sebagai contoh $array2 = [3,5,2,4,1,6]. jika kita buat dalam bentuk ilustrasi di atas maka akan membuat langkah berikut:
```html
[3,5,2,4,1,6]   [2,3,4,1,5,6]   [2,3,1,4,5,6]   [1,2,3,4,5,6]   [1,2,3,4,5,6]
[3,2,5,4,1,6]   [2,3,4,1,5,6]   [2,1,3,4,5,6]   [1,2,3,4,5,6]
[3,2,4,5,1,6]   [2,3,1,4,5,6]   [2,1,3,4,5,6]
[3,2,4,1,5,6]   [2,3,1,4,5,6]   
[3,2,4,1,5,6]                   
Tahap : 1       Tahap: 2        Tahap: 3        Tahap: 4        Tahap: 5
```
Dengan langkah hasil kerja seperti di atas dan di bandingkan dengan langkah hasil kerja array dengan 4 elemen diatas, kita bisa temukan sebuah pola yaitu: 
1. Tahap :
    - Perulangan Tahap terjadi sebanyak elemen array kurang satu,
    - Setiap Tahap mengurangi satu elemen array akan di disusun.
2. Langkah :
    - Perulangan terjadi sebanyak elemen array yang akan disusun dalam setiap tahap.
    - Setiap tahap mengurangi banyaknya langkah penyusunan disebabkan oleh berkurangnya elemen array yang disusun.
    - Langkah dimulai dari index `0` penyusunan disebabkan oleh berkurangnya elemen array yang disusun.

**Solusi**
 - Nomor Tahap ditambah banyaknya langkah sama dengan banyaknya elemen array, dapat ditulis | $tahap + $langka = count($array).
 - Tahap dimulai dari nilai 1 dan berakhir dengan banyak elemen array - 1. | 0 < $tahap <= count($array) - 1 | 0 < $tahap < count($array).
 - Langkah pertama dimulai dari `0` sesuai dengan index elemen. | $langkah = `0`.
 - Banyaknya langkah tiap tahap tidak akan melebihi dari jumlah elemen array dikurangi tahap, | $langkah <= count($array) - $tahap.

 dari solusi diatas coba kita tuliskan kedalam kode
```php
<?php
    $array = [3,5,2,4,1,6];
    $size = count($array);

    /** tahap dimulai dari 1 dan berakhir lebih kecil 1 dari jumlah elemen */
    for($tahap = 1; $tahap < $size; $tahap++ )
    {
        /** batas langkah dalam setiap tahap */
        echo 'Tahap ' . $tahap . ' :<br>';

        /** langkah dimulai dari index 0, dan berkahir dengan jumlah elemen dikurangi tahap */
        for($langkah = 0; $langkah < $size - $tahap; $langkah++)
        {
            /** Bandingkan, dan tukar jika urutan data tidak benar */
            if($array[$langkah] > $array[$langkah + 1]){        //bandingkan Nilai
                /** Jika posisi nilai salah */
                $temp = $array[$langkah];                        //Simpan data sementara
                $array[$langkah] = $array[$langkah + 1];         //Pindahkan nilai
                $array[$langkah + 1] = $temp;                    //Kembalikan data tersimpan
            }
            /** coba kita cek hasil setiap langkah */
            echo json_encode($array);
        }
        echo '<hr>';

    }
?>
```

Sampai disini akhirnya Algoritma BubbleSort kita selesai.

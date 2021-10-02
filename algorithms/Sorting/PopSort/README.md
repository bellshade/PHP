# Pop Sort

Pop Sort merupakan sebuah strategi untuk melakukan penyortiran nilai-nilai dalam array dengan menggunakan strategi Popping Array atau mengeluarkan nilai terakhir satu persatu hingga nilai-nilai dalam array dapat tersusun sesuai dengan keinginan.

Biasanya, pop sort ini disebut dengan **Tower of Hanoi** karena pendekatan Pop Sort ini mendekati dengan salah satu puzzle buatan Edouard Lucas pada tahun 1883.

![tower_of_hanoi](./assets/tower_of_hanoi.jpeg)

Di atas merupakan contoh dari puzzle yang bernama Menara Hanoi, mungkin beberapa di antara kalian akan kembali bernostalgia jaman-jaman masih TK/SD saat melihatnya.

## Persyaratan

Biasanya dalam pertanyaan-pertanyaan interview yang menggunakan pendekatan Tower of Hanoi sebagai soal interviewnya akan menggunakan persyaratan di bawah ini:

1. Untuk perulangan **hanya boleh** menggunakan `for` atau `while` dan tidak boleh menggunakan keduanya.
2. Hanya boleh menggunakan **3 atau 2 array** dalam penggunaannya.

Untuk studi kasus kali ini, kita akan menggunakan aturan `while` loop dan `3 array` secara descending dalam penerapan ini. Sisanya, kalian dapat mengimprovisasinya.

## Teori

Semisalnya saya mempunyai 3 array seperti di bawah ini:

![popsort](./assets/popsort1.png)

Ingat poin-poin di bawah ini:
- Array A merupakan input dari nilai-nilai yang akan disusun
- Array B merupakan output dari nilai-nilai yang telah disusun
- Array C merupakan tempat penyimpanan sementara

Kira-kira semisal kita buatkan array bentuknya seperti ini:
```php
$a = [83, 10, 54, 92, 62, 47, 15, 72];
$b = [];
$c = [];
```

Kita keluarkan nilai dari Array A paling luar dengan cara Array Pop kemudian kita pindahkan ke B secara berulang-ulang seperti ini:

![popsort](./assets/popsort2.png)

> Semisalnya nih bang, kalau nilainya lebih gede atau lebih besar dari data yang terakhir masuk gimana tuh bang?

Gud kuesien.

Semisalnya, data sudah seperti ini:

![popsort](./assets/popsort3.png)

Logikanya, angka `62` pasti lebih besar daripada `47` dan `15`, berarti kita harus memindahkan angka `15` dan `47` ke Array C sebagai tempat penampungan sementara untuk memasukkan 62 ke B.

![popsort](./assets/popsort4.png)

Kemudian, kita susun balik dari array C ke Array B yang kira-kira bentuknya seperti ini:

![popsort](./assets/popsort5.png)

Dan seterusnya hingga A benar-benar kosong melompong, kira-kira seperti ini deh bentuk keseluruhannya:

![popsort](./assets/popsort_finale.png)

> Udah paham nih om, cepetan contoh kodenya gimana!

Sabar-sabar, untuk penerapan kodenya kita akan bahas di section berikutnya

## Implementasi Kode

*To be continued*

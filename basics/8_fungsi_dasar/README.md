# Pengenalan Function

Dalam pengembangan aplikasi kita sering kali membuat lagi baris kode yang sama, karena aplikasi kita melakukan hal yang sama tetapi pada tempat dan waktu berbeda, dalam contoh dimana halaman web yang kita buat memiliki footer, maka kita akan membuat baris kode yang sama pada setiap halaman web untuk menampilkan footer tersebut. Hal ini dapat diminimalkan dengan melakukan penggunaan ulang script atau baris kode yang telah kita buat. Baris kode yang dapat digunakan ulang ini disebut Fungsi, dalam syntax PHP ditulis `function`.

Daftar Isi

1. [Fungsi Dasar](#1-fungsi-dasar)
2. Parameter dan Return
3. Scope Variabel Dalam Fungsi
4. Variable Statis Dalam Fungsi
5. Fungsi Tanpa Nama

## 1. Fungsi Dasar

Fungsi adalah program-program kecil yang memiliki tugas tersendiri untuk memecahkan khusus satu masalah komputasi. fungsi dapat saling memanggil untuk memecahkan masalah komputasi lebih sulit. Jika fungsi-fungsi ini digabungkan terbentuklah sebuah aplikasi yang komplek.

Fungsi dalam PHP ditulis seperti dibawah ini:

```php
<?php
    function ContohFungsi()
    {
        echo 'Fungsi Pertama Saya';
    }

```

Pada kode diatas kita telah membuat sebuah fungsi dengan nama `ContohFungsi`, saat fungsi ini di panggil, maka fungsi ini akan meng-eksekusi semua argumen dan perintah yang terdapat di dalam braket `{}` fungsi tersebut.

Untuk memanggil fungsi tersebut kita menuliskan nama fungsi dan menambahkan tanda kurung `()`-Parentheses untuk memberi tahu PHP bahwa itu adalah fungsi, sebagai contoh pada baris kode dibawah ini :

```php

    ContohFungsi();
?>
```

Harus diperhatikan bahwa fungsi tidak akan secara otomatis berjalan saat kita meng-akses halaman php tersebut, selama fungsi itu tidak dipanggil.

>Secara umum penulisan fungsi PHP dalam pseudo :
>```php
>   function NamaFungsi($param_1, $param_2,.....,$param_n)
>   {
>       Argumen yang akan dijalakan
>   }
>```
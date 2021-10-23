# Penanganan File (_File Handling_)

## Daftar Isi

1. [Membaca file dan folder](#1-membaca-file-dan-folder)
    - [Membaca file](#membaca-file)
        - [file](#a-file)
        - [file_get_contents](#b-filegetcontents)
        - [fopen](#c-fopen)
    - [Membaca folder](#membaca-folder)

## 1. Membaca File dan Folder

### Membaca File

Terdapat banyak cara untuk membaca file di PHP, seperti `file()`, `file_get_contents()`, dan `fopen()`. Namun setiap fungsi tersebut memiliki perbedaan, dan hasil kembalian yang berbeda, berikut penjelasannya.

> Apabila terdapat fungsi lain untuk melakukan baca file, silahkan kirimkan **PR** _(Pull Request)_ untuk melengkapi materi.

#### a. file

Berfungsi untuk membuka file dari local maupun berupa URL

```php
fopen(string $filename, string $mode, bool $useIncludePath = false, resource $context = ?) : resource
```

**Parameter**

- `$filename` berisi nama atau URL dari file yang akan dibaca
    > Untuk pengguna sistem operasi **Windows** harap lakukan _escape_ saat menuliskan tanda garis miring terbalik `\` atau _backslash_  <br>
    > Contoh : `D:\\php\\document\\kamu.txt`
- `$mode` berisi mode apa yang akan dilakukan saat membaca file, berikut daftar mode yang tersedia :
    - **r** hanya membaca file, pointer pada **awal** file
    - **r+** sama seperti **r** ditambah dapat menulis file
    - **w** hanya menulis file, pointer pada **awal** file, akan mengkosongkan isi file, dan jika file tidak ada maka akan dibuatkan
    - **w+** sama seperti **w** namun dapat membaca file juga

#### b. file_get_contents

#### c. fopen

### Membaca Folder

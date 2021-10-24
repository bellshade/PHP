# Penanganan Formulir (*Form Handling*)

> Dengan mengikutin materi kali ini, kami harap kamu sudah paham tentang [Form pada HTML,](https://github.com/bellshade/HTML-CSS/tree/main/HTML) [Pengondisian pada PHP](../4_conditional_statements/README.md) dan [Array pada PHP.](../2_variable_datatype/README.md#4-array-3_arrayphp)

Pada materi ini kamu akan belajar tentang penanganan formulir sekaligus belajar menggunakan variabel *superglobal* yaitu `$_GET` dan `$_POST`

|  Nama  | Deskripsi                                                                                                                                                                                   |
| :----: | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| $_POST | Variabel *superglobal* PHP yang digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML dengan `method="post"`                                                         |
| $_GET  | Variabel *superglobal* PHP yang digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML dengan `method="get"` dan juga dapat mengumpulkan data yang dikirim dalam URL. |

> **INFO:**
>
> Untuk melajutkan materi ini kami sarankan kamu untuk melakukan ***clone*** atau **mengunduh** repositori ini, lalu menjalankannya di server lokal milikmu agar kamu tidak hanya bisa melihat skrip, namun kamu juga bisa menjalankan dan melihat hasil dari skrip PHP yang ada di sini.
>
> Lihat [Cara Membuat dan Menjalankan skrip PHP di Server Lokal](../1_hello_world/README.md)

Selanjutnya mari kita masuk ke materinya.

## Daftar Isi

- [Penanganan Formulir (*Form Handling*)](#penanganan-formulir-form-handling)
  - [Daftar Isi](#daftar-isi)
  - [1. Tombol Kirim *(1_submit_button.php)*](#1-tombol-kirim-1_submit_buttonphp)
  - [2. Input Berdasarkan Teks *(2_text_based_input.php)*](#2-input-berdasarkan-teks-2_text_based_inputphp)
    - [Contoh 1 - Text dan Number](#contoh-1---text-dan-number)
    - [Contoh 2 - Email dan Password](#contoh-2---email-dan-password)
    - [Contoh 3 - Hidden](#contoh-3---hidden)
    - [Contoh 4 - Date](#contoh-4---date)
  - [3. Input Select *(3_select.php)*](#3-input-select-3_selectphp)

## 1. Tombol Kirim *([1_submit_button.php](1_submit_button.php))*

Di sini kita akan belajar cara menangani jika ada tombol (*button*) dari form yang di kirim.

> **INFO:**
>
> Skrip PHP hanya akan mengumpulkan data dari elemen input (semua yang termasuk elemen untuk form) yang memiliki atribut `name="nama_input"`, termasuk input yang tidak memiliki nilai (*value*).

Contoh, di sini kita memiliki satu buah file bernama `form.php` dengan isi sebagai berikut:

```html
<form action="" method="post">
    <button type="submit" name="kirim">Kirim</button>
</form>
```

```php
<?php

if (isset($_POST['kirim'])) {
    echo 'Hello World';
}
```

[![](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](1_submit_button.php#L13-L23)

> Data yang dikirim dari formulir akan disusun sebagai array asosiatif, dan dikumpulkan oleh variabel *superglobal* yaitu `$_GET` jika metode pengirimannya `GET` dan `$_POST` jika metode pengirimannya adalah `POST`

Coba perhatikan

- Elemen `form` di atas memiliki atribut `action` dengan nilai `""` (kosong) dan atribut `method="post"`. Ini menunjukan bahwa data formulir akan dikirim ke satu halaman yang sama dengan metode `POST`.
- Elemen `button` di atas hanya memiliki atribut `name` dengan value `kirim` dan tidak memiliki atribut `value` (tidak ada data yang dikirim). Namun ini juga akan dikirim sebagai data yang kosong.
- Pengkondisian `if` di atas akan mengecek apakah ada data yang dikirim dengan key `kirim` (dalam hal ini adalah nama nilai dari atribut `name` yang ada di elemen `button`).
- Jika hasilnya YA (`true`) maka tampilkan kalimat `Hello World!`.

## 2. Input Berdasarkan Teks *([2_text_based_input.php](2_text_based_input.php))*

Disini kita akan belajar mengambil data yang dikirim dari formulir.

### Contoh 1 - Text dan Number

Contoh sederhana penulisan skrip PHP untuk menerima data dari input *type text* dan *number*

```html
<form action="" method="post">
    Nama: <input type="text" name="nama"><br />
    Umur: <input type="number" name="umur"><br />
    <button type="submit" name="kirim">Kirim</button>
</form>
```

```php
<?php

if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    echo "Halo, nama saya $nama, umur $umur tahun";
}
```

[![](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](2_input_based_text.php#L20-L36)

### Contoh 2 - Email dan Password

Contoh sederhana menerima data dari input *type email* dan *password*.

```html
<form action="" method="post">
    Email: <input type="email" name="email"><br />
    Password: <input type="password" name="passsword"><br />
    <button type="submit" name="kirim">Kirim</button>
</form>
```

```php
<?php

if (isset($_POST['kirim'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    echo "Email: $email <br />";
    echo "Password: $pass <br />";
}
```

[![](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](2_input_based_text.php#L39-L56)

### Contoh 3 - Hidden

Contoh sederhana menggunakan input *type hidden*.

```html
<form action="" method="post">
    <input type="hidden" name="tersembunyi" value="Hello world!">
    <button type="submit" name="kirim">Kirim</button>
</form>
```

```php
<?php

if (isset($_POST['kirim'])) {
    $hidden = $_POST['tersembunyi'];
    echo $hidden;
}
```

[![](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](2_input_based_text.php#L59-L72)

### Contoh 4 - Date

Contoh sederhana menggunakan input *type date*.

```html
<form action="" method="post">
    <input type="date" name="tanggal"><br />
    <button type="submit" name="kirim">Kirim</button>
</form>
```

```php
<?php
if (isset($_POST['kirim'])) {
    $date = $_POST['tanggal'];

    echo "Sekarang tanggal $date";
}
```

[![](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](2_input_based_text.php#L75-L88)

## 3. Input Select *([3_select.php](3_select.php))*

Selanjutnya di sini kita akan belajar cara menerima data dari input *type select*

**Contoh 1:**

```html
<form action="" method="post">
    Pilih:
    <select name="hobi" id="hobi">
        <option value="Sepak bola">Sepak bola</option>
        <option value="Bulu tangkis">Bulu tangkis</option>
        <option value="Renang">Renang</option>
    </select>
    <button type="submit" name="btn_contoh1">Kirim</button>
</form>
```

```php
<?php

if (isset($_POST['btn_contoh1'])) {
    $hobi = $_POST['hobi'];

    echo "Hobi saya: $hobi";
}
```

[![](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](3_select.php#L19-L37)

**Contoh 2:**
Tanpa menggunakan atribut `value`

```html
<form action="" method="post">
    Pilih:
    <select name="hobi" id="hobi">
        <option>Sepak bola</option>
        <option>Bulu tangkis</option>
        <option>Renang</option>
    </select>
    <button type="submit" name="btn_contoh2">Kirim</button>
</form>
```

```php
<?php

if (isset($_POST['btn_contoh2'])) {
    $hobi = $_POST['hobi'];
    
    echo "Hobi saya: $hobi";
}
```

[![](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](3_select.php#L40-L61)

Dengan melihat kedua contoh di atas, kamu dapat mengetahui bahwa menggunakan tag `option` tanpa atribut `value` pada input `select` juga dapat dikirim.

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

- [1. Tombol Kirim *(1_submit_button.php)*](#1-tombol-kirim-1_submit_buttonphp)
- [2. Input Berdasarkan Teks *(2_text_based_input.php)*](#2-input-berdasarkan-teks-2_text_based_inputphp)
  - [Contoh 1 - Text dan Number](#contoh-1---text-dan-number)
  - [Contoh 2 - Email dan Password](#contoh-2---email-dan-password)
  - [Contoh 3 - Hidden](#contoh-3---hidden)
  - [Contoh 4 - Date](#contoh-4---date)
- [3. Input Select *(3_select.php)*](#3-input-select-3_selectphp)
- [4. Date Time](#4-date-time-4_datetimephp)
- [5. Check Box](#5-check-box-5_checkboxphp)
- [6. Radio Button](#6-radio-button-6_radiophp)
- [7. File](#7-file-7_filephp)
- [8. Multiple File](#8-multiple-file-8_multiple_filephp)

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

[![Tautan contoh kode program penanganan tombol kirim pada form](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](1_submit_button.php#L13-L23)

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

[![Tautan contoh kode program penanganan input 1 pada form](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](2_input_based_text.php#L20-L36)

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

[![Tautan contoh kode program penanganan input 2 pada form](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](2_input_based_text.php#L39-L56)

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

[![Tautan contoh kode program penanganan input 3 pada form](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](2_input_based_text.php#L59-L72)

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

[![Tautan contoh kode program penanganan input 4 pada form](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](2_input_based_text.php#L75-L88)

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

[![Tautan contoh kode program penanganan select 1 pada form](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](3_select.php#L19-L37)

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

[![Tautan contoh kode program penanganan select 2 pada form](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](3_select.php#L40-L61)

Dengan melihat kedua contoh di atas, kamu dapat mengetahui bahwa menggunakan tag `option` tanpa atribut `value` pada input `select` juga dapat dikirim.

## 4. Date Time *([4_datetime.php](4_datetime.php))*

Kemudian ada juga input data yang bisa berupa datetime `(date & time)` jadi nanti `date (tanggal)` dan juga `time(waktu)` bisa diinputkan secara bersamaan. Berikut merupakan contohnya:

```html
<form action="" method="post">
    <label for="specialTime"> Pilih hari Spesial (tanggal and waktu):</label>
    <input type="datetime-local" id="specialTime" name="specialTime">
    <button type="submit" name="btn_contoh1">Kirim</button>
</form>
```

```php
<?php

if (isset($_POST['btn_contoh1'])) {
    $specialTime = $_POST['specialTime'];
    echo "Saya memilih: $specialTime sebagai hari spesial saya";
}
```

[![Tautan contoh kode program penanganan input datetime pada form](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](4_datetime.php#L21-L34)

## 5. Check Box *([5_checkbox.php](5_checkbox.php))*

Selanjutnya untuk input ada juga yang menggunakan `checkbox` jadi input ini user dapat melakukan input beberapa secara bersamaan dan data yang dipilih itu nanti akan ditandai atau `dicentang`. Untuk lebih jelasnya perhatikan contoh berikut ini:

```html
<form action="" method="post">
    <label for="Hobby">Pilih Hobby Anda:</label><br>
    <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
    <input type="checkbox" name="hobi[]" value="Sepak Bola"> Sepak Bola<br>
    <input type="checkbox" name="hobi[]" value="Programming"> Programming<br> 
    <button type="submit" name="btn_contoh1">Kirim</button>
</form>
```

```php
<?php
if (isset($_POST['btn_contoh1'])) {
    $hobi = $_POST['hobi'];

    echo "Saya memilih: <br>";

    for ($i=0; $i < count($hobi) ; $i++){
        echo $hobi[$i]."<br>";
    }

    echo "sebagai hari spesial saya";
}
```

[![Tautan contoh kode program penanganan input checkbox pada form](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](5_checkbox.php#L21-L42)

## 6. Radio Button *([6_radio.php](6_radio.php))*

Lalu ada `radio` atau lebih sering dikenal dengan `Radio Button` biasanya input ini digunakan untuk pemilihan dan hanya boleh memilih satu saja. Berikut adalah contohnya:

```html
<form action="" method="post">
    <label for="Hobby">Pilih Gender Anda:</label><br>

    <input type="radio" name="gender" id="male_gender" value="Laki-Laki" />
    <label for="male_gender">Laki-Laki</label>
        
    <input type="radio" name="gender" id="female_gender" value="Perempuan" />
    <label for="female_gender">Perempuan</label><br>
    <button type="submit" name="btn_contoh1">Kirim</button>
    </form>
```

```php
<?php
if (isset($_POST['btn_contoh1'])) {
    $gender = $_POST['gender'];

    echo "Gender saya adalah $gender";
}
```

[![Tautan contoh kode program penanganan input radio pada form](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](6_radio.php#L21-L38)

## 7. File *([7_file.php](7_file.php))*

Kemudian ada `file`, biasnaya input ini digunakan untuk mengupload gambar. Untuk mengupload gambar maka dalam form perlu ditambahkan `enctype`. Berikut adalah satu contoh untuk upload file dalam PHP:

```html
<form action="" method="post" enctype="multipart/form-data">
    <label for="fileToUpload">Pilih Gambar Anda:</label><br><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <button type="submit" name="btn_contoh1">Kirim</button>
</form>
```

```php
<?php
if (isset($_POST['btn_contoh1'])) {

    $target_dir = "storage/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File adalah sebuah gambar - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File Bukan Gambar";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Maaf, file anda gagal di upload";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "File ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " sudah di upload";
        } else {
            echo "Upload Error";
        }
    }
}
```

[![Tautan contoh kode program penanganan input file pada form](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](7_file.php#L32-L72)

## 8. Multiple File *([8_multiple_file.php](8_multiple_file.php))*

Selnjutnya ada `multiple file`, biasnaya input ini digunakan untuk mengupload gambar yang jumlahnya lebih dari satu gambar. Untuk mengupload beberapa gambar maka dalam form perlu ditambahkan `multiple` dan jangan lupa untuk menampung datanya ke dalam sebuah array. Berikut salah satu contoh untuk upload beberapa file dalam PHP:

```html
<form action="" method="post" enctype="multipart/form-data">
    <label for="fileToUpload">Pilih Gambar Anda:</label><br><br>
    <input type="file" name="fileToUpload[]" id="fileToUpload" accept="image/*" multiple>
    <button type="submit" name="btn_contoh1">Kirim</button>
</form>
```

```php
<?php
if (isset($_POST['btn_contoh1'])) {
    // Folder yang akan menjadi target penyimpana File
    $target_dir = "storage/";
    $files = $_FILES;
    $jumlahFile = count($files['fileToUpload']['name']);
        
    // Looping untuk mendapat isi dari array yang berisi gambar
    for ($i = 0; $i < $jumlahFile; $i++) {
        $namaFile = $files['fileToUpload']['name'][$i];
        $lokasiTmp = $files['fileToUpload']['tmp_name'][$i];
        
        $namaBaru = uniqid() . '-' . $namaFile;
        $lokasiBaru = "{$target_dir}/{$namaBaru}";
        $prosesUpload = move_uploaded_file($lokasiTmp, $lokasiBaru);
        
        // jika proses berhasil
        if ($prosesUpload) {
            echo "Upload file <a href='{$lokasiBaru}' target='_blank'>{$namaBaru}</a> berhasil. <br>";
        } else {
            echo "<span style='color: red'>Upload file {$namaFile} gagal</span> <br>";
        }
    }
}
```

[![Tautan contoh kode program penanganan input file berganda pada form](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](8_multiple_file.php#L32-L62)

<table>
  <tr>
    <td align='center'><strong>Sebelumnya</strong></td>
    <td align='center'><strong>Berikutnya</strong></td>
  </tr>
  <tr>
    <td align='center'><a href='../8_fungsi_dasar/'>8. Fungsi dasar</a></td>
    <td align='center'><a href='../10_file_handling/'>10. File Handling</a></td>
  </tr>
</table>

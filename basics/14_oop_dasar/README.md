<p align="center">
<img width="30%" src="../../assets/images/bellshade-inline.png" />
<h1 align="center">Object Oriented Programing (OOP)</h1>
</p>

Object Oriented Programing atau pemrograman berorientasi terhadap objek lebih sering disebut sebagai OOP adalah salah satu paradigma dalam pemrograman untuk memudahkan pengembangan sebuah aplikasi. Pada materi kali ini kita akan coba mempelajari mengenai paradigma OOP dan implementasinya menggunakan bahasa pemrograman PHP.

## Daftar isi

- [Pengenalan Pemrograman Berorientasi Objek (OOP)](#1-pengenalan-pemrograman-berorientasi-objek-oop)
  - [Apa itu?](#apa-itu)
  - [Perbedaannya OOP dengan metode prosedural biasa](#perbedaannya-oop-dengan-metode-prosedural-biasa)
- [Class dan Object](#2-class-dan-object)

## 1. Pengenalan Pemrograman Berorientasi Objek (OOP)

Pada materi sebelumnya kita sudah mencoba membuat contoh-contoh baris kode yang kebanyakan merupakan pola kerja pemrograman prosedural atau pemrograman terstruktur. Dalam pemrograman ada yang disebut sebagai paradigma Pemrograman yang artinya sudut padang seorang programmer dalam menyelesaikan suatu kasus atau masalah dengan cara pemrograman. Hal ini penting bagi seorang programmer untuk mengidentifikasi permasalahan dan menyusun sebuah solusi dalam bentuk pemrograman.

Ada beberapa paradigma pemrograman sebagai contoh paradigma prosedural yang sudah sering kita gunakan dalam materi sebelumnya, dan paradigma _object oriented programing_ (OOP) atau Pemrograman Berorientasi Objek.

### Apa itu?

OOP singkatan dari _Object Oriented Programming_. OOP bukan hanya sekedar tentang merubah cara menuliskan baris kode, tapi juga mempermudah dalam pengembangan aplikasi kita. OOP adalah model pemrograman yang mengolah desain software menggunakan data dan objek daripada menggunakan fungsi dan logika prosedural.

Pada dasarnya paradigma pemrograman berorientasi objek adalah metode pemrograman yang memecah bagian-bagian dari aplikasi menjadi 1 bagian yang memiliki 1 fungsionalitas utama. Dari bagian-bagian ini dihubungkan satu sama lain berdasarkan fungsinya masing-masing sehingga membentuk aplikasi yang utuh. Akibatnya, sebuah aplikasi dapat terdiri dari bagian-bagian yang rapi terstruktur, _scalable_ dan _reusable_ sehingga paradigma ini bagus sekali untuk diterapkan pada project berskala besar.

Jika kita analogikan pada kehidupan sehari-hari, bayangkan ada sebuah restoran makanan. Agar pelayanan pada restoran tersebut dapat berjalan dengan efisien, semua aktifitas dalam restoran tersebut dibagi menjadi beberapa bagian. Ada yang jadi pelayan, ada yang di kasir, ada yang memasak di dapur,dsb. Jika kamu perhatikan, pecahan bagian-bagian ini mempunyai tugasnya sendiri-sendiri dan memiliki prosedur masing-masing. Akan tetapi satu bagian harus tetap berhubungan dengan bagian-bagian lainnya agar restoran bisa berjalan dengan lancar dan efisien.
<br/>
<br/>

### Perbedaannya OOP dengan metode prosedural biasa

Pemrograman dengan paradigma prosedural bekerja secara urut dan sistematis, sedangkan OOP bekerja dengan sebuah objek yang fleksibel, dapat dikembangkan _(scalable)_, dan dapat digunakan ulang _(reusable)_

<ins>Analogi Singkat</ins>

Jika kita menggunakan kembali analogi sebelumnya, pemrograman dengan cara prosedural dapat diibaratkan dengan melakukan pelayanan makanan secara berurutan mulai menerima pesanan, memasak di dapur sampai memberikan makanan ke pelanggan. Analogi yang tepat untuk alur prosedural adalah tiap aktifitas restoran tidak mempunyai _standar operational procedure_ (SOP) yang baik. Misalnya ada kemungkinan untuk kasir terlibat dalam bagian dapur, cara pemesanan selalu berubah tiap kali ada pelanggan dan sebagainya. Situasi yang kacau seperti ini dapat menimbulkan konsistensi yang buruk.

Di samping itu, paradigma pemrograman berorientasi objek telah mendefinisikan semua langkah-langkahnya dengan baik. Satu bagian kasir fokus mengerjakan pekerjaannya sesuai dengan prosedur yang jelas dan sudah ditentukan sehingga kasir tidak perlu mengurusi bagian dapur namun tetap berinteraksi dengannya secara rapi dan teratur. Akibatnya setiap bagian (objek) dapat fokus mengerjakan bagiannya masing-masing dengan lebih teratur. Selain itu jika ada masalah dengan alur layanannya, bisa mudah untuk dicari letak kesalahannya dan dapat diterapkan solusi yang mudah untuk diintegrasikan.

<ins>Gambaran pemrograman</ins>

Sama halnya dengan pemrograman sebenarnya. Misalnya pada implementasi form tambah data barang, hal-hal yang diimplementasikan pastinya dimulai dengan:

- menampilkan form
- mempopulasikan data barang
- melakukan validasi dan
- menambahkan rekam data ke database.

Jika menggunakan metode prosedural, biasanya semua itu dilakukan seluruhnya secara berurutan dalam satu file sehingga jika kita ingin membuat edit data barang yang sejatinya memiliki banyak kesamaan dengan tambah data barang harus membuat ulang dan melakukan hal yang sama berulang kali sehingga terjadi duplikasi. Perhatikan juga, hal ini bisa mengakibatkan konsistensi yang buruk seperti misalnya jika ada perubahan pada halaman tambah data, seringkali ada perbedaan kode dengan halaman edit data karena harus ada duplikasi yang dilakukan.

<p align="center">
    <img src="../../assets/content/basics/14_oop_dasar/1-prosedural.png" width="50%" />
</p>

Sedangkan pada pemrograman berorientasi objek, setiap fungsi _use case_ dipecah pada tiap-tiap objek yang nantinya berkorelasi satu sama lain membentuk sebuah fungsi aplikasi yang sebenarnya. Misalnya, objek `Barang` dibuat untuk mempopulasikan data barang. Di objek ini bisa dilakukan hal-hal seperti memastikan data barang tetap pada format dan bentuk yang ditentukan. Begitu pula dengan validasinya, bisa juga dibuat objek seperti `BarangRequest` yang menangani validasi saat sebuah form dikirimkan, memastikan semua inputan sudah sesuai yang diinginkan. Dan begitu pula untuk _use case_ yang lain seperti `BarangModel` khusus untuk interaksi dengan database.

Perhatikan disini karena setiap _use case_ disendirikan pada tiap-tiap objek, developer bisa fokus menuliskan apapun **khusus** untuk _use case_ tersebut. Developer bisa leluasa menuliskan kode-kode yang kompleks hanya untuk _use case_ objek tertentu secara terstruktur. Berbeda dengan prosedural yang prakteknya menumpuk semua kode menjadi satu sehingga susah dibaca dan tidak terstruktur. Ini sangat penting sekali karena dapat memudahkan kinerja programmer dalam memanajemen kode-kodenya. Selain itu, yang paling dirasa keuntungannya yaitu pada saat kerja tim yang mengharuskan kode terstruktur agar dapat dimengerti oleh semua anggota tim.

<p align="center">
    <img src="../../assets/content/basics/14_oop_dasar/2-oop.png" width="50%" />
</p>

## 2. Class dan Object

<br/>

### Apa itu class dan object?

`Class` adalah sebuah template / blueprint. Disinilah ditentukan aturan-aturan atau apa saja yang harus ada dari sebuah objek agar selalu dijaga konsistensinya. Sementara `Object` adalah sebuah penerapan dari _class_ itu sendiri, kita menyebutnya sebagai _instance_

Misalnya ada pengguna yang didalamnya harus ada nama, jenis kelamin, email, alamat dll. Kita bisa buat class `Pengguna` dan menentukan nama, email dll sebagai properti _(kita akan bahas di sub materi berikutnya)_. Lalu kita juga bisa buat penerapan dari class itu. misalnya ada `agus` yang merupakan penerapan dari class `Pengguna`, maka agus ini bisa kita sebut sebagai _object_. Karena `agus` merupakan objek dari class `Pengguna`, maka objek `agus` pasti mengikuti blueprint yang tertulis pada kelasnya, seperti mempunyai nama, email dsb. 

<br/>
### Cara Membuat Class

Cara membuat class adalah dengan menaruh keyword `class` didepan nya diikuti dengan nama kelasnya. Nama kelas harus diawali dengan huruf kapital.

```php
class NamaKelas {

}
```

<br/>

### Cara Membuat Object

Objek dapat dibuat dengan cukup buat sebuah variable, lalu isi dengan instance dari sebuah kelas yaitu dengan `new NamaKelas()`

```php
$agus = new Pengguna();
```
</br>

## 3. Properti dan Method

</br>

### Apa itu property dan method?

`Property` adalah segala asset yang dimiliki oleh sebuah `Class` yang berupa variabel-variabel yang nilai atau valuenya bisa diatur sendiri. Berbeda halnya dengan `Method` yang merupakan aksi yang dimiliki oleh sebuah `Class`. Sebuah Method akan berjalan ketika namanya dipanggil.

</br>

### Cara Membuat Property

</br>

Untuk membuat `Property`, terlebih dahulu untuk menyiapkan sebuah `class`. Setelah itu baru didalam `class` tadi ditambahkan property-property yang diinginkan. Perlu diingat bahwa `property` bisa public, protected atau private

</br>

```php
class NamaKelas {

  // Deklarasi Properti
  public $namaProperti = 'Nilai Properti';
  public $namaPropertDua;

}
```

</br>

### Cara Membuat Method

</br>

Selanjutnya, untuk `method` kurang lebih seperti `property` harus membuat sebuah `class`, kemudian setelah itu sebuah method baru dapat dibuat

</br>

```php
class NamaKelas {

  // Deklarasi Method
  public function namaFunction()
  {
    // Isi dengan perintah yang diinginkan
  }

}
```

</br>


## 4. Constructor dan Destructor

`Constructor dan destructor` adalah salah satu jenis method spesial yang disediakan PHP sebagai fitur paradigma pemrograman berorientasi objek dalam bahasa pemrograman PHP. _Constructor destructor_ ini tak hanya ditemukan dalam PHP namun juga bahasa pemrograman lainnya yang mendukung paradigma OOP. Singkatnya, `Constructor` adalah method yang akan dijalankan pertama kali saat sebuah kelas di instantiasi menjadi objek. Sementara `Destructor` adalah kebalikannya, yaitu method yang dijalankan di akhir penggunaan objeknya. 

Cara membuat constructor adalah mirip dengan saat membuat method biasa. Namun constructor harus dalam berbentuk method yang bernama `__construct` dan harus ditulis dalam sebuah kelas.
```php
class SebuahKelas 
{
  public function __construct() {
    # Ini akan dijalankan pertama kali
  }
}
```
Sementara destructor dapat dibuat dengan membuat method yang bernama `__destruct()`.
```php
class SebuahKelas
{
  public function __destruct() {
    # Ini akan dijalankan terakhir saat objek sudah digunakan
  }
}
```
> <i><small>Source code demo ada di basics/14_oop_dasar/4_constructor_destructor.php</small></i>
<a href='4_constructor_destructor.php' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>

Pada constructor, parameter yang ditetapkan di method `__construct($param)` akan menjadi parameter saat menginstantiasi objek `sebuahKelas($param)`. Ini sangat berguna jika ingin passing data dari parameter saat membuat objek ke kelas internal untuk ditetapkan menjadi nilai properti atau kegunaan yang lain.

```php
class Anggota {
  public $nama
  public $jenisKelamin;
  public function __construct($nama, $jenisKelamin) {
    $this->nama = $nama;
    $this->jenisKelamin = $jenisKelamin;
  }
}
new Anggota('Budi', 'laki-laki');
```
> <i><small>Source code demo ada di basics/14_oop_dasar/4_constructor_destructor2.php</small></i>
<a href='4_constructor_destructor2.php' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>
  
## Property dan method static

Properti dan method dapat juga berbentuk static, artinya tidak ada ketergantungan antara method / properti static dengan objek dari kelasnya. Bahkan faktanya, tidak perlu dibuat objek agar dapat digunakan. Method / properti static adalah salah satu fitur dalam paradigma OOP untuk membuat method atau properti dari sebuah class yang dapat dijalankan tanpa dibuat sebuah objek dari class tersebut.

Untuk membuat properti static, cukup tambahkan keyword `static` sebelum nama variabel. Untuk membuat method static juga mirip, tambahkan keyword `static` sebelum `function`
```php
class Kelas 
{
  public static $propertyStatic;  #  <--  ini adalah properti static 
  public static function methodStatic() {
    # ini adalah method static
  }
}
```
untuk memanggil properti atau method static didalam kelas dapat menggunakan keyword `self::$propertinya` atau `self::methodStaticnya()`. Jika berada dalam parent class dan ingin memanggil dari class turunannya, dapat menggunakan keyword `parent::xx` _(kita akan bahas kelas turunan ini pada materi inheritance nanti)_
```php
class Kelas 
{
  public static $propertiStatic
  public static function methodStatic() {
  }
  public function methodBiasa() {
    $variabel = self::$propertiStatic;   #   <-- Mengakses properti static
    self::methodStatic();   #    <-- menjalankan method static
  }
}
```

Properti dan method static ini pada penggunaannya seringkali digunakan untuk melakukan sesuatu yang tidak spesifik ke objek dari kelas tertentu melainkan ke sesuatu yang lebih umum namun tetap terkait dengan tujuan kelas. Misalnya pada kelas `Kasir` terdapat waktu shift yang tidak spesifik ke kasir melainkan ke seluruh kasir. Pada kasus tersebut kita bisa gunakan method dan properti static seperti berikut 

```php
<?php
class Kasir
{
    public $nama;
    public $alamat;
    /**
     * Variabel properti static untuk menyimpan waktu shift semua kasir
     */
    public static $waktuShift;
    public function __construct($nama, $alamat)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }
    /**
     * Method static untuk melakukan operasi pada properti static
     */
    public static function setWaktuShift($shift)
    {
        self::$waktuShift = $shift;
    }
}
// Set waktu shift menggunakan method static
// Karena method static, jadi tidak perlu ada instantiasi objek
Kasir::setWaktuShift(2);
echo 'Waktu Shift: ' . Kasir::$waktuShift;
```
> <i><small>Source code demo ada di basics/14_oop_dasar/5_property_dan_method_static.php</small></i>
<a href='5_property_dan_method_static.php' target='_blank'>
    <img src="https://img.shields.io/static/v1?&label=Demo&message=%3E&color">
</a>
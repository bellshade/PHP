<p align="center">
  <img width="10%" src="../../../assets/images/phplogo.png" />
  <h1 align="center">Algoritma Pencarian</h1>
</p>

## Ternary Search

Ternary Search dari namanya algoritma ini termasuk ke dalam algoritma pencarian, algoritma ini melakukan pencarian dengan menggunakan 2 cursor atau 2 tempat sekaligus, dimana kedua tempat ini akan membagi array menjadi 3 bagian yang hampir sama panjang, kemudian akan membuang 2 bagian yang jangkauan nya tidak mengandung nilai dicari, untuk lebih memahami dapat kita lihat animasi pola kerja algoritma Ternary Search sebagai berikut.

![ternarysearch](../../../assets/content/algorithms/Searching/Ternary/Ternary.png)

Agar Algoritma ini dapat berjalan ada beberapa persyaratan yang harus terpenuhi, yaitu:

- Kumpulan data berupa `index array`,
- Value dari array berupa numeric,
- Data Array telah tersusun secara berurutan, bila data array tidak tersusun secara berurutan disarankan menggukan Linear Search,
- Nilai yang dicari bertipe sama dengan nilai element array (berupa numerik),

Pola kerja dari pencarian ternary yaitu dengan menggukan 2 cursor pencarian dimana 2 cursor ini akan membagi panjang array menjadi 3 bagian yang hampir sama panjang, untuk itu harus dilakukan perhitungan posisi cursor pada index array agar dapat membagi array tersebut dengan baik.

Secara matematika dapat dihitung dengan membuat sebuah konstanta bernilai panjang array dibagi 3, sehingga diperoleh posisi cursor sebagai berikut:

- Cursor Pertama berada pada Index Pertama array ditambah konstanta,
- Cursor kedua berada pada Index terakhir array dikurang konstanta, atau Cursor Pertama ditambah konstanta.

Jika pada kedua index ini tidak ditemukan nilai yang kita cari maka kita akan memprediksi posisi nilai ini berada di antara 3 bagian yang terbetuk oleh cursor tadi, yaitu:

1. Nilai yang dicari kemungkinan berada di bagian pertama jika nilai cursor pertama lebih besar dari pada nilai dicari | "Nilai di Cari < Nilai Cursor1".
2. Nilai dicari kemungkinan berada di bagian kedua jika nilai cursor kedua lebih besar dari nilai yang dicari dan nilai cursor pertama lebih kecil dari nilai yang dicari | "Nilai Cursor1 < Nilai di Cari < Nilai Cursor2".
3. Nilai dicari kemungkinan berada di bagian terakhir jika nilai cursor kedua lebih kecil dari nilai yang dicari | "Nilai Cursor2 < Nilai di Cari"

Bagian-bagian yang tidak memiliki kemungkinan terdapat nilai yang dicari kita keluarkan dari pencarian, kemudian mengulangi langkah-langkah pencarian sampai cursor satu dan dua bertemu di index yang sama. Jika index tempat cursor ini bertemu tidak sama dengan nilai dicari maka, disimpulkan bahwa nilai yang dicari tidak terdapat dalam kumpulan data ini.

untuk lebih jelas kita susun dalam bentuk alur kerja di bawah ini.

![chartjump](../../../assets/content/algorithms/Searching/Ternary/Ternary.svg)

dari diagram alur kerja tersebut dapat kita susun pseudo code sebagai berikut :

```text
ALGORITMA PENCARIAN SECARA TERNARY

GET
  Array = Kumpulan Data Array
  Nilai = Nilai Dicari

SET
  PanjangArray = COUNT(Array);
  IndexAwal = 0;
  IndexAkhir = PanjangArray - 1;

VALIDASI

WHILE(IndexAwal <= IndexAkhir>)
  Cursor1 = IndexAwal + ((IndexAkhir - IndexAwal)/3)
  Cursor2 = IndexAkhir - ((IndexAkhir - IndexAwal)/3)

  //Jika Nilai ditemukan pada cursor1
  IF Array[Cursor1] == Nilai
    RETURN Cursor1

  //Jika Nilai ditemukan pada cursor2
  IF Array[Cursor2] == Nilai
    RETURN Cursor2

  //Jika Nilai Tidak Ditemukan
  CASE Array[Cursor1] > Nilai
    IndexAkhir = Cursor1 - 1
  CASE Array[Cursor2] < Nilai
    IndexAwal = Cursor2 + 1
  DEFAUL
    indexAwal = Cursor1 + 1
    indexAkhir = Cursor2 - 1
LOOP

//Data Tidak ditemukan
RETURN Null
```

Dari pseudo code di atas kita mulai menyusun code kita ke dalam PHP, dalam hal ini agar lebih flexibel kita akan menerapkan paradigma OOP dalam penulisan code ini seperti algoritma-algoritma sebelumnya.

Tahap awal kita buat sebuah class `TernarySearch` yang memiliki beberapa property seperti di bawah ini:

```php
  <?php

    namespace Search\TernarySearch;

    class TernarySearch
    {
      protected $array;
      protected $nilai;
      protected $indexAwal;
      protected $indexAkhir;

      public function __construct(int $nilai, array $array, int $indexAwal = null, int $indexAkhir = null){
        $this->array = $array;
        $this->nilai = $nilai;
        $this->indexAwal = $indexAwal ?? 0;
        $this->indexAkhir = $indexAkhir ?? count($array) - 1;
      }
    }

  ?>
```

`class` TernarySearch telah kita bentuk dengan beberapa property, langkah selanjutkan kita akan lakukan validasi terhadap parameter yang dikirim ke dalam class, agar method pencarian berjalan dengan baik, untuk validasi data berupa array dan nilai pencarian berupa numerik tidak perlu lagi kita lakukan validasi karena saat menginstanisasi `class` ini ke dalam object telah kita tetap parameter key harus berupa `integer` dan kumpulan data harus berupa `array` atau `object` ini akan gagal dibentuk. Sehingga tinggal 2 validasi yang akan kita lakukan dapat parameter yang dikirim ke dalam class.

1. Kumpulan data array memiliki element bertipe numerik,
2. Element Array harus tersusun secara berurutan.

untuk hal tersebut kita buatkan sebuat method bernama validasi di dalam class TernarySearch dengan hak akses hanya untuk class itu sendiri. Code kita susun sebagai berikut:

```php
<?php
  ........
  class TernarySearch{
    ........
    private function validated(){
      $data = $this->array;
      
      //Validasi array numerik

      //Validasi Sorted Array

      return true;
    }
    ..............
  }

```

Dalam method tersebut kita buat dua validasi, yang pertama kita pastikan array nya memiliki nilai numerik dengan cara kita hitung panjang array keseluruhan dan panjang array yang hanya numerik dan kita bandingkan jumlah kedua nya, jika nilai sama maka dapat dipastikan bahwa array tersebut array numerik, kita tambahkan code ini ke dalam method validasi tadi :

```php
//Validasi array numerik
if (count($data) != count(array_filter($data, 'is_numeric'))) {
  //jika panjang tidak sama kita kembalikan pesan error
  return "Data Bukan Array Numeric";
}
```

Validasi kedua kita buat untuk melakukan pengecekan terhadap array apakah sudah tersusun secara berurutan, dengan cara membadingkan nilai dari index sekarang harus lebih kecil dari nilai dari index sekarang tambah satu | `array[i] < array[i+ 1]`, untuk validasi ini kita bisa membuat sebuah method tersendiri, namun karena method ini digunakan sekali jalan maka kita coba gunakan `closure function` untuk melakukan pengecekan, kecuali kita menggunakan metode rekursif untuk melakukan pengecekan, baris code ini kita tambahkan ke dalam method validasi.

```php
//Validasi Sorted Array
//Parameter dengan closure function untuk melakukan pengecekan
$sortedArray = function($data){
  $nilai = $data[0];
  foreach ( $data as $val ){
    if($val < $nilai){
      return false;
    }
    $nilai = $val;
  }

  return true;
}

//hasil pengecekan
if(!$sortedArray()){
  return "Array tidak terurut, disarankan menggunakan linear search";
}
```

Dengan demikian method validasi selesai. Selanjutnya kita tambahkan method pencarian dengan nama `cari` yang berisi algoritma ternary search, kode PHP seperti berikut:

```php
public function cari()
{
  //Lakukan validasi
  $valid = $this->validated();
  //jika validasi gagal
  if(is_bool($valid)){
    return $valid;
  }

  //cek range dari array
  if($this->array[$this->indexAwal] > $this->nilai || $this->array[$this->indexAkhir] < $this->nilai>){
    return "Data tidak ditemukan, Nilai dicari diluar range dari nilai array";
  }

  //Lakukan pencarian jika semua unsur terpenuhi
  while($this->indexAwal <= $this->indexAkhir){
    //Tentukan Posisi cursor
    $cursorBawah = $this->indexAwal + (($this->indexAkhir - $this->indexAwal)/3);
    $cursorAtas = $this->indexAkhir - (($this->indexAkhir - $this->indexAwal)/3);

    //Cek nilai dari cursor apakah nilai dicari
    //Jika nilai dicari berada pada cursor bawah
    if($this->array[$cursorBawah] == $this->nilai){
      return $cursorBawah
    }

    //Jika nilai dicari berada pada cursor atas
    if($this->array[$cursorAtas] == $this->nilai){
      return $cursorAtas
    }

    //Jika nilai dicari tidak terdapat pada kedua cursor
    switch ($this->nilai){
      //Bila nilai dicari berada di bagian awal array
      case $this->nilai < $this->array[$cursorBawah]:
        $this->indexAkhir = $cursorAtas - 1;
        break;

      //Bila nilai dicari berada di bagian akhir array
      case $this->nilai > $this->array[$cursorAtas]:
        $this->indexAwal = $cursorAtas + 1;
        break;

      //Bila nilai dicari berada di bagian tengah array
      default:
        $this->indexAwal = $cursorBawah + 1;
        $this->indexAkhir = $cursorAtas - 1;
    }
  }

  //Jika nilai tidak ditemukan
  return null;
}
```

Dengan demikian algoritma ternary search kita telah selesai, untuk baris code secara lengkap akan menjadi seperti ini:

```php
<?php
  namespace Searching\TernarySearch;

  class TernarySearch
  {
    protected $nilai;
    protected $array;
    protected $indexAwal;
    protected $indexAkhir

    public function __construct(int $key, array $array, int $awal = null, int $akhir = null){
      $this->nilai = $key;
      $this->array = $array;
      $this->indexAwal = $awal ?? 0;
      $this->indexAkhir = $akhir ?? count($array) - 1;
    }

    private function validated(){
      $data = $this->array;
      
      //Validasi array numerik
      if (count($data) != count(array_filter($data, 'is_numeric'))) {
        return "Data Bukan Array Numeric";
      }

      //Validasi Sorted Array
      //disini kita menggunakan closure function unutk melakukan validasi
      $cek = function(){
        $nilaiCek = $data[0];
        foreach ($data as $val){
          if($nilaiCek > $val){
            return false;
            break;
          }
          $nilaiCek = $val;
        }
        return true;
      };
      
      if(!$cek)
      {
        return "Array tidak terurut, disarankan menggunakan linear search";
      }
    }

    public function cari()
    {
      //Lakukan validasi
      $valid = $this->validated();
      //jika validasi gagal
      if(is_bool($valid)){
        return $valid;
      }

      //cek range dari array
      if($this->array[$this->indexAwal] > $this->nilai || $this->array[$this->indexAkhir] < $this->nilai>){
        return "Data tidak ditemukan, Nilai dicari diluar range dari nilai array";
      }

      //Lakukan pencarian jika semua unsur terpenuhi
      while($this->indexAwal <= $this->indexAkhir){
        //Tentukan Posisi cursor
        $cursorBawah = $this->indexAwal + (($this->indexAkhir - $this->indexAwal)/3);
        $cursorAtas = $this->indexAkhir - (($this->indexAkhir - $this->indexAwal)/3);

        //Cek nilai dari cursor apakah nilai dicari
        //Jika nilai dicari berada pada cursor bawah
        if($this->array[$cursorBawah] == $this->nilai){
          return $cursorBawah
        }

        //Jika nilai dicari berada pada cursor atas
        if($this->array[$cursorAtas] == $this->nilai){
          return $cursorAtas
        }

        //Jika nilai dicari tidak terdapat pada kedua cursor
        switch ($this->nilai){
          //Bila nilai dicari berada di bagian awal array
          case $this->nilai < $this->array[$cursorBawah]:
            $this->indexAkhir = $cursorAtas - 1;
            break;

          //Bila nilai dicari berada di bagian akhir array
          case $this->nilai > $this->array[$cursorAtas]:
            $this->indexAwal = $cursorAtas + 1;
            break;

          //Bila nilai dicari berada di bagian tengah array
          default:
            $this->indexAwal = $cursorBawah + 1;
            $this->indexAkhir = $cursorAtas - 1;
        }
      }

      //Jika nilai tidak ditemukan
      return null;
    }
  }
?>
```

Kita dapat menguji baris kode yang kita buat dengan contoh kode di bawah ini:

```php
// Data Normal
$data = [6, 7, 10, 11, 14, 17, 18, 19, 23, 26, 38, 42, 78, 79, 82, 84];
$nilai = 19;
$ternary = new TernarySearch($nilai, $data);
echo $ternary->cari(); // 7

// Data array tidak terurut
$data = [6, 7, 10, 11, 14,27, 18, 19, 23, 5, 38, 4, 78, 79, 82, 84];
$nilai = 19;
$ternary1 = new TernarySearch($nilai, $data);
echo $tenary1->cari() // Array tidak terurut, disarankan menggunakan linear search


// Data array tidak numerik
$data = [6, 7, 10, 11, 14,'apple', 18, 19, 23, 'sirsak', 38, 'mangga', 78, 79, 82, 84];
$nilai = 19;
$ternary2 = new TernarySearch($nilai, $data);
echo $tenary2->cari() // Array tidak terurut, disarankan menggunakan linear search

```

atau dapat kita gunakan phpunit dalam melakukan pengujian terhadap baris code yang telah kita buat, disini kita akan mentransformasikan baris kode pengujian di atas ke dalam phpunit test.

Pertama kita buat class turunan dari php test unit berupa test case dan data array yang akan digunakan dalam pengujian.

Baris kode sebagai berikut:

```php
<?php
  namespace Testing;
  
  use Searching\Ternary\TernarySearch;
  use PHPUnit\Framework\TestCase;

  class TernarySearchTest extends TestCase
  {
    //Property class
    protected $array;
    protected $key;
    protected $ternary;

    //method untuk membuat random array dengan panjang 20 elem secara default
    public function generateArray(int $int=20)
    {
      $array = [];
      // Buat array dengan random integer
      foreach (range(1, $int) as $key) {
        $array[$key - 1] = rand(1, 100);
      }
      // Acak posisi array
      shuffle($array);
      $this->array = $array;
    }
  }
```

kemudian kita buat tiga test tadi ke dalam method di dalam class Test ini.

```php
/**
 * Test seluruh data normal
 * Pencarian dengan input data normal sehingga pencarian berjalan normal
 * test kita gunakan metode assert numeric, karena data yang kita harapakan berupa int
 */
public function testCari()
{
  // Buat random array yang sudah tersusun
  $this->generateArray();
  $data = $this->array;
  sort($data);

  $nilai = $data[7];

  $this->ternary = new TernarySearch($nilai, $data);
  $hasil = $this->cari();

  $this->assertIsNumeric($hasil, 'Hasil tidak sesuai, test gagal');
}

/**
 * Test Array Terurut
 * Kita melakukan test apakah array sudah terurut
 * dalam test ini kita gunakan assertequal, untuk membadingkan pesan error.
 */
public function testSortedArray()
{
  $this->generateArray();
  $this->ternary = new TernarySearch($this->array[13], $this->array);
  $result = $this->ternary->cari();
  $expected = "Array tidak terurut, disarankan menggunakan linear search";

  $msg = 'Ternary Search : Test pengecekan urutan array gagal, ';
  $msg .= 'hasil diharapkan "' . $expected . '" tidak sama dengan nilai hasil';
  $this->assertEquals($expected, $result, $msg);
}

/**
 * Test Array Numerik
 * Kita gunakan metode assertEquals
 * untuk membandingkan pesan kesalahan jika array tidak numerik
 */
public function testNumericArray()
{
  $this->generateArray();
  $data = $this->array;
  sort($data);
  $nilai = $data[6];

  //kita masukan non string elemen ke dalam array
  $data[10] = 'Mangga';
  $data[4] = 'Jambu';
  $data[18] = 'Sirsak';
  
  //Lakukan pencarian
  $this->ternary = new TernarySearch($nilai, $data);
  $hasil = $this->ternary->cari();

  $expected = "Data Bukan Array Numeric";
  $msg = 'Ternary Search : Test numeric array gagal, hasil yang diharapkan "';
  $msg .= $expected . '" tidak sama dengan nilai hasil';

  $this->assertEquals($expected, $result, $msg);
}
```

Setelah unit test kita susun, test dapat kita lakukan melalui terminal dengan perintah seperti di bawah ini.

```bash
phpunit
```

jika test berhasil akan menghasilkan info seperti di bawah ini.

```text
phpunit tests/
PHPUnit 9.5.0 by Sebastian Bergmann and contributors.

Time: 00:00.083, Memory: 4.00 MB

OK (3 tests, 3 assertions)
```

Dengan demikian algoritam ternary search kita telah selesai. Semoga dapat menambah wawasan saya dan rekan-rekan mengenai bahasa pemograman PHP.

Untuk kode lengkapnya dapat dilihat pada link di bawah ini :

[![Contoh Kode](https://img.shields.io/static/v1?&label=Contoh%20Kode&message=%3e&color)](../../algorithms/searching/ternary/ternarysearch.php)

---

==== : ****TERIMA KASIH**** : ====

### Referensi

- PHP Manual. *"Class and Object"*. [Pranala Luar](https://www.php.net/manual/en/language.oop5.php).
- Edy Budiman. *"Belajar Dasar: Algoritma dan Pemograman"*. Repository Unmul.
- PHPUnit. *"PHPUnit Manual"*. [Pranala Luar](https://phpunit.readthedocs.io/en/9.5/).

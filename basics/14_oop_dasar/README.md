<p align="center">
<img width="30%" src="../../assets/images/bellshade-inline.png" />
<h1 align="center">Object Oriented Programing (OOP)</h1>
</p>

Object Oriented Programing atau pemograman berorientasi terhadap objek lebih sering disebut sebagai OOP adalah salah satu paradigma dalam pemogram untuk memudahkan dalam pengembangan sebuah aplikasi. Materi kali ini kita akan coba mempelajari mengenai paradigma OOP dalam bahasa pemograman PHP.

## Daftar isi

1. [Pengenalan OOP.](#1-pengenalan-pemograman-berorientasi-objek)
    - [Apa itu OOP.](#11-apa-itu-oop)
    - [Perbedaan antara Prosedural dan ber-Orientasi Objek](#12-perbedaan-pemograman-prosedural-dan-pemograman-objek)


## 1. Pengenalan Pemograman Berorientasi Objek

Dalam materi sebelumnya kita sudah mencoba membuat contoh-contoh baris kode yang rata-rata baris kode tersebut merupakan pola kerja pemograman prosedural atau pemograman terstruktur. dalam pemograman ada yang disebut sebagai Paradigma Pemograman yaitu sudut padang seorang programer dalam menyelesaikan suatu kasus atau masalah dengan cara pemograman. Hal ini penting bagi seorang programer untuk mengidentifikasi permasalahan dan menyusun sebuah solusi dalam bentuk pemograman.

Ada beberapa paradigma pemograman sebagai contoh paradigma prosedural yang sudah sering kita gunakan dalam materi sebelumnya, dan paradigma object oriented programing(OOP) atau Pemograman Berorientasi Objek.

### 1.1 Apa itu OOP

OOP bukan hanya sekedar tentang merubah cara menuliskan baris kode, tapi akan mempermudah dalam pengembangan aplikasi kita. sebagai contoh kita analogikan dalam kehidupan sehari-hari kita melakukann komukasi jarak jauh, berbelanja, main game dan lain sebagainya. untuk mempermudahkan semua itu akhirnya kita mengenal yang namanya smartphone. Nah dalam OOP smartphone dapat diartikan sebagai kelas(class) dan Samaun S11 atau iPun X sebagai objek (object), dan fitur-fitur didalamnya berupa metode (method), type, imei, simcard dan lainnya sebagai properti(property). smartphone tersebut dapat mempermudah kita dalam melakukan sesuatu. Contoh bila kita mau pergi kesuatu tempat dari pada antri menuggu kendaraan umum kita dapat menggunakan aplikasi ngabjek atau ngabtaksi, mau main game tinggal buka aplikasi gaming, mau internetan bisa buka aplikasi nomad browser, dan lain sebagainya.

Kesimpulan OOP paradigma pemograman dengan cara menyediakan objek-objek sebagai solusi dalam penyelesaikan masalah pemograman. objek ini biasanya terdiri dari properti dan metode yang saling berkaitan yang digabungkan menjadi satu variabel untuk menyelesaiakan permasalahan sendiri, dan dapat bekerja sama dengan objek lain untuk menyelesaikan permasalahan pemograman yang lebih rumit.

Objek merupakan sebuah variabel instansiasi dari sebuah kelas, atau dapat kita bayangakan sebuah array yang didalam elemennya terdapat bukan hanya data tetapi juga fungsi-fungsi yang disebut metode(method).

Demikian gambaran singkat mengenai Pemograman Berorientasi Objek, untuk lebih memahami kita pelajari lebih lanjut pada materi dibawah ini.

>tips :  
>siapkan secangkir kopi walaupun anda bukan seorang yang suka minum kopi, dan putar musik kegemaran anda, hal ini dapat membatu kita dalam mempelajari materi selanjutnya.

### 1.2 Perbedaan Pemograman Prosedural dan Pemograman Objek

Pemograman Prosedural bekerja secara terstruktur dan sitematis, sedangkan OOP bekerja secara flexsible dengan menggunakan objek, atau dapat kita gunakan analogi seperti sebelumnya.
Dimana sebuah pemogram prosedural adalah kita tanpa smartphone dan OOP kita dengan smartphone, keduanya dapat mengerjakan hal yang sama tapi dengan cara yang berbeda, contoh saat kita ingin kesekolah atau kekantor dengan ojek dalam pemograman prosedural kita akan menjalankan prosedur siapkan uang tunai pergi ke pangkalan ojek, jika ojek tidak ada tunggu, jika tidak bisa menunggu pergi ke pangakalan lain, jika sudah ketemu ojeknya sampaikan ke abang ojek tujuan kita dan tanya biayanya, jika sudah oke berangkat ketujuan dengan abang ojek dan lakukan pembayaran. Nah dalam pemograman OOP kita cukup menggunakan smartphone dengan membuka aplikasi ngabjek tadi masukan tujuan kita, maka aplikasi tadi akan menemukan ojeknya serta menginformasikan biaya yang harus kita keluarkan, kita bisa pilih motode pembayaran secara tunai atau dengan nomad pay, jika kita setuju tinggal pilih oke dan menunggu jemputan dari abang ojeknya sambil mendengar musik dan menyeruput kopi yang kita buat tadi.

Nah diatas kita melakukan hal yang sama dengan cara yang berbeda dan tentu memiliki kelebihan dan kekurangan sendiri.

Dari analogi diatas pemograman prosedural berisi perintah dan tugas tugas yang terstruktur secara sitematis sehingga permasalahan dapat diselesaikan, sedangkan dalam OOP pemograman menggunakan sebuah objek yang dapat menyelesaikan masalah dengan solusi yang telah ditanamkan kepadanya dan bisa kita lihat metode-metode didalam objek dapat bekerja sama untuk menyelesaikan masalah seperti contoh diatas ngabjek dapat bekerja sama dengan nomad pay untuk menyelesaikan masalah pembayaran.

Secara umum Pemograman Prosedural berkerja secara terstruktur dengan cara memanggil prosedur-prosedur, prosedure ini berupa fungsi, rutinitas dan sub rutinitas, melakukan pendekatan tahap demi tahap terhapat masalah komputasi, untuk memecahkan masalah tersebut menjadi variabel dan rutinitas melalui perintah-perintah terstruktur dan berurutan.

Dengan demikian pemograman prosedural melakukan pendekatan dari atas dengan memecah sebuah program besar menjadi bagian bagian kecil berupa fungsi. ini bekerja secara langsung secara logika megikuti alur. data akan berpindah dari satu fungsi ke fungsi yang lain secara bebas.

Sedangkan pemograman berorientasi terhadap objek semua hal dalam komputasi akan di ibaratkan sebagai sebuah objek yang terorganisir bertujuan membantu dalam menyelesaikan masalah komputasi. sehingga apapun dapat di gambarkan kedalam objek ini. Objek berisikan fungsi-fungsi dan atribute-atribute, dimana objek dapat di gandakan dengan nilai dari atribut berbeda-beda tetapi dapat menjalankan fungsi yang sama. Karena bersifat modular objek dapat digunakan kembali. sehingga pengembangan dan perawatan sebuah aplikasi menjadi lebih mudah. Data dalam properti dan metode objek dapat diproteksi dengan encapsulasi dan pemberikan batas hak akses modifikasi dimana dalam OOP dibagi 3 kelompok yaitu, private, protected, public dengan demikian data dirasa "lebih aman" dari pada pemograman prosedural.

Dibawah ini sebuah contoh sederhana baris kode menggunakan pendekatan prosedural dan pendekatan secara objek untuk membuat sebuah array, menambahkan nilai kedalam array kemudian memanggil nilai tersebut.

contoh Prosedural :

```php
<?php
function newContoh(){
    retrun array();
}

function SetContoh(&$contoh, $nama, $nilai){
    return $contoh[$nama] = $nilai;
}

function getContoh($contoh, $nama){
    return isset($contoh[$nama]) ? $contoh[$nama] : null;
}

#driven
$contoh = newContoh();
setContoh($contoh, 'nama', 'Bellshade');
echo getContoh($contoh, 'nama');        //hasil Bellshade
?>
```

contoh OOP :

```php
<?php
class Contoh
{
    private $param = array();

    public function set($nama, $nilai){
        $this->param[$nama] = $nilai;
    }

    public function get($nama){
        return isset($this->param[$nama]) ? $this->param[$nama] : null;
    }
}

#driven
$contoh = new Contoh();
$contoh->set('nama', 'Bellshade');
echo $contoh->get('nama')       //Hasil Bellshade
?>
```

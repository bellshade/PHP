<p align="center">
  <img width="10%" src="../../../assets/images/phplogo.png" />
  <h1 align="center">Algoritma Pencarian</h1>
</p>

## Pencarian Interpolasi

Pencarian Interpolasi merupakan salah satu algoritma pencarian biner, dimana syarat utama dalam melakukan pencarian dengan algoritma ini adalah kumpulan data yang akan diperiksa telah terurut (sorted).

Algoritma ini merupakan menigkatan atau perbaikan dari algoritam pencarian binary, dimana kedua algoritma ini akan memecah kumpulan data menjadi dua bagian. Perbedaan antara kedua algoritma ini terdapat pada cara menentukan index tengah dari kumpulan data, dimana pada binary search index tengah ditentukan berdasarakan dari urutan key dari kumpulan data, sedangkan pada Interpolation Search index tengah di tentukan berdasarkan range atau selisih dari setiap nilai dalam kumpulan data.

Untuk mendapatkan index tengah algoritma ini menggunakan perhitungan sebagai berikut:
<p align="center">
  <img src="../../../assets/content/algorithms/searching/Interpolation/fungsi.png" />
</p>

dimana:

- I<sub>t</sub> = Index Tengah
- I<sub>0</sub> = Index Awal
- I<sub>a</sub> = Index Akhir
- N<sub>0</sub> = Nilai Awal
- N<sub>a</sub> = Nilai Akhir
- C = Nilai dicari


contoh data yang sama kita gunakan pada binary search sebelumnya :

kumpulan data = array(6,7,10,11,14,17,18,19,23,26,38,42,78,79,82,84,85)
nilai dicari = 38

maka nilai tengah akan kita peroleh dengan perhitungan sebagai berikut:

I<sub>t</sub> = 0 + ((16 - 0)/(85 - 6) * (38 - 6))

I<sub>t</sub> = 0 + ((16/79) * 32)

I<sub>t</sub> = 0 + (512/79)

I<sub>t</sub> = 0 + 6 = 6

jadi index tengah berada pada key index 6, dinama nilai pada key index 6 adalah 18, karena 18 lebih kecil dari nilai dicari maka kumpulan data bagian kiri atau yang lebih kecil sama dengan 18 kita keluarkan dari pencarian sehingga index awal = 7 dengan nilai awal = 19, seperti ini kumpulan data = array(19,23,26,38,42,78,79,82,84,85), kemudian kita hitung kembali nilai tengah dari kumpulan data baru.

index tengah selanjutnya dengan rumus/fungsi yang sama kita peroleh pada index ke 12 dengan nilai 78, dimana nilai index ini lebih besar dari nilai dicari maka, kumpulan data bagian atas kita keluarkan dari pencarian dengan menetapkan index terakhir pada index 11 dengan nilai 42.

Index tengah selanjutnya kita peroleh pada index ke 10, dan nilai index ini adala nilai yang kita cari.

Itulah pola kerja dari algoritma pencarian interpolasi ini, kita dapat menulis pseudo code untuk fungsi pencarian ini sebagai berikut :

```text
ALGORITMA PENCARIAN INTERPOLASI

GET
Data Array
Nilai dicari
Index Awal
Index Akhir

WHILE (Index Awal < Index Akhir OR Nilai Awal != Nilai Akhir)

  SET mid = Index Awal + ((Index Akhir - Index Awal) / (Nilai Akhir - Nilai Awal) * (Search Val - Nilai Awal))

  SWITCH (Nilai Mid)
    CASE Nilai Mid == Nilai dicari
      RETURN mid
    CASE Nilai mid < Nilai dicari
      Index Awal = mid + 1
    CASE Nilai mid > Nilai dicari
      Index Akhir = mid - 1
  END SWITCH

END WHILE

RETURN Data tidak ditemukan
```
---
>**Info !** :  
>***pseudo code*** atau kode samaran biasa digunakan oleh para programer untuk menulis algoritma sehingga dapat dengan mudah dimengerti untuk kemudian diterjemahkan kedalam bahasa pemograman (interpreter/compiler).  
>***pseudo code*** tidak memiliki aturan penulisan yang baku.

---
\*\*\* Terima kasih \*\*\*

### Referensi

- Programiz. *"Binary Search C, C++, Java, Python"*. [Pranala Luar](https://www.programiz.com/dsa/binary-search).
- Kela Casey, *"Let Us Understand Searching Algorithms"*. [Codersera](https://codersera.com/blog/let-us-understand-searching-algorithms/). 2020
- Edy Budiman. *"Belajar Dasar: Algoritma dan Pemograman"*. Repository Unmul.
- Udy Manber. *Using Mathematical Induction to Design Computer Algorithms*, Computer Science Technical Report#660. 1986.
- PHP net. *"PHP Manual - Class and Object"*. [Pranala Luar](https://www.php.net/manual/en/language.oop5.php)

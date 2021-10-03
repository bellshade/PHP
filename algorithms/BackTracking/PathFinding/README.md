## Pathfinding menggunakan Backtracking


Pathfinding adalah salah satu implementasi algoritma backtracking
yang tujuannya adalah menemukan jalan dari posisi awal sampai ke tujuan.

Implementasinya yaitu dengan menggunakan array matrix / array 2 dimensi sebagai
Peta yang akan dilalui oleh algoritma pathfinding. Didalam peta tersebut terdapat
kotak atau cell yang tidak dapat dilalui oleh pathfinding. Oleh karena itu,
untuk mencapai tujuan, pathfinding harus mencari jalan dengan menggunakan algoritma backtracking

Skenario:
- parameter variabel x dan y digunakan untuk menentukan tempat berpijak sekarang
- indeks baris dan kolom terakhir ditetapkan sebagai tujuan. [n(xArray)-1, n(yArray)-1]

Algoritma ini dalam kalimat bahasa indonesia adalah sebagai berikut:

1. cek posisi [x, y] sekarang apakah sudah sampai tujuan yang diinginkan?
   > Jika ya: Tandai posisi ini sebagai langkah yang benar. hentikan langkah selanjutnya
   > Jika tidak: lakukan langkah berikutnya


2. cek posisi [x, y] sekarang apakah boleh dipijaki atau tidak?
   > jika ya:
     - Catat posisi sekarang [x, y] sebagai langkah yang benar
     - Bergerak kekanan dengan cara kembali ke langkah a (Rekursif) membawa nilai y+1
       > Jika berhasil: Tandai kekanan adalah jalan yang tepat, kembalikan nilai 1, hentikan langkah selanjutnya
       > Jika tidak: lanjut ke langkah selanjutnya
     - Bergerak kebawah dengan cara kembali ke langkah a (Rekursif) membawa nilai x+1
       > Jika berhasil: Tandai kebawah adalah jalan yang tepat, kembalikan nilai 1, hentikan langkah selanjutnya
       > Jika tidak: lanjut ke langkah selanjutnua
     - Di titik ini, tidak ada gerakan yang dapat dilakukan / Jalan Buntu
     - catat posisi sekarang [x, y] sebagai langkah yang salah
     - tandai posisi ini bukan jalan yang tepat dengan mengembalikan nilai 0 / false (Backtracking)

   > Jika tidak:
     - tandai posisi ini bukan jalan yang tepat dengan mengembalikan nilai 0 / false (Backtracking)

Secara sederhana, algoritma ini menjalankan 2 action yaitu: bergerak kekanan dan kebawah secara terus menerus
sampai tujuannya tercapai yaitu: berada di tujuan dan berada di tempat yang boleh dipijaki / tanpa rintangan.
Jika tiap recursive tidak tercapai tujuannya, maka tidak akan terus mendalami
kemungkinan action itu dan akan berpindah ke kemungkinan action lainnya

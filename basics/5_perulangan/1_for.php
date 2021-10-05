<?php

    /**
     * Perulangan
     * Contoh sederhana interaksi Array dengan Perulangan For
     * Jalankan dengan terminal untuk mendapat hasil lebih baik
     *
     * Kondiak
     */

     // Variable Array
     $mahlukhidup = [
         ['nama' => 'ikan', 'jenis' => 'hewan', 'habitat' => 'air', 'code' => '029381'],
         ['nama' => 'burung', 'jenis' => 'hewan', 'habitat' => 'darat', 'code' => '098367'],
         ['nama' => 'sagu', 'jenis' => 'tanaman', 'habitat' => 'darat', 'code' => '023485'],
         ['nama' => 'rumput laut', 'jenis' => 'tanaman', 'habitat' => 'air', 'code' => '267851'],
         ['nama' => 'mangga', 'jenis' => 'tanaman', 'habitat' => 'darat', 'code' => '120978']
     ];

     //Untuk Tampilan

     $format = "\n" . ': %1$1s : %2$12s : %3$13s : %4$9s : %5$18s :';

     echo <<<EOH
     ---- -------------- --------------- ----------- --------------------
      No   Nama            Jenis          Habitat           Kode
     ---- -------------- --------------- ----------- --------------------
     EOH;

     /**
      * Contoh Penggunaan For Secara Umum
      * salah satu ekspresi memiliki dua argumen
      * Menampilkan data Array dengan perulangan for
      */
     for ($i = 0, $size = count($mahlukhidup); $i < $size; ++$i) {
         $nama = $mahlukhidup[$i]['nama'];
         $jenis = $mahlukhidup[$i]['jenis'];
         $habitat = $mahlukhidup[$i]['habitat'];
         $kode = $mahlukhidup[$i]['code'];
         printf($format, $i, $nama, $jenis, $habitat, $kode);
     }

     /**
      * Contoh Penggunaan For tanpa truth expression
      * Conditional Statement digunakan untuk menghentikan perulangan
      * Mengganti nilai dalam array dengan dengan nilai sembarang
      */
     for ($i = 0, $size = (count($mahlukhidup) - 1);; $i++) {
         if ($i > $size) {
             break;
         } else {
             $mahlukhidup[$i]['code'] = mt_rand(000000, 999999);
         }
     }

     //tampilan info
     echo "\n \n Setelah Code di Edit Random \n";

     //tampilkan hasil edit code array
     $j = 0;
     foreach ($mahlukhidup as $mh) {
         printf($format, $j, $mh['nama'], $mh['jenis'], $mh['habitat'], $mh['code']);
         $j++;
     }

     /**
      * Cara Penggunaan For Tanpa Ekspressi
      * Conditional Statement digunakan untuk menghentikan perulangan
      * Ekspresi lainnya nya digabungkan kedalam statement
      * Edit nilai array dengan nilai tetap
      */
     $i = 0;
     for (;;) {
         $size = count($mahlukhidup) - 1;
         if ($i > $size) {
             break;
         } else {
             $mahlukhidup[$i]['code'] = 250025;
              $i++;
         }
     }

     // Tampilan Hasil Edit
     echo "\n \n Setelah Edit dengan nilai di tetapkan \n";
     $k = 0;
     foreach ($mahlukhidup as $mh) {
         printf($format, $k, $mh['nama'], $mh['jenis'], $mh['habitat'], $mh['code']);
     }

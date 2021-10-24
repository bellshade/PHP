<?php

echo "<br><h1>4. Static Variabel</h1>";
echo "<br><br><strong>NOTE :</strong><br>Static berfungsi untuk menetapkan nilai variabel ketika fungsi dipanggil secara terus-menerus";
echo "<br><h3>Contoh 1, Jika Menggunakan Static</h3>";
function add1()
{
    static $number = 0;
    $number++;
    return $number;
}

  echo add1();
  echo "<br>";
  echo add1();
  echo "<br>";
  echo add1();

  echo "<br><h3>Contoh 2, Jika Tidak Menggunakan Static</h3>";
  function add2()
  {
      $number = 0;
      $number++;
      return $number;
  }
    echo add2();
    echo "<br>";
    echo add2();
    echo "<br>";
    echo add2();

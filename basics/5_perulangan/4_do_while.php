<?php

echo '<pre>';
echo '<h1><strong>Perulangan PHP</strong></h1>';
echo'<h1><strong>1.Menggunakan For</strong></h1></br>';
echo'</br>';
//======================Teknik Sederhana Perulangan For ==========================
//Teknik Basic
echo'<h3><strong>Teknik Dasar</strong></h3></br>';

echo'- Ascending 1-5</br></br>';
//====================================
//Logic : Pertama melakukan Pendeklarasi i dengan nilai awal 1, Lalu Kondisi Jika i dibawah 5 maka i nambah 1 tiap perulangan
$i = 1;
do {
    echo 'Perulangan ' . $i . '</br>';
    $i++;
} while ($i <= 5);
//====================================


echo'</br></br>- Descending 5-1</br></br>';
//====================================
//Logic :Pertama melakukan Pendeklarasi i dengan nilai awal 5, Lalu Kondisi Jika i atas, 5 maka i kurang 1 tiap perulangan
$i = 5;
do {
    echo 'Perulangan ' . $i . '</br>';
    $i--;
} while ($i >= 1);


echo'</br></br>- Nested Loop</br></br>';
//====================================

$i = 1;
do {
    $j = 1;
    do {
        echo '*';
        $j++;
    } while ($j <= $i);
      echo '</br>';
      $i++;
} while ($i <= 5);
//==============================================================================
echo '</pre>';

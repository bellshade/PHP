<?php

echo "<br><h1>3. Scope Variabel</h1>";
echo "<br><h3>Contoh 1</h3>";
//============================================1.Contoh 1============================================
//Deklarasi Variabel global
$a = 1;
echo "<br>1.Deklarasi Variabel global a = 1";
function fun()
{
    echo "<br>2. Membuat Function";
    echo "<br>3. Menampilkan variabel a didalam function";
    echo "<br>$a";
    echo "<br>4. Terjadi error, ketika nampilin a";
    echo "<br><br><h4>kenapa bisa error??</h4><br>hal ini terjadi error pada PHP karena variabel didalam function dianggap sebagai variabel asing yg belum dideklarasi";
    echo "<br>dalam php, global variabel dengan variabel dalam function dianggap sebuah variabel berbeda";
    echo "<br>hal ini solusinya yaitu memberi key global lalu diikuti nama variabel, seperti contoh nomor 2 agar variabel tersebut bisa di assign ke variabel global";
}

fun();
echo $a;
echo "<br><br><strong>NOTE :</strong><br>dalam php, global variabel dengan variabel dalam function dianggap sebuah variabel berbeda<br>Hanya Ada 2 pilihan, yaitu memberi global variabel atau membuat variabel dengan nama berbeda";
//============================================2.Contoh 2============================================
//Deklarasi Variabel global
echo "<br><h3>Contoh 2</h3>";
$x = 1;
$y = 2;
echo "<br>1.Deklarasi Variabel global x = 1, y=2";
function Sum()
{
    echo "<br>2. Membuat Function";
    global $x, $y;
    echo "<br>3. Assign global function";
    $y = $x + $y;
    echo "<br>4.x = x + y";
    echo "<br>5. Nampilin y = $y";
}

Sum();

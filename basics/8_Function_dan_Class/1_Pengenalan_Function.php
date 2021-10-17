<?php

echo "<h1>1. Pengenalan Function</h1>";
echo "<br><h3>1. Teknik Dasar</h3>";
//============================================1.Teknik Dasar============================================
function hello()
{
    echo "Hello World";
}

//Sintaks Call Function
hello();
//============================================

echo "<br><h3>2. Function Dengan Return</h3>";
//============================================2.Function dengan return============================================
function HaloDunia()
{
    return "Hello World";
}

//Sintaks Call Function
echo HaloDunia();
//============================================

echo "<br><h3>3. Function dengan return dan parameter</h3>";
//============================================3. Function dengan return dan parameter============================================
function mynameIs(string $name)
{
    return "Hello, Namaku $name, salam kenal";
}
//Sintaks Call Function
echo mynameIs("Haikal");
//============================================

echo "<br><h3>4. Function Rekursif</h3>";
//============================================4. Function Rekursif============================================
//Sebuah Function yang melakukan pemanggilan terhadap diri sendiri
function rekursif(int $angka)
{
    if ($angka > 0) {
        echo "<br>$angka";
        rekursif($angka - 1);
    } else {
        return "$angka";
    }
}
//Sintaks Call Function
echo rekursif(10);
//============================================

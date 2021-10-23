<?php

echo "<br><h1>2. Function Dengan Return dan Parameter</h1>";
echo "<br><h3>A.Function dengan return</h3>";
//============================================1.Function dengan return============================================
function HaloDunia()
{
    return "Hello World";
}

//Sintaks Call Function
echo HaloDunia();
//============================================
echo "<br><br><h3>B.Function dengan parameter</h3>";
//============================================2.Function dengan parameter============================================
//Selain Menyimpan Berbagai Code dalam sebuah Function, Function dapat juga dilakukan sebagai pengembalian nilai
//dimana ini berfungsi untuk menampilkan hasil apa saja yang sudah dikerjakan oleh si Function,
//Lalu akan return sebuah nilai dari sebagai output nya
//Function dengan return akan Dapat Dilakukan dengan 2 cara, yaitu:
function Perkenalan(string $name)
{
    echo "Hello, Namaku $name, salam kenal";
}
//Sintaks Call Function
Perkenalan("Haikal");
//============================================

echo "<br><h3>3. Function dengan return dan parameter</h3>";
//============================================3. Function dengan return dan parameter============================================
function Perkenalan2(string $name)
{
    return "Hello, Namaku $name, salam kenal";
}
//Sintaks Call Function
echo Perkenalan2("Haikal");
//============================================

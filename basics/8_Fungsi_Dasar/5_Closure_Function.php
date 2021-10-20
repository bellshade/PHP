<?php

echo "<br><h1>5. Closure Function</h1>";
echo "<br><br><strong>NOTE :</strong><br>Closure Function sebuah teknik menyimpan fungsi didalam sebuah variabel, dan return nya akan ditampung didalam variabel";
echo "<br><h3>Contoh 1</h3>";
echo "<br><h3>Teknik Dasar</h3>";
$fungsi = function ($a, $b) {
    return $a + $b;
};

var_dump(
    $fungsi(1, 2) //true
);

//======================================================
echo "<br><h3>Contoh 2</h3>";
echo "<h3>Nested Closure Function</h3><br>";
$fungsi1 = function ($a) {
    return function ($b) {
        global $a;
        return $a + $b;
    };
};
//======================================================
//Pemanggilan Nested Closure Function
$fungsi2 = $fungsi1(4);
$result = $fungsi2(3);
//=====================================================
var_dump(
    $result //true
);
   echo "<br> $result";
   //====================================================

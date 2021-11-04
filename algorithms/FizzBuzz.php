<?php
/*
FizzBuzz

Cara Kerja fizzbuzz
1. melakukan perulangan ke n 
2. lakukan perkondisian 


Kondisi yang dilakukan
1. Jika n sisa bagi 3 sama dengan 0 dan jika n sisa bagi 5 sama dengan 0 maka akan menampilkan 'FizzBuzz'
2. Jika n sisa bagi 3 sama dengan 0 maka akan menampilkan 'Fizz'
3. Jika n sisa bagi 5 sama dengan 0 maka akan menampilkan 'Buzz'
4. Jika n tidak ketiga nya akan menampilkan n itu sendiri 

*/
for($i = 1 ; $i < 100 ; $i++) {
    if($i % 3 === 0 && $i % 5 === 0) {
        echo "<p>FizzBuzz</p>";
    } elseif($i % 3 === 0) {
        echo "<p>Fizz</p>";
    } elseif ($i % 5 === 0) {
        echo "<p>Buzz</p>";
    } else {
        echo "<p>$i</p>";
    }
}
?>

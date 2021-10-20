<?php

//Post Increment
echo "\n Postincrement \n";
$a = 5;
echo "a bernilai 5: " . $a++ . "\n";
echo "a bernilai 6: " . $a . "\n";

// Pre Increment
echo "\n Preincrement \n";
$a = 5;
echo "a bernilai 6: " . ++$a . "\n";
echo "a bernilai 6: " . $a . "\n";

// Post Decrement
echo "\n Post - decrement \n";
$a = 5;
echo "a bernilai 5: " . $a-- . "\n";
echo "a bernilai 4: " . $a . "\n";

// Pre Decrement
echo "\n Pre - Decrement \n";
$a = 5;
echo "a bernilai 4: " . --$a . "\n";
echo "a bernilai 4: " . $a . "\n";

// Increment Alphabet/Char
echo "\n";
echo "Increment Decrement Char \n";
echo '== Alphabets ==' . "\n";
$s = 'X';
for ($n = 0; $n < 6; $n++) {
    echo ++$s . "\n";
}
// Increment data berupa Char dan Digit
echo '== Digits ==' . "\n";
$d = 'B5';
for ($n = 0; $n < 6; $n++) {
    echo ++$d . "\n";
}
$d = 'BELLSHADE08';
for ($n = 0; $n < 6; $n++) {
    echo ++$d . "\n";
}

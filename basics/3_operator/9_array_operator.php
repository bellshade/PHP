<?php

$a = array('a' => 'nila', 'b' => 'gurame');
$b = array('a' => 'bawal', 'b' => 'lele', 'c' => 'bucuk');

// Union $a dan $b
$c = $a + $b;       //Union
echo "Union dari \$a dan \$b: \n";
var_dump($c);       //dump result

// Union $b dan $a
$c = $b + $a;       //Union
echo "Union dari \$b dan \$a: \n";
var_dump($c);       //dump result

// Union $a += $b (Assignment Operator)
$a += $b;           //Union
echo "Union dari \$a += \$b: \n";
var_dump($a);       //dump result

/** comparison
 *
 * @var $c $d as Array
 * @return Array
 */
$c = array("apel", "mangga");
$d = array(1 => "mangga", "0" => "apel");

var_dump($c == $d);        // Equality
var_dump($c === $d);       // Identity

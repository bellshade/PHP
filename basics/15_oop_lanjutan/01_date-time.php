<?php 
$datetime = new DateTime();
$datetime->setDate(2022, 4, 21);
$datetime->setTime(10, 10, 10, 0);

$datetime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$datetime->add($minusOneMonth);

var_dump($datetime);


$now = new DateTime();
var_dump($now);

$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$now->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($now);
?>
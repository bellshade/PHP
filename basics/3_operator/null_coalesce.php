<?php

$ikan1 = null;
$ikan2 = null;
$ikan3 = "bawal";
$ikan4 = "gurame";

var_dump(($ikan1 ?? $ikan2 ?? $ikan3 ?? $ikan4) . "\n");        //hasil "bawal"
var_dump(($ikan1 ?? $ikan2 ?? $ikan4 ?? $ikan3) . "\n");        //hasil "gurame"

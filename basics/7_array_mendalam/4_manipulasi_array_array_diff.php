<?php

$myHobies = ['coding', 'gaming'];
$yourHobies = ['reading', 'gaming'];

echo '<pre>$myHobies = ' . json_encode($myHobies) . '</pre>';
echo '<pre>$yourHobies = ' . json_encode($yourHobies) . '</pre>';

echo 'Hasil <code>array_diff</code> : ' . json_encode(array_diff($myHobies, $yourHobies));

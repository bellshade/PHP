<?php

require_once __DIR__ . '/vendor/autoload.php';

// hilangkan tanda #

$mpdf = new #\Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello World!</h1>');
$mpdf->Output();

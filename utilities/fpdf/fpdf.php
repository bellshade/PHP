<?php

require 'src/fpdf.php';

$pdf = new FPDF();

$pdf->AddPage();
$pdf->Cell('Hello World!');
$pdf->Output();

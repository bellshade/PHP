# FPDF

- Website: [http://www.fpdf.org/](http://www.fpdf.org/)

- Download: [http://www.fpdf.org/en/download.php](http://www.fpdf.org/en/download.php)

- Example: fpdf.php

```php
require 'src/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
```

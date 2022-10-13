<?php
    $sekarang = mktime(12, 13, 40, date('m'), date('d'), date('Y'));
    echo "Sekarang tanggal ".date('d F Y', $sekarang);

    $bulanlalu = mktime(0, 0, 0, date('m')-1, date('d'), date('Y'));
    echo "<br>Satu bulan yang lalu adalah tanggal ".date('d F Y', $bulanlalu);

    $lusa = mktime(0, 0, 0, date('m'), date('d')+2, date('Y'));
    echo "<br>Lusa adalah tanggal ".date('d F Y', $lusa);

    $tahun = mktime(0, 0, 0, date('m'), date('d'), date('Y')-2);
    echo "<br> Dua tahun yang lalu adalah tanggal ".date('d F Y', $tahun);
?>
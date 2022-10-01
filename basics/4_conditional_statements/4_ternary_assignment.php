<?php
    $nilai_ujian = 86;

    // Mengisi nilai true ke variabel $isLulus apabila kondisi ($nilai_ujian > 75) menghasilkan true
    $isLulus = $nilai_ujian > 75 ? true : false;

    // Mencetak string "Lulus KKM !" jika $isLulus bernilai true
    // Mencetak string "Tidak lulus KKM !" jika $isLulus tidak bernilai true
    echo $isLulus ? "Lulus KKM !" : "Tidak lulus KKM !";
?>
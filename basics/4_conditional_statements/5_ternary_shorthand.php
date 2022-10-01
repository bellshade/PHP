<?php
    $nilai_ujian = 80;

    // Mengisi variable $isLulus dengan nilai true apabila value $nilai_ujian lebih dari 75
    // Mengisi variable $isLulus dengan nilai false apabila value $nilai_ujian tidak lebih dari 75
    $isLulus = $nilai_ujian > 75 ?: false;
    
    // Mencetak string "Lulus KKM !" jika $isLulus bernilai true
    // Mencetak string "Tidak lulus KKM !" jika $isLulus tidak bernilai true
    echo $isLulus ? "Lulus KKM !" : "Tidak lulus KKM !";
?>
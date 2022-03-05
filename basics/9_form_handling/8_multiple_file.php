<?php
// Membuat Folder untuk menampung file upload
$dir = 'storage';

// Mengecek apakah folder storage belum ada
if (!is_dir($dir)) {
    // Membuat Folder jika belum ada
    mkdir($dir);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple File - Penanganan Formulir</title>
</head>

<body>

    <h1>Multiple File</h1>
    <hr>
    <p>
        Berikut contoh penaganan formulir dengan input type <code>Multiple File</code>
    </p>

    <h2>Contoh</h2>
    <!-- Formulir -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Pilih Gambar Anda:</label><br><br>
        <input type="file" name="fileToUpload[]" id="fileToUpload" accept="image/*" multiple>
        <button type="submit" name="btn_contoh1">Kirim</button>
    </form>

    <!-- Jika formulir dikirim -->
    <?php
    if (isset($_POST['btn_contoh1'])) {
        // Folder yang akan menjadi target penyimpana File
        $target_dir = "storage/";
        $files = $_FILES;
        $jumlahFile = count($files['fileToUpload']['name']);
        
        // Looping untuk mendapat isi dari array yang berisi gambar
        for ($i = 0; $i < $jumlahFile; $i++) {
            $namaFile = $files['fileToUpload']['name'][$i];
            $lokasiTmp = $files['fileToUpload']['tmp_name'][$i];
        
            $namaBaru = uniqid() . '-' . $namaFile;
            $lokasiBaru = "{$target_dir}/{$namaBaru}";
            $prosesUpload = move_uploaded_file($lokasiTmp, $lokasiBaru);
        
            // jika proses berhasil
            if ($prosesUpload) {
                echo "Upload file <a href='{$lokasiBaru}' target='_blank'>{$namaBaru}</a> berhasil. <br>";
            } else {
                echo "<span style='color: red'>Upload file {$namaFile} gagal</span> <br>";
            }
        }
    }
    ?>

</body>

</html>
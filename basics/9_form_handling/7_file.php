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
    <title>File - Penanganan Formulir</title>
</head>

<body>

    <h1>File</h1>
    <hr>
    <p>
        Berikut contoh penaganan formulir dengan input type <code>File</code>
    </p>

    <h2>Contoh</h2>
    <!-- Formulir -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Pilih Gambar Anda:</label><br><br>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <button type="submit" name="btn_contoh1">Kirim</button>
    </form>

    <!-- Jika formulir dikirim -->
    <?php
    if (isset($_POST['btn_contoh1'])) {
        // Folder yang akan menjadi target penyimpana File
        $target_dir = "storage/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Cek Gambar apakah benar-benar gambar
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File adalah sebuah gambar - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "File Bukan Gambar";
            $uploadOk = 0;
        }
        // Cek Apakah Upload Ok 0 atau bukan
        if ($uploadOk == 0) {
            echo "Maaf, file anda gagal di upload";
        // Upload file kalau semua aman
        } else {
            // Memindahkan file yang diupload ke folder storage
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "File " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " sudah di upload";
            } else {
                echo "Upload Error";
            }
        }
    }
    ?>

</body>

</html>
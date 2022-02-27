<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time - Penanganan Formulir</title>
</head>

<body>

    <h1>Date Time</h1>
    <hr>
    <p>
        Berikut contoh penaganan formulir dengan input type <code>datetime</code> (tanggal dan waktu)
    </p>

    <h2>Contoh</h2>
    <!-- Formulir -->
    <form action="" method="post">

        <label for="specialTime">Pilih hari Spesial (tanggal and waktu):</label>
        <input type="datetime-local" id="specialTime" name="specialTime">
        <button type="submit" name="btn_contoh1">Kirim</button>
    </form>

    <!-- Jika formulir dikirim -->
    <?php
    if (isset($_POST['btn_contoh1'])) {
        $specialTime = $_POST['specialTime'];
        echo "Saya memilih: $specialTime sebagai hari spesial saya";
    }
    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Box - Penanganan Formulir</title>
</head>

<body>

    <h1>Check Box</h1>
    <hr>
    <p>
        Berikut contoh penaganan formulir dengan input type <code>Check Box</code>
    </p>

    <h2>Contoh</h2>
    <!-- Formulir -->
    <form action="" method="post">
        <label for="Hobby">Pilih Hobby Anda:</label><br>
        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
        <input type="checkbox" name="hobi[]" value="Sepak Bola"> Sepak Bola<br>
        <input type="checkbox" name="hobi[]" value="Programming"> Programming<br> 
        <button type="submit" name="btn_contoh1">Kirim</button>
    </form>

    <!-- Jika formulir dikirim -->
    <?php
    if (isset($_POST['btn_contoh1'])) {
        $hobi = $_POST['hobi'];

        echo "Saya memilih: <br>";

        for ($i = 0; $i < count($hobi); $i++) {
            echo $hobi[$i] . "<br>";
        }

        echo "sebagai hari spesial saya";
    }
    ?>

</body>

</html>
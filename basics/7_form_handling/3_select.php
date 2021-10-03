<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Select - Penanganan Formulir</title>
</head>

<body>

    <h1>Input Select</h1>
    <hr>
    <p>
        Berikut contoh penaganan formulir dengan input type <code>select</code> (pilihan)
    </p>

    <h2>Contoh 1</h2>
    <!-- Formulir -->
    <form action="" method="post">
        Pilih:
        <select name="hobi" id="hobi">
            <option value="Sepak bola">Sepak bola</option>
            <option value="Bulu tangkis">Bulu tangkis</option>
            <option value="Renang">Renang</option>
        </select>
        <button type="submit" name="btn_contoh1">Kirim</button>
    </form>

    <!-- Jika formulir dikirim -->
    <?php
    if (isset($_POST['btn_contoh1'])) {
        $hobi = $_POST['hobi'];
        echo "Hobi saya: $hobi";
    }
    ?>


    <h2>Contoh 2</h2>
    <p>
        Tanpa menggunakan attribut <code>value</code>
    </p>
    <!-- Formulir -->
    <form action="" method="post">
        Pilih:
        <select name="hobi" id="hobi">
            <option>Sepak bola</option>
            <option>Bulu tangkis</option>
            <option>Renang</option>
        </select>
        <button type="submit" name="btn_contoh2">Kirim</button>
    </form>

    <!-- Jika formulir dikirim -->
    <?php
    if (isset($_POST['btn_contoh2'])) {
        $hobi = $_POST['hobi'];
        echo "Hobi saya: $hobi";
    }
    ?>

</body>

</html>
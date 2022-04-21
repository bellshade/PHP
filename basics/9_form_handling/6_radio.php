<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button - Penanganan Formulir</title>
</head>

<body>

    <h1>Radio Button</h1>
    <hr>
    <p>
        Berikut contoh penaganan formulir dengan input type <code>Radio Button</code>
    </p>

    <h2>Contoh</h2>
    <!-- Formulir -->
    <form action="" method="post">
        <label for="Hobby">Pilih Gender Anda:</label><br>
        <input type="radio" name="gender" id="male_gender" value="Laki-Laki" />
        <label for="male_gender">Laki-Laki</label>
        
        <input type="radio" name="gender" id="female_gender" value="Perempuan" />
        <label for="female_gender">Perempuan</label><br>
        <button type="submit" name="btn_contoh1">Kirim</button>
    </form>

    <!-- Jika formulir dikirim -->
    <?php
    if (isset($_POST['btn_contoh1'])) {
        $gender = $_POST['gender'];

        echo "Gender saya adalah $gender";
    }
    ?>

</body>

</html>
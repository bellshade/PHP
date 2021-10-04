<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tombol Kirim - Penanganan Formulir</title>
</head>

<body>

    <!-- Formulir -->
    <form action="" method="post">
        Klik: <button type="submit" name="kirim">Kirim</button>
    </form>

    <!-- Jika formulir di kirim -->
    <?php
    if (isset($_POST['kirim'])) {
        echo 'Hello World';
    }
    ?>

</body>

</html>
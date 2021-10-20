<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tombol Kirim - Penanganan Formulir</title>
</head>

<body>

    <h1>Input Berdasarkan Teks</h1>
    <hr>
    <p>
        Berikut contoh-contoh sederhana menerima data yang dikirim dari formulir.
    </p>


    <h2>Contoh 1 - Text dan Number</h2>
    <!-- Formulir -->
    <form action="" method="post">
        Nama: <input type="text" name="nama" autocomplete="off" style="margin-bottom: .5rem"><br />
        Umur: <input type="number" name="umur" autocomplete="off" style="margin-bottom: .5rem"><br />
        <button type="submit" name="btn_contoh1">Kirim</button>
    </form>

    <!-- Jika formulir dikirim -->
    <?php
    if (isset($_POST['btn_contoh1'])) {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];

        echo "Halo, nama saya $nama, umur $umur tahun";
    }
    ?>


    <h2>Contoh 2 - Email dan Password</h2>
    <!-- Formulir -->
    <form action="" method="post">
        Email: <input type="email" name="email"><br />
        Password: <input type="password" name="passsword"><br />
        <button type="submit" name="btn_contoh2">Kirim</button>
    </form>

    <!-- Jika formulir dikirim -->
    <?php
    if (isset($_POST['btn_contoh2'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        echo "Email: $email <br />";
        echo "Password: $pass <br />";
    }
    ?>


    <h2>Contoh 3 - Hidden</h2>
    <!-- Formulir -->
    <form action="" method="post">
        <input type="hidden" name="tersembunyi" value="Hello world!">
        <button type="submit" name="btn_contoh3">Kirim</button>
    </form>

    <!-- Jika formulir dikirim -->
    <?php
    if (isset($_POST['btn_contoh3'])) {
        $hidden = $_POST['tersembunyi'];
        echo $hidden;
    }
    ?>


    <h2>Contoh 4 - Date</h2>
    <!-- Formulir -->
    <form action="" method="post">
        <input type="date" name="tanggal"><br />
        <button type="submit" name="btn_contoh4">Kirim</button>
    </form>

    <!-- Jika formulir dikirim -->
    <?php
    if (isset($_POST['btn_contoh4'])) {
        $date = $_POST['tanggal'];
        echo "Sekarang tanggal $date";
    }
    ?>

</body>

</html>
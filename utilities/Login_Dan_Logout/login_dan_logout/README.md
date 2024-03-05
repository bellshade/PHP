Menggunakan PHP Versi 5

```PHP
login_form_index.php

<html>
<head>
  <title>Login FORM</title>
</head>
<body>
  <form method="post" action="login_cek.php">
    <!-- *Memberi akses menuju login_cek.php untuk dicek apakah Username & Password yang dimasukkan benar atau salah* -->
    <h2>Login</h2>
        <label>
            <h4>Username</h4>
        </label>
            <input type="text" name="username" placeholder="Enter a Username please">
            
        <label>
            <h4>Password</h4>
        </label>
            <input type="password" class="form-control mb-4" name="password" placeholder="Enter ur Password"> 
        <button type="submit">Login</button> 
        <?php if(isset($_GET['pesan'])) { ?>
         <label style="color:red;"><?php echo $_GET['pesan']; ?></label>
         <!-- *Memberi Popup jika Password yang dimasukkan salah* -->
        <?php } ?>
</body>
</html>
</form>
```

Setelah Memasukkan Username dan Password, akan dicek benar tidaknya Username & Password yang kita masukkan seperti dibawah ini :

```PHP
login_cek.php

<?php
error_reporting(0);
session_start();

//username adalah name yang digunakan untuk penamaan pada text field Username
$username=$_POST["username"];

//password adalah name yang digunakan untuk penamaan pada text field Password
$password=$_POST["password"];

//jika username yang dimasukkan adalah "aku" dan password "uka". Maka berhasil mendapat hak akses
if($username=="aku" && $password=="uka") {
    //Jika Username & Password yang dimasukkan benar, maka akan menuju view_index.php
    
    // CONTOHNYA :
    $_SESSION["hak_akses"]="admin";
    header("location: view_index.php");
} else {
    //jika Username & Password yang dimasukkan salah, maka akan kembali ke login_form_index.php sampai Username & Password yang dimasukkan benar
    header("location: login_form_index.php?pesan=Gagal! DATA TIDAK DITEMUKAN.");
}
?>
```

Selanjutnya buat file logout.php sebagai berikut:

```PHP
logout.php

<?php
    session_start();
    session_destroy();
    echo "<p align='center'>Anda telah logout!</p>";
    echo "<meta http-equiv='refresh' content='2; url=login_form_index.php'>";
```

Inti dari file ini adalah skrip session_destroy() yang akan menghapus data session **username** dan **password** yang dibuat pada file login_cek.php.

Menggunakan PHP Versi 5

```
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
```
login_cek.php

<?
	error_reporting(0);
	session_start();
	$username=$_POST["username"];
	//username adalah name yang digunakan untuk penamaan pada text field Username
	$password=$_POST["password"];
	//password adalah name yang digunakan untuk penamaan pada text field Password

	if($username=="aku" && $password=="uka")
	//jika username yang dimasukkan adalah "aku" dan password "uka". Maka berhasil mendapat hak akses
	{
		$_SESSION["hak_akses"]="admin";
		//Jika Username & Password yang dimasukkan benar, maka akan menuju view_index.php
		// CONTOHNYA :
		header("location: view_index.php");
	}
	else
	{
		header("location: login_form_index.php?pesan=Gagal! DATA TIDAK DITEMUKAN.");
		//jika Username & Password yang dimasukkan salah, maka akan kembali ke login_form_index.php sampai Username & Password yang dimasukkan benar
	}
?>
```
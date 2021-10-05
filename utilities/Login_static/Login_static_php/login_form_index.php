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
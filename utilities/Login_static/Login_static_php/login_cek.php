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
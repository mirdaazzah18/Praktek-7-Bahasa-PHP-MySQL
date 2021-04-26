<?php
	//tag untuk mengeksekusi file koneksi.php
	include "koneksi.php";
	$username=$_POST['username'];
	$password=$_POST['password'];

	//script untuk menjalankan query ke database
	$sql="SELECT username,pass from login where username='$username' and pass='$password'";
	$login=mysqli_query($conn,$sql);

	//menngecek apakah uname dan pass ditemukan
	if (mysqli_num_rows($login)>0) {
		//sebagai inisialisasi session
		session_start();
		$_SESSION['username'] = $username;
		header("location:tampilkontak.php");
	}else
	echo "<script>alert('Username atau Password Salah!');history.go(-1);</script>";
	?>	


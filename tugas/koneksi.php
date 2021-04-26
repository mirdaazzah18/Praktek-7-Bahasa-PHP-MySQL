<?php
	//sebagai deklarasi variabel untuk nama server, username, dan password
	$servername ="localhost";
	$username = "root";
	$password = "";
	$dbname = "latihann";

	//tag untuk membuka koneksi ke database myDB
	$conn = mysqli_connect($servername,$username,$password,$dbname);
?>
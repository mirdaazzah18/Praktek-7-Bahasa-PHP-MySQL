<?php 
	include "koneksi.php";
	//tag untuk menyimpan beberapa data kedalam variabel
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$pesan=$_POST['pesan'];
	$query="INSERT INTO mahasiswa (id,NAMA,JKEL,EMAIL,ALAMAT,KOTA,PESAN) VALUES ('$nim','$nama','$jenis_kelamin','$email','$alamat','$kota','$pesan')";
	mysqli_query($conn,$query);
	header("location:index.php");
?>
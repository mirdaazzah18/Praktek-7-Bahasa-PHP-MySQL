<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>LIST MAHASISWA</h2>
	<table border="1">
		<tr>
			<td>NO</td>
			<td>NIM</td>
			<td>NAMA</td>
			<td>GENDER</td>
			<td>EMAIL</td>
			<td>ALAMAT</td>
			<td>KOTA</td>
			<td>PESAN</td>
		</tr>
		<?php
			include "koneksi.php";
			$sql="SELECT * from mahasiswa";
			$mahasiswa=mysqli_query($conn,$sql);
			$no=1;
			foreach ($mahasiswa as $row) {
				$jenis_kelamin = $row['jenis_kelamin']=='P'?'PEREMPUAN':'LAKI-LAKI';
				echo "<tr>
				<td>$no</td>
				<td>".$row['id_mahasiswa']."</td>
				<td>".$row['nama']."</td>
				<td>".$jenis_kelamin."</td>
				<td>".$row['email']."</td>
				<td>".$row['alamat']."</td>
				<td>".$row['kota']."</td>
				<td>".$row['pesan']."</td>
				</tr>";
				$no++;
			}
		?>
	</table>
</body>
</html>
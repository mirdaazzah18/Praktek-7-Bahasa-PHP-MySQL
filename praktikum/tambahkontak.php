<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
</head>
<body style="background-color: rgba(238, 152, 53, 0.897);">
	<form method="post" action="simpan.php">
		<table>
		<!--tag untuk membuat sebuah tabel-->
			<tr>
				<td>NIM</td>
				<td><input type="text" onkeyup="isi_otomatis()" name="nim"></td>
			</tr>
			<tr>	
				<td>NAMA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>JENIS KELAMIN</td>
				<td><input type="radio" name="jenis_kelamin" value="L">Laki-Laki
				<input type="radio" name="jenis_kelamin" value="P">Perempuan</td>
			</tr>
			<tr>
				<td>EMAIL</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>KOTA</td>
				<td><input type="text" name="kota"></td>
			</tr>
			<tr>
				<td>PESAN</td>
				<td><textarea cols="45" name="pesan"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
			</tr>
		</table>
	</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color: rgba(238, 152, 53, 0.897);">
	<!--tag untuk menampilkan tulisan dengan format heading 2-->
	<h2 align="center">Selamat Datang! Silahkan Login Untuk Melihat Data</h2>
	<!--tag untuk membuat form dengan method post-->
	<form method="post" action="ceklogin.php">
		<!--script untuk membuat tabel untuk field inputan dan button-->
		<table align="center">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><button type="submit" name="Login">Login</button></td>
		</tr>
		</table>
	</form>
	
</body>
</html>
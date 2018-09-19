<?php

session_start();
if(isset($_SESSION["username"]) && isset($_SESSION["password"])) {
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form action="koneksi1.php" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Nama User</td>
					<td>:</td>
					<td><input type="text" name="namauser"></td>
				</tr>
					<td>Nim</td>
					<td>:</td>
					<td><input type="text" name ="nim"></td>
				</tr>
					<td>Fakultas</td>
					<td>

						<select name="fakultas" id="dropdown">
							<option>FIT</option>
							<option>FEB</option>
							<option>FIK</option>
							<option>FKB</option>
							<option>FRI</option>
							<option>FTE</option>
							<option>FIF</option>
						</select>
					<td>
						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td>
								<input type="radio" name="jk" value="1.">Laki-Laki
								<input type="radio" name="jk" value="2.">Perempuan
							</td>
						</tr>
						<tr>
							<td>file gambar</td>
							<td>:</td>
							<td>
								<input name="foto" type="file" required />
								<input type="submit" value="upload"/>
							</td>
						</tr>
					</table>
					<a href="logout.php">Logout</a>
				</body>
</html>
<?php
}else {
	header("Location: Login.php");
}
?>
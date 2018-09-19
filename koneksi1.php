<?php  
 $host = "localhost";  
 $user = "root";  
 $password = "";  
 $db = "data";  
 $conn = mysqli_connect($host,$user,$password, $db); 
 ord("koneksi gagal") ;
 try{
 	$pdo = new PDO("mysql:host={$host}; dbname={$db};", $user,$password);
 	$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }	catch (PDOException $e){
 	print "koneksi atau query bermasalah : " . $e -> getMessage() . "<br>";
 	die();
 }
 	$namauser = $_POST['namauser'];  
 	$nim = $_POST['nim'];  
 	$fakultas = $_POST['fakultas'];  
 	$jk = $_POST['jk']; 
 		$nama_foto = $_FILES['foto']['name'];
 		$tmp_name = $_FILES['foto']['tmp_name'];
 		$dir_foto = "picture/";
 		$target_foto = $dir_foto . $nama_foto;

 	if (!move_uploaded_file($tmp_name, $target_foto)) {
 		die("foto gagal diupload!");
 	}
 	else {
 		echo "berhasil";
	 	$query = $pdo -> prepare("INSERT INTO db_datadiri VALUES ('$nim' , '$namauser', '$fakultas', '$jk', '$nama_foto')");
	 	$query -> execute();
	 }
 ?>
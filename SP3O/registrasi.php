<?php
	/*$servername = "localhost";
	$username = "root";
	$password = "";
	$namaDB = "webku";
	
	
	$koneksi = mysqli_connect($servername, $username, $password, $namaDB);
	
	if ($koneksi == false) {
		die("Koneksi Gagal " . mysqli_connect_error());
	}
	echo "KONEKSI BERHASIL";*/
	
	//------------------------------------------------------------------------------------------------------------------------
	require("koneksi.php");
	$username= $_POST["username"];
	$password = $_POST["password"];
	$status = $_POST["status"];
	$nama_admin= $_POST["nama_admin"];
	
	//$pass = password_hash($pass,PASSWORD_DEFAULT);
	
	//------------------------------------------------------------------------------------------------------------------------
	/* require_once('defuse-crypto.phar');
	use Defuse\Crypto\Crypto;
	$userName = Crypto::encryptWithPassword($userName, $kunci); */
	$sql = "insert into admin (username,password, status, nama_Admin)
	values('$username','$password','$status','$nama_Admin')";
	/* if (mysqli_query($koneksi, $sql) == false) { 
		die("Error pada perintah SQL : " . $sql . "<br>" . mysqli_error()); 
	} 
	echo "<br />Data Tersimpan"; */
	
	//jalankanSQL($koneksi, $sql);
	header("location : index.php");exit();
?>

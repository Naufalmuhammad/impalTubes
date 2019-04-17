<?php
	require("koneksi.php");
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$koneksi = "SELECT * FROM datauser WHERE email LIKE '%$email%'";
	$hasil = jalankanSQL($koneksi,$mysqli);
	$baris = mysqli_fetch_assoc($hasil);
	
	if($baris["email"]== $email && password_verify($pass,$baris["password"])){
		if($baris["Level"] == administrator){
			header("location : index.php");exit();
		
		}else{
		header("location : login.html");exit();
		}
	}
?>
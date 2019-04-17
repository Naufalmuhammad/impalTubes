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
	//$usr = $_POST["userName"];
	$tglPesan = $_POST["tanggal_pesan"];
	$nmLengkap = $_POST["nama_pemesan"];
	$alamat = $_POST["alamat"];
	$email = $_POST["email"];
	$noHp = $_POST["no_hp"];
	$pass = $_POST["password"];
	
	$pass = password_hash($pass,PASSWORD_DEFAULT);
	
	//------------------------------------------------------------------------------------------------------------------------
	/* require_once('defuse-crypto.phar');
	use Defuse\Crypto\Crypto;
	$userName = Crypto::encryptWithPassword($userName, $kunci); */
	$sql = "insert into datauser (tanggal_pesan, nama_pemesan, alamat, email, no_hp, password)
	values('$tglPesan','$nmLengkap','$alamat','$email','$noHp','$pass')";
	/* if (mysqli_query($koneksi, $sql) == false) { 
		die("Error pada perintah SQL : " . $sql . "<br>" . mysqli_error()); 
	} 
	echo "<br />Data Tersimpan"; */
	
	jalankanSQL($koneksi, $sql);
	header("location : login.html");exit();
?>

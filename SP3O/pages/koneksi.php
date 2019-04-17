<?php
/**
 * using mysqli_connect for database connection
 */

$servername = 'localhost';
$databaseName = 'dbotondo';
$username = 'root';
$password = '';

$mysqli = mysqli_connect($servername, $username, $password, $databaseName); 

//if ($koneksi == false) {
		//die("Koneksi Gagal " . mysqli_connect_error());
	//} 
	//echo "DATA BERHASIL DI SIMPAN";
	
		//function jalankanSQL($koneksi,$sql){
			//$hasil = mysqli_query($koneksi,$sql);
			//if($hasil == false ){
				//die("Error pada perintah SQL :<br/> " . $sql . "<br>" . mysqli_error());
			//}
 
			//return $hasil;
		//}
?>
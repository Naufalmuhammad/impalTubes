<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY idPrd DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>
<form action="index.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
    <?php 
    $udata = mysqli_query($mysqli,"select * from produk");	
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
    <table width='80%' border=1>

    <tr>
        <th>Id Produk</th> <th> Nama Produk</th> <th>Quantity </th> <th>Harga </th> <th>Spesifikasi singkat </th> <th>Spesifikasi Lengkap </th> <th>Update</th>
    </tr>
	<?php 

	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$udata = mysqli_query($mysqli, "select * from produk where idPrd like '%".$cari."%'");	

	}else{

		$udata = mysqli_query($mysqli,"select * from produk");		
	}


    while($data = mysqli_fetch_array($udata)) { 
          
        echo "<tr>";
        echo "<td>".$data['Id_Produk']."</td>";
        echo "<td>".$data['Nama_Produk']."</td>";
        echo "<td>".$data['Jumlah_Produk']."</td>";
        echo "<td>".$data['Harga']."</td>";
        echo "<td>".$data['Spesifikasi_1']."</td>"; 
        echo "<td>".$data['Spesifikasi_2']."</td>"; 
        echo "<td><a href='edit.php?idPrd=$data[Id_Produk]'>Edit</a> | <a href='delete.php?idPrd=$data[Id_Produk]'>Delete</a></td></tr>";        
    }
        
        ?>
</table>
   

</body>
</html>
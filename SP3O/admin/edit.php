
<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
	$id = $_POST['id'];
    $nama_sparepart=$_POST['nama_sparepart'];
    $warna=$_POST['warna'];
    $kondisi=$_POST['kondisi'];
	$stok=$_POST['stok'];
	$harga=$_POST['harga'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE sparepart SET nama_sparepart='$nama_sparepart',warna='$warna',kondisi='$kondisi',stok='$stok',harga='$harga' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama_sparepart = $user_data['nama_sparepart'];
    $warna = $user_data['warna'];
    $kondisi = $user_data['kondisi'];
	$stok = $user_data['stok'];
	$harga = $user_data['harga'];
}
?>
<html>
<head>  
    <title>Edit Sparepart</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama Sparepart</td>
                <td><input type="text" name="name" value=<?php echo $nama_sparepart;?>></td>
            </tr>
            <tr> 
                <td>Warna</td>
                <td><input type="text" name="email" value=<?php echo $warna;?>></td>
            </tr>
            <tr> 
                <td>Kondisi</td>
                <td><input type="text" name="mobile" value=<?php echo $kondisi?>></td>
            </tr>
			<tr> 
                <td>Stok</td>
                <td><input type="text" name="mobile" value=<?php echo $stok;?>></td>
            </tr>
			<tr> 
                <td>Harga</td>
                <td><input type="text" name="mobile" value=<?php echo $harga;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
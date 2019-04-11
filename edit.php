<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
     $idproduk = $_POST['idPrd'];
     $namaproduk = $_POST['nmPrd'];
     $quantity = $_POST['qtyPrd'];
     $harga = $_POST['pricePrd'];
     $spessingkat = $_POST['spes1Prd'];
     $speslengkap = $_POST['spes2Prd'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE produk SET idPrd='$Id_Produk',nmPrd='$nmPrd',qtyPrd='$qtyPrd',pricePrd='$pricePrd',spes1Prd='$spes1Prdt',spes2Prd='$spes2Prd' WHERE Id_Produk=$idPrd ");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$idPrd = $_GET['idPrd'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE Id_Produk='$idPrd'");

while($user_data = mysqli_fetch_array($result)) {         
       
        $user_data['Id_Produk'];
        $user_data['Nama_Produk'];
        $user_data['Jumlah_Produk'];
        $user_data['Harga'];
        $user_data['Spesifikasi_1']; 
        $user_data['Spesifikasi_2'];  
    
}
?>
<html>
<head>  
    <title>Edit Data Produk</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_produk" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Id Produk</td>
                <td><input type="text" name="idproduk" value=<?php echo $idPrd;?>></td>
            </tr>
            <tr> 
                <td>Nama Produk</td>
                <td> <input type="text" name="namaproduk" value=<?php echo $nmPrd;?>> </td>
            </tr>
            <tr> 
                <td>Quantity</td>
                <td><input type="text" name="quantity" value=<?php echo $qtyPrd;;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value=<?php echo $pricePrd;?>></td>
            </tr>
            <tr> 
                 <td>Spesifikasi Singkat</td>
                <td><input type="text" name="spessingkat" value=<?php echo $spes1Prd;?>></td>
            </tr>
            <tr> 
                <td>Spesifikasi lengkap</td>
                <td><input type="text" name="speslengkap" value=<?php echo $spes2Prd;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="idPrd" value=<?php echo $_GET['idPrd'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
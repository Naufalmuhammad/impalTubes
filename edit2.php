<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
     $idproduk = $_POST['idproduk'];
     $namaproduk = $_POST['namaproduk'];
     $quantity = $_POST['quantity'];
     $harga = $_POST['harga'];
     $spessingkat = $_POST['spessingkat'];
     $speslengkap = $_POST['speslengkap'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE produk SET idPrd='$idproduk',nmPrd='$namaproduk',qtyPrd='$quantity',pricePrd='$harga',spes1Prd='$spessingkat',spes2Prd='$speslengkap' WHERE idPrd=$idproduk");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$idPrd = $_GET['idPrd'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE idPrd='$idPrd'");

while($user_data = mysqli_fetch_array($result)) {         
       
        $user_data['idPrd'];
        $user_data['nmPrd'];
        $user_data['qtyPrd'];
        $user_data['pricePrd'];
        $user_data['spes1Prd']; 
        $user_data['spes2Prd'];  
    
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
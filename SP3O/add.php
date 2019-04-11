<html>
<head>
    <title>Add Produk</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Id Produk</td>
                <td><input type="text" name="idproduk"></td>
            </tr>
            <tr> 
                <td>Nama Produk</td>
                <td><input type="text" name="namaproduk"></td>
            </tr>
            <tr> 
                <td>Quantity</td>
                <td><input type="text" name="quantity"></td>
            </tr>
             <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
             <tr> 
                <td>Spesifikasi Singkat</td>
                <td><input type="text" name="spessingkat"></td>
            </tr>
             <tr> 
                <td>Spesifikasi lengkap</td>
                <td><input type="text" name="speslengkap"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $idproduk = $_POST['idproduk'];
        $namaproduk = $_POST['namaproduk'];
        $quantity = $_POST['quantity'];
        $harga = $_POST['harga'];
        $spessingkat = $_POST['spessingkat'];
        $speslengkap = $_POST['speslengkap'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO produk (idPrd,nmPrd,qtyPrd,pricePrd,spes1Prd,spes2Prd) VALUES('$idproduk','$namaproduk','$quantity','$harga','$spessingkat','$speslengkap')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>
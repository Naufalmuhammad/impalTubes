<html>
<head>
    <title>Tambah Sparepart</title>
</head>
<ul>
      <li><a href="index.php">Beranda</a></li>
      <li><a href="profil.html">Profil</a></li>
	  <li><a href="add.php">Tambah Sparepart</a></li>
      <li class="log"><a href="logout.php">Keluar</a></li>
</ul>
<body>
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Sparepart</td>
                <td><input type="text" name="nama_sparepart"></td>
            </tr>
            <tr> 
                <td>Warna</td>
                <td><input type="text" name="warna"></td>
            </tr>
            <tr> 
                <td>Kondisi</td>
                <td><input type="text" name="kondisi"></td>
            </tr>
			<tr> 
                <td>Stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
			<tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_sparepart = $_POST['nama_sparepart'];
        $warna = $_POST['warna'];
        $kondisi = $_POST['kondisi'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO sparepart(nama_sparepart,warna,kondisi,stok,harga) VALUES('$nama_sparepart','$warna','$kondisi','$stok','$harga')");

        // Show message when user added
        echo "User added successfully" ;
    }
    ?>
</body>
</html>
<style media="screen">
h1{
  font-family: sans-serif;
}

table {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
  margin: 50px auto;
}

table th {
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}

table th:first-child{
  border-left:none;
}

table tr {
  text-align: center;
  padding-left: 20px;
}

table td:first-child {
  text-align: left;
  padding-left: 20px;
  border-left: 0;
}

table td {
  padding: 15px 35px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}

table tr:last-child td {
  border-bottom: 0;
}

table tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}

table tr:last-child td:last-child {
  -moz-border-radius-bottomright: 3px;
  -webkit-border-bottom-right-radius: 3px;
  border-bottom-right-radius: 3px;
}

table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
body{
  background-image: url(H3.jpg);
  background-size: 100%;
  background-attachment: fixed;
}
.header {
padding: 30px;
text-align: center;
margin-top:35px;
background-color: black;
}
ul{
  list-style-type: none;
  background-color: red;;
  border-radius: 20px;
  margin: 0px;
  padding: 0;
  overflow: hidden;
  top: 0;
  position: sticky-top;
}
li{
  float: left;
}
li a{
  padding: 20px 30px;
  color: black;
  display: inline-block;
  font-size: 20px;
  text-decoration: none;
}
li a:hover{
  display: inline-block;
  background-color: white;
  color: black;
}
.log{
  float : right;
}
</style>
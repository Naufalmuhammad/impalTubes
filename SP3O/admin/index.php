<?php
// Create database connection using config file
//include_once("koneksi.php");

// Fetch all users data from database
//$result = mysqli_query($mysqli, "SELECT * FROM sparepart ORDER BY id DESC");
?>

<html>
<head>    
    <title>Dunia Otomotif</title>
</head>
 <ul>
      <li><a href="index.php">Beranda</a></li>
      <li><a href="profil.html">Profil</a></li>
	  <li><a href="add.php">Tambah Sparepart</a></li>
      <li class="log"><a href="logout.php">Keluar</a></li>
 </ul>
<body>
<h2 style="text-align:center;">List Sparepart Motor DuniaMotor.com</h2>
    <table cellspacing='0'>
  		<thead>
  			<tr>
  				<th>Nama Sparepart</th>
  				<th>Warna</th>
  				<th>Kondisi</th>
  				<th>Stok</th>
				<th>Harga</th>
  			</tr>
  		</thead>
  		<tbody>
  			<tr>
  				<td>TwoBros Exhaust</td>
  				<td>Black Glossy</td>
  				<td>Second</td>
  				<td>3</td>
          <td>Rp. 2.500.000,00</td>
  			</tr>
  			<tr>
  				<td>SC Project Exhaust</td>
  				<td>Titanium</td>
  				<td>Baru</td>
  				<td>2</td>
          <td>Rp. 3.550.000,00</td>
  			</tr>
  			<tr>
  				<td>Windshield Jenong CBR1000R</td>
  				<td>Dark Smoke</td>
  				<td>Baru</td>
  				<td>5</td>
          <td>Rp. 500.000,00</td>
  			</tr>
  			<tr>
  				<td>Velg OZ Kawasaki Ninja 250 FI</td>
  				<td>Gold</td>
  				<td>baru</td>
  				<td>1</td>
          <td>Rp. 5.500.000,00</td>
  			</tr>
        <tr>
          <td>Velg OZ Kawasaki Ninja 250 FI</td>
          <td>Green Lime</td>
          <td>Baru</td>
          <td>1</td>
          <td>Rp. 5.500.000,00</td>
        </tr><tr>
          <td>Evotech Performance Frame Slider</td>
          <td>Black</td>
          <td>Baru</td>
          <td>3</td>
          <td>Rp. 1.600.000,00</td>
        </tr>
        <tr>
          <td>CNC Racing Clutch Slave</td>
          <td>Red</td>
          <td>Baru</td>
          <td>3</td>
          <td>Rp. 2.600.000,00</td>
        </tr>
        <tr>
          <td>TwoBros S1R Yamaha R6</td>
          <td>Black</td>
          <td>Second</td>
          <td>1</td>
          <td>Rp. 12.000.000,00</td>
        </tr>
        <tr>
          <td>CNC Racing Front Brake Fluid Reservoir Caps</td>
          <td>Red</td>
          <td>Baru</td>
          <td>5</td>
          <td>RP. 1.300.000,00</td>
        </tr>
        <tr>
          <td>CNC Racing Clip-On HandleBars</td>
          <td>Black</td>
          <td>Baru</td>
          <td>9</td>
          <td>Rp. 3.600.000,00</td>
        </tr>
        <tr>
          <td>CNC Racing Handlebar 22mm</td>
          <td>Black</td>
          <td>Baru</td>
          <td>2</td>
          <td>Rp. 1.350.000,00</td>
        </tr>
        <tr>
          <td>SC Project CRT DE-CAT Yamaha R1</td>
          <td>Titanium</td>
          <td>Baru</td>
          <td>1</td>
          <td>Rp. 29.000.000,00</td>
        </tr>
        <tr>
          <td>Akrapovic Racing Line Yamaha MT-09</td>
          <td>Carbon</td>
          <td>Second</td>
          <td>1</td>
          <td>Rp. 11.500.000,00</td>
        </tr>
        <tr>
          <td>SC Project S1 BMW S 1000 RR</td>
          <td>Titanium</td>
          <td>Baru</td>
          <td>2</td>
          <td>Rp. 12.500.000,00</td>
        </tr>
        <tr>
          <td>SC Project GP EVO Slip On Honda CBR1000R</td>
          <td>Carbon</td>
          <td>Baru</td>
          <td>1</td>
          <td>Rp. 8.950.000,00</td>
        </tr>
        <tr>
          <td>CNC Racing Turn Indicator Task</td>
          <td>Black</td>
          <td>Baru</td>
          <td>10</td>
          <td>Rp. 1.150.000,00</td>
        </tr>
  		</tbody>
  	</table>
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
  background-image: url(cbr250rr.jpg);
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

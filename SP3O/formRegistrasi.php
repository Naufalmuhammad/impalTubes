<html>
	<body>
	<div class="container">
	<div class="panel-heading">
    </div>
    <br/><br/>
	<a href="index.php">Go to Home</a>
    <br/><br/>
    <form action="registrasi.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="text" name="status"></td>
            </tr>
			<tr> 
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_admin"></td>
            </tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
	</div>
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
  background-image: url(custom.jpg);
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
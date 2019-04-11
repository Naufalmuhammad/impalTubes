<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$idPrd = $_GET['idPrd'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM produk WHERE idPrd='$idPrd'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>
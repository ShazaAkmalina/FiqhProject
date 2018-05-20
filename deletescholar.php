<?php
include("dbase.php");

$username = $_GET["username"];

$query = "DELETE FROM admin WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if(result) {
	echo "<script type='text/javascript'> window.location='managehome.php' </script>";
}
?>
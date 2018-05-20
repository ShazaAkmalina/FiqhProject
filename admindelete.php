<?php
include("dbase.php");

$id = $_GET["id"];

$query = "DELETE FROM list WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if(result) {
	echo "<script type='text/javascript'> window.location='adminlist.php' </script>";
}
?>
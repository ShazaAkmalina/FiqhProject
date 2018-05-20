<?php


include("dbase.php");
extract( $_POST );
	
	
$query = "UPDATE basic SET intro='$intro' WHERE id='$id'";
$result = mysqli_query($conn, $query) or die ("Could not execute query");
if($result) {
	echo "<script type='text/javascript'> window.location='managehome.php' </script>";
	
}
?>
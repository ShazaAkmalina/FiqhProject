<?php


include("dbase.php");
extract( $_POST );
	
	
$query = "UPDATE basic SET hadis='$hadis' WHERE id='$id'";
$result = mysqli_query($conn, $query) or die ("Could not execute query in admininsertanswer.php");
if($result) {
	echo "<script type='text/javascript'> window.location='managehome.php' </script>";
	
}
?>
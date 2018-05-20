<?php

include("dbase.php");
	
	$name = $_POST['name'];
	$position = $_POST['position'];
	$username = $_POST['txtname'];
	$password = $_POST['psw'];
	
$query = "INSERT INTO admin(name,position,username,password) VALUES ('$name','$position','$username','$password')";
$result = mysqli_query($conn, $query) or die ("Could not execute query in insertquestion.php");
if($result) {
	echo "<script type='text/javascript'> window.location='managehome.php' </script>";
}
?>